<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Routing\Router;

/**
 * ContactsListing Controller
 *
 * @property \App\Model\Table\ContactsListingTable $ContactsListing
 * @method \App\Model\Entity\ContactsListing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsListingController extends AppController
{

    public $base_url;

    public function  initialize(): void {
        parent:: initialize();
        $this->base_url = Router::url("/", true);
        $this->set("baseurl", $this->base_url);
        $this->viewBuilder()->setLayout('dashboardlayout');
        $this->loadComponent('Flash');
        
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $contactsListing = $this->paginate($this->ContactsListing);

        $this->set(compact('contactsListing'));
    }

    public function userlisting(){
    

        // $this->paginate = [
        //     'contain' => ['Users'],
        // ];
        $contactsListing = $this->paginate($this->ContactsListing,[
            'limit' => 4,
            'order' => [
                'id' => 'desc',
            ],
        ]);
       
        $this->set(compact('contactsListing'));
        
        
    }

    public function userstatus($id = null, $status){
           
        $this->request->allowMethod(['post']);
        $contactlist = $this->ContactsListing->get($id);
    
        if($status == 1){
        $contactlist->status = 0;
        $this->Flash->success(__('The status has been changed.'));
        }else{
        $contactlist->status = 1;
        $this->Flash->success(__('The status has been changed.'));
        }
        if($this->ContactsListing->save($contactlist)){
            $this->Flash->success(__('The status has been changed.'));
    
        }
        return $this->redirect(['controller'=>'contacts-listing', 'action' => 'userlisting']);
    }


    /**
     * View method
     *
     * @param string|null $id Contacts Listing id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactsListing = $this->ContactsListing->get($id, [
            'contain' => ['Users'],
        ]);
        
        $this->set(compact('contactsListing'));
        
    }
    
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('dashboardlayout');
        
        $contactsListing = $this->ContactsListing->newEmptyEntity();
        if ($this->request->is('post')) {
            $contactsListing = $this->ContactsListing->patchEntity($contactsListing, $this->request->getData());
            if ($this->ContactsListing->save($contactsListing)) {
                $this->Flash->success(__('The contacts listing has been saved.'));
                
                return $this->redirect(['action' => 'userlisting']);
            }
            $this->Flash->error(__('The contacts listing could not be saved. Please, try again.'));
        }
        $users = $this->ContactsListing->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('contactsListing', 'users'));
    }

    public function getuser($id = null)
   {   
   
   
      $id = $_GET['id'];
      $contactsListing = $this->ContactsListing->get($id);

   
       echo json_encode($contactsListing);
       exit;
    }
    
    /**
     * Edit method
     *
     * @param string|null $id Contacts Listing id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edituser($id = null)
    {
        if ($this->request->is(['patch', 'post', 'put'])) {

        $data = $this->request->getData();

        $id = $this->request->getData('id');

        $contactsListing = $this->ContactsListing->get($id, [
            'contain' => [],
        ]);
            $contactsListing = $this->ContactsListing->patchEntity($contactsListing, $this->request->getData());
            if ($this->ContactsListing->save($contactsListing)) {

                  echo json_encode(array(
                    "status" => 1,
                    "message" => "The contactlisting  has been saved.",
                ));
                exit;

                return $this->redirect(['action' => 'index']);
            }
            echo json_encode(array(
                "status" => 0,
                "message" => "The car could not be saved. Please, try again.",
            ));
            exit;
        }
        $users = $this->ContactsListing->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('contactsListing', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contacts Listing id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {

        if ($this->request->is('ajax')) {     
            
           $this->autoRender = false;

           $id = $this->request->getData('id');
                    
            $deletestatus = $this->request->getData('deletestatus');
                  
            $contactlist = $this->ContactsListing->get($id);
                    // dd($car);
                     
            if($deletestatus == 1)

               $contactlist->deletestatus = 0;
                 else
                $contactlist->deletestatus = 1;
            
                if($this->ContactsListing->save($contactlist)){
                    echo json_encode(array(
                       "status" => 1,
                        "message" => "The student has been deleted."
                        )); 
            
                    }           
    }
 }
}
