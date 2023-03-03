<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function admin(){
        $this->viewBuilder()->setLayout('admin');
    }

     public function index()
    {
        $users = $this->paginate($this->Users);
        // dd($users);

        $this->set(compact('users'));

        $this->viewBuilder()->setLayout('admin');

    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->viewBuilder()->setLayout('admin');

    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function deleteuser($id = null)
    {
        

        if ($this->request->is('ajax')) {     
            
            $this->autoRender = false;
 
            $id = $this->request->getData('id');
            
                     
             $deletestatus = $this->request->getData('deletestatus');
                   
             $user = $this->Users->get($id);
                     // dd($car);
                      
             if($deletestatus == 1)
 
                $user->deletestatus = 0;
                  else
                 $user->deletestatus = 1;
             
                 if($this->Users->save($user)){
                     echo json_encode(array(
                        "status" => 1,
                         "message" => "The user has been deleted."
                         )); 
             
                 }           
         }
    }

    public function login()
    {
        $this->viewBuilder()->setLayout('admin');

        $this->request->allowMethod(['get','post']);
            $result = $this->Authentication->getResult();    
            if ($result->isValid()) {            
                return $this->redirect(['controller'=>'insurances-company', 'action'=>'index']);
            }
            // display error if user submitted and authentication failed
            if ($this->request->is('post') && !$result->isValid()) {
                $this->Flash->error(__('Invalid username or password'));
                // $this->request->is('post');
            }     
    }
}