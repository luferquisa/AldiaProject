<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ClienteEmpresas Controller
 *
 * @property \App\Model\Table\ClienteEmpresasTable $ClienteEmpresas
 */
class ClienteEmpresasController extends AppController
{
	
	public function initialize()
	{
		parent::initialize();
		
		// Set the layout
		$this->viewBuilder()->layout('front');
	}

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $clienteEmpresas = $this->paginate($this->ClienteEmpresas);

        $this->set(compact('clienteEmpresas'));
        $this->set('_serialize', ['clienteEmpresas']);
    }

    /**
     * View method
     *
     * @param string|null $id Cliente Empresa id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clienteEmpresa = $this->ClienteEmpresas->get($id, [
            'contain' => []
        ]);

        $this->set('clienteEmpresa', $clienteEmpresa);
        $this->set('_serialize', ['clienteEmpresa']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clienteEmpresa = $this->ClienteEmpresas->newEntity();
        if ($this->request->is('post')) {
            $clienteEmpresa = $this->ClienteEmpresas->patchEntity($clienteEmpresa, $this->request->data);
            if ($this->ClienteEmpresas->save($clienteEmpresa)) {
                $this->Flash->success(__('The cliente empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente empresa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clienteEmpresa'));
        $this->set('_serialize', ['clienteEmpresa']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente Empresa id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clienteEmpresa = $this->ClienteEmpresas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clienteEmpresa = $this->ClienteEmpresas->patchEntity($clienteEmpresa, $this->request->data);
            if ($this->ClienteEmpresas->save($clienteEmpresa)) {
                $this->Flash->success(__('The cliente empresa has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cliente empresa could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('clienteEmpresa'));
        $this->set('_serialize', ['clienteEmpresa']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente Empresa id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clienteEmpresa = $this->ClienteEmpresas->get($id);
        if ($this->ClienteEmpresas->delete($clienteEmpresa)) {
            $this->Flash->success(__('The cliente empresa has been deleted.'));
        } else {
            $this->Flash->error(__('The cliente empresa could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
