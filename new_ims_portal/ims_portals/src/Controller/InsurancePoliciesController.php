<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * InsurancePolicies Controller
 *
 * @property \App\Model\Table\InsurancePoliciesTable $InsurancePolicies
 * @method \App\Model\Entity\InsurancePolicy[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InsurancePoliciesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['InsuranceCompanies'],
        ];
        $insurancePolicies = $this->paginate($this->InsurancePolicies);
        // dd($insurancePolicies);

        $this->set(compact('insurancePolicies'));
    }

    /**
     * View method
     *
     * @param string|null $id Insurance Policy id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $insurancePolicy = $this->InsurancePolicies->get($id, [
            'contain' => ['InsuranceCompanies'],
        ]);
        // $insuranceCompanies = $this->InsuranceCompanies->find('list', ['keyField' => 'id', 'valueField' => 'name']);

        $this->set(compact('insurancePolicy'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $this->paginate = [
            'contain' => ['InsuranceCompanies'],
        ];
        $insurancePolicies = $this->paginate($this->InsurancePolicies);
        // dd($insurancePolicies);

        $this->loadModel('InsuranceCompanies');
        // $insuranceCompanies = $this->paginate($this->InsuranceCompanies);
        $insurancePolicy = $this->InsurancePolicies->newEmptyEntity();        
        if ($this->request->is('post')) {
            $insurancePolicy = $this->InsurancePolicies->patchEntity($insurancePolicy, $this->request->getData());
            if ($this->InsurancePolicies->save($insurancePolicy)) {
                $this->Flash->success(__('The insurance policy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insurance policy could not be saved. Please, try again.'));
        }
        $insuranceCompanies = $this->InsuranceCompanies->find('list', ['keyField' => 'id', 'valueField' => 'name']);        
   
        $this->set(compact('insurancePolicy', 'insuranceCompanies'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Insurance Policy id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $insurancePolicy = $this->InsurancePolicies->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $insurancePolicy = $this->InsurancePolicies->patchEntity($insurancePolicy, $this->request->getData());
            if ($this->InsurancePolicies->save($insurancePolicy)) {
                $this->Flash->success(__('The insurance policy has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The insurance policy could not be saved. Please, try again.'));
        }
        $insuranceCompanies = $this->InsurancePolicies->InsuranceCompanies->find('list', ['limit' => 200])->all();
        $this->set(compact('insurancePolicy', 'insuranceCompanies'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Insurance Policy id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $insurancePolicy = $this->InsurancePolicies->get($id);
        if ($this->InsurancePolicies->delete($insurancePolicy)) {
            $this->Flash->success(__('The insurance policy has been deleted.'));
        } else {
            $this->Flash->error(__('The insurance policy could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
