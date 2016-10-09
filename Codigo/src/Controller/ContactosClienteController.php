<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ContactosCliente Controller
 *
 * @property \App\Model\Table\ContactosClienteTable $ContactosCliente
 */
class ContactosClienteController extends AppController
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
        $contactosCliente = $this->paginate($this->ContactosCliente);

        $this->set(compact('contactosCliente'));
        $this->set('_serialize', ['contactosCliente']);
    }

    /**
     * View method
     *
     * @param string|null $id Contactos Cliente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contactosCliente = $this->ContactosCliente->get($id, [
            'contain' => []
        ]);

        $this->set('contactosCliente', $contactosCliente);
        $this->set('_serialize', ['contactosCliente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contactosCliente = $this->ContactosCliente->newEntity();
        if ($this->request->is('post')) {
            $contactosCliente = $this->ContactosCliente->patchEntity($contactosCliente, $this->request->data);
            if ($this->ContactosCliente->save($contactosCliente)) {
                $this->Flash->success(__('The contactos cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contactos cliente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contactosCliente'));
        $this->set('_serialize', ['contactosCliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Contactos Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contactosCliente = $this->ContactosCliente->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contactosCliente = $this->ContactosCliente->patchEntity($contactosCliente, $this->request->data);
            if ($this->ContactosCliente->save($contactosCliente)) {
                $this->Flash->success(__('The contactos cliente has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The contactos cliente could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('contactosCliente'));
        $this->set('_serialize', ['contactosCliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Contactos Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contactosCliente = $this->ContactosCliente->get($id);
        if ($this->ContactosCliente->delete($contactosCliente)) {
            $this->Flash->success(__('The contactos cliente has been deleted.'));
        } else {
            $this->Flash->error(__('The contactos cliente could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
