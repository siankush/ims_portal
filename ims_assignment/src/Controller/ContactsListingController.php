<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ContactsListing Controller
 *
 * @property \App\Model\Table\ContactsListingTable $ContactsListing
 * @method \App\Model\Entity\ContactsListing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactsListingController extends AppController
{
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
    
        $this->viewBuilder()->setLayout('dashboardlayout');

        // $this->paginate = [
        //     'contain' => ['Users'],
        // ];
        $contactsListing = $this->paginate($this->ContactsListing);
       
        $this->set(compact('contactsListing'));
        
        
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

    /**
     * Edit method
     *
     * @param string|null $id Contacts Listing id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactsListing = $this->ContactsListing->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactsListing = $this->ContactsListing->patchEntity($contactsListing, $this->request->getData());
            if ($this->ContactsListing->save($contactsListing)) {
                $this->Flash->success(__('The contacts listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacts listing could not be saved. Please, try again.'));
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
        $this->request->allowMethod(['post', 'delete']);
        $contactsListing = $this->ContactsListing->get($id);
        if ($this->ContactsListing->delete($contactsListing)) {
            $this->Flash->success(__('The contacts listing has been deleted.'));
        } else {
            $this->Flash->error(__('The contacts listing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
