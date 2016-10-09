<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CentroCosto Controller
 *
 * @property \App\Model\Table\CentroCostoTable $CentroCosto
 */
class CentroCostoController extends AppController
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
        $centroCosto = $this->paginate($this->CentroCosto);

        $this->set(compact('centroCosto'));
        $this->set('_serialize', ['centroCosto']);
    }

    /**
     * View method
     *
     * @param string|null $id Centro Costo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $centroCosto = $this->CentroCosto->get($id, [
            'contain' => []
        ]);

        $this->set('centroCosto', $centroCosto);
        $this->set('_serialize', ['centroCosto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $centroCosto = $this->CentroCosto->newEntity();
        if ($this->request->is('post')) {
            $centroCosto = $this->CentroCosto->patchEntity($centroCosto, $this->request->data);
            if ($this->CentroCosto->save($centroCosto)) {
                $this->Flash->success(__('The centro costo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The centro costo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('centroCosto'));
        $this->set('_serialize', ['centroCosto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Centro Costo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $centroCosto = $this->CentroCosto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $centroCosto = $this->CentroCosto->patchEntity($centroCosto, $this->request->data);
            if ($this->CentroCosto->save($centroCosto)) {
                $this->Flash->success(__('The centro costo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The centro costo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('centroCosto'));
        $this->set('_serialize', ['centroCosto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Centro Costo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $centroCosto = $this->CentroCosto->get($id);
        if ($this->CentroCosto->delete($centroCosto)) {
            $this->Flash->success(__('The centro costo has been deleted.'));
        } else {
            $this->Flash->error(__('The centro costo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
