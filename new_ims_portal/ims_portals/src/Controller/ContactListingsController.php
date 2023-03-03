<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Routing\Router;

/**
 * ContactListings Controller
 *
 * @property \App\Model\Table\ContactListingsTable $ContactListings
 * @method \App\Model\Entity\ContactListings[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactListingsController extends AppController
{
    public function  initialize(): void {
        parent:: initialize();
        $this->base_url = Router::url("/", true);
        $this->set("baseurl", $this->base_url);
        $this->viewBuilder()->setLayout('dashboardlayout');
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
        $contactListings = $this->paginate($this->ContactListings);

        $this->set(compact('contactListings'));
    }

    public function userlisting(){
            
        $result = $this->Authentication->getIdentity();
        $id = $result['id'];        
        // $contactListings = $this->paginate($this->ContactListings);
        
                    $contactListings = $this->ContactListings->find('all')->where(['user_id'=> $id])->all();  
                    // $contacts = $this->ContactListings->find('all')->where(['user_id'=> $this])

        // $this->paginate = [
        //     'contain' => ['Users'],
        // ];
        // dd($contactListings);

        $contactListings = $this->paginate($this->ContactListings,[
            'limit' => 4,
            'order' => [
                'id' => 'desc',
            ],
        ]);
       
        // $this->set(compact('contactListings'));
       
        $this->set(compact('contactListings'));
                
    }

    public function userstatus($id = null, $status){
           
        $this->request->allowMethod(['post']);
        $contactlist = $this->ContactListings->get($id);
    
        if($status == 1){
        $contactlist->status = 0;
        $this->Flash->success(__('The status has been changed.'));
        }else{
        $contactlist->status = 1;
        $this->Flash->success(__('The status has been changed.'));
        }
        if($this->ContactListings->save($contactlist)){
            $this->Flash->success(__('The status has been changed.'));
    
        }
        return $this->redirect(['controller'=>'contact-listings', 'action' => 'userlisting']);
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
        // $this->viewBuilder()->setLayout(nulll);
        // $this->loadModel('Users');
        $contactListings = $this->ContactListings->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('contactListings'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Users');
                             
            $result = $this->Authentication->getIdentity();

            // $id=$result['id'];
            // dd($id);
            // pr($result);
            // die;
        
            // // $user = $this->Users->find('all')->where(['id'=> $id])->all();  

            // $products = $this->paginate($this->Users->find('all')->where(['id'=> $id]));
            // dd($products);                            
        
        

        $contactListings = $this->ContactListings->newEmptyEntity();
        if ($this->request->is('post')) {
            $contactListings = $this->ContactListings->patchEntity($contactListings, $this->request->getData());
            if ($this->ContactListings->save($contactListings)) {
                $this->Flash->success(__('The contacts listing has been saved.'));

                return $this->redirect(['action' => 'userlisting']);
            }
            $this->Flash->error(__('The contacts listing could not be saved. Please, try again.'));
        }
        $users = $this->ContactListings->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('contactListings', 'users', 'result'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contacts Listing id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $this->loadModel('Users');        
        $result = $this->Authentication->getIdentity();

        $contactListings = $this->ContactListings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactListings = $this->ContactListings->patchEntity($contactListings, $this->request->getData());
            if ($this->ContactListings->save($contactListings)) {
                $this->Flash->success(__('The contacts listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacts listing could not be saved. Please, try again.'));
        }
        $users = $this->ContactListings->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('contactListings', 'users', 'result'));
    }


    public function getuser($id = null)
    {   
    
    
       $id = $_GET['id'];
       $contactListings = $this->ContactListings->get($id);
 
    
        echo json_encode($contactListings);
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
 
         $contactListings = $this->ContactListings->get($id, [
             'contain' => [],
         ]);
             $contactListings = $this->ContactListings->patchEntity($contactListings, $this->request->getData());
             if ($this->ContactListings->save($contactListings)) {
 
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
         $users = $this->ContactListings->Users->find('list', ['limit' => 200])->all();
         $this->set(compact('contactListings', 'users'));
     }


    /**
     * Delete method
     *
     * @param string|null $id Contacts Listing id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null){

        if ($this->request->is('ajax')) {     
            
           $this->autoRender = false;

           $id = $this->request->getData('id');
                    
            $deletestatus = $this->request->getData('deletestatus');
                  
            $contactlist = $this->ContactListings->get($id);
                    // dd($car);
                     
            if($deletestatus == 1)

               $contactlist->deletestatus = 0;
                 else
                $contactlist->deletestatus = 1;
            
                if($this->ContactListings->save($contactlist)){
                    echo json_encode(array(
                       "status" => 1,
                        "message" => "The contactlist has been deleted."
                        )); 
            
                }           
        }
    }

    public function addpolicy(){

    }
}
