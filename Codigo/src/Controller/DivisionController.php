<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Division Controller
 *
 * @property \App\Model\Table\DivisionTable $Division
 */
class DivisionController extends AppController
{
	
	public function initialize()
	{
		parent::initialize();
		
		// Set the layout
		$this->viewBuilder()->layout('configuracion');
	}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $division = $this->paginate($this->Division);

        $this->set(compact('division'));
        $this->set('_serialize', ['division']);
    }

    /**
     * View method
     *
     * @param string|null $id Division id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $division = $this->Division->get($id, [
            'contain' => []
        ]);

        $this->set('division', $division);
        $this->set('_serialize', ['division']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $division = $this->Division->newEntity();
        if ($this->request->is('post')) {
            $division = $this->Division->patchEntity($division, $this->request->data);
            if ($this->Division->save($division)) {
                $this->Flash->success(__('The division has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The division could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('division'));
        $this->set('_serialize', ['division']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Division id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $division = $this->Division->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $division = $this->Division->patchEntity($division, $this->request->data);
            if ($this->Division->save($division)) {
                $this->Flash->success(__('The division has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The division could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('division'));
        $this->set('_serialize', ['division']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Division id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $division = $this->Division->get($id);
        if ($this->Division->delete($division)) {
            $this->Flash->success(__('The division has been deleted.'));
        } else {
            $this->Flash->error(__('The division could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
