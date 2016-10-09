<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubcentroCosto Controller
 *
 * @property \App\Model\Table\SubcentroCostoTable $SubcentroCosto
 */
class SubcentroCostoController extends AppController
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
        $subcentroCosto = $this->paginate($this->SubcentroCosto);

        $this->set(compact('subcentroCosto'));
        $this->set('_serialize', ['subcentroCosto']);
    }

    /**
     * View method
     *
     * @param string|null $id Subcentro Costo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subcentroCosto = $this->SubcentroCosto->get($id, [
            'contain' => []
        ]);

        $this->set('subcentroCosto', $subcentroCosto);
        $this->set('_serialize', ['subcentroCosto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subcentroCosto = $this->SubcentroCosto->newEntity();
        if ($this->request->is('post')) {
            $subcentroCosto = $this->SubcentroCosto->patchEntity($subcentroCosto, $this->request->data);
            if ($this->SubcentroCosto->save($subcentroCosto)) {
                $this->Flash->success(__('The subcentro costo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subcentro costo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('subcentroCosto'));
        $this->set('_serialize', ['subcentroCosto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subcentro Costo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subcentroCosto = $this->SubcentroCosto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subcentroCosto = $this->SubcentroCosto->patchEntity($subcentroCosto, $this->request->data);
            if ($this->SubcentroCosto->save($subcentroCosto)) {
                $this->Flash->success(__('The subcentro costo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subcentro costo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('subcentroCosto'));
        $this->set('_serialize', ['subcentroCosto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subcentro Costo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subcentroCosto = $this->SubcentroCosto->get($id);
        if ($this->SubcentroCosto->delete($subcentroCosto)) {
            $this->Flash->success(__('The subcentro costo has been deleted.'));
        } else {
            $this->Flash->error(__('The subcentro costo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
