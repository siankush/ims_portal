<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * InsurancesCompany Controller
 *
 * @method \App\Model\Entity\InsurancesCompany[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InsurancesCompanyController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $insurancesCompany = $this->paginate($this->InsurancesCompany);

        $this->set(compact('insurancesCompany'));
        $this->viewBuilder()->setLayout('admin');

    }

    /**
     * View method
     *
     * @param string|null $id Insurances Company id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $insurancesCompany = $this->InsurancesCompany->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('insurancesCompany'));
        $this->viewBuilder()->setLayout('admin');

    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $insurancesCompany = $this->InsurancesCompany->newEmptyEntity();
        if ($this->request->is('post')) {
            $insurancesCompany = $this->InsurancesCompany->patchEntity($insurancesCompany, $this->request->getData());
            if ($this->InsurancesCompany->save($insurancesCompany)) {
                $this->Flash->success(__('The insurances company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insurances company could not be saved. Please, try again.'));
        }
        $this->set(compact('insurancesCompany'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Insurances Company id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $insurancesCompany = $this->InsurancesCompany->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $insurancesCompany = $this->InsurancesCompany->patchEntity($insurancesCompany, $this->request->getData());
            if ($this->InsurancesCompany->save($insurancesCompany)) {
                $this->Flash->success(__('The insurances company has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insurances company could not be saved. Please, try again.'));
        }
        $this->set(compact('insurancesCompany'));
        $this->viewBuilder()->setLayout('admin');

    }
    public function insuranceStatus($id=null,$status){

        $this->request->allowMethod(['post']);
        $insurancesCompany = $this->InsurancesCompany->get($id);

        if($status == 1)
            $insurancesCompany->status = 0;
        else
            $insurancesCompany->status = 1;
        if($this->InsurancesCompany->save($insurancesCompany)){
            $this->Flash->success(__('User status has changed'));
        }
        return $this->redirect(['action' => 'index']);

    }
    /**
     * Delete method
     *
     * @param string|null $id Insurances Company id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id)
    {
        // $this->request->allowMethod(['post', 'delete']);
        // $insurancesCompany = $this->InsurancesCompany->get($id);
        // if ($this->InsurancesCompany->delete($insurancesCompany)) {
        //     $this->Flash->success(__('The insurances company has been deleted.'));
        // } else {
        //     $this->Flash->error(__('The insurances company could not be deleted. Please, try again.'));
        // }

        // return $this->redirect(['action' => 'index']);

        $insurancesCompany = $this->InsurancesCompany->get($id);

        if($this->request->is(['post','delete'])){
            $insurancesCompany->deleted = 0;
            if($this->InsurancesCompany->save($insurancesCompany)){
                $this->Flash->success(__('The insurances company has been deleted.'));
            }else{
                $this->Flash->error(__('The insurances company could not be deleted. Please, try again.'));
            }
            
        }
        return $this->redirect(['action' => 'index']);

    }
}
