<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstadosCiviles Controller
 *
 * @property \App\Model\Table\EstadosCivilesTable $EstadosCiviles
 */
class EstadosCivilesController extends AppController
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
        $estadosCiviles = $this->paginate($this->EstadosCiviles);

        $this->set(compact('estadosCiviles'));
        $this->set('_serialize', ['estadosCiviles']);
    }

    /**
     * View method
     *
     * @param string|null $id Estados Civile id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estadosCivile = $this->EstadosCiviles->get($id, [
            'contain' => []
        ]);

        $this->set('estadosCivile', $estadosCivile);
        $this->set('_serialize', ['estadosCivile']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estadosCivile = $this->EstadosCiviles->newEntity();
        if ($this->request->is('post')) {
            $estadosCivile = $this->EstadosCiviles->patchEntity($estadosCivile, $this->request->data);
			pr($estadosCivile);
            if ($this->EstadosCiviles->save($estadosCivile)) {
                $this->Flash->success(__('The estados civile has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estados civile could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estadosCivile'));
        $this->set('_serialize', ['estadosCivile']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estados Civile id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estadosCivile = $this->EstadosCiviles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estadosCivile = $this->EstadosCiviles->patchEntity($estadosCivile, $this->request->data);
            if ($this->EstadosCiviles->save($estadosCivile)) {
                $this->Flash->success(__('The estados civile has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estados civile could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estadosCivile'));
        $this->set('_serialize', ['estadosCivile']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estados Civile id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estadosCivile = $this->EstadosCiviles->get($id);
        if ($this->EstadosCiviles->delete($estadosCivile)) {
            $this->Flash->success(__('The estados civile has been deleted.'));
        } else {
            $this->Flash->error(__('The estados civile could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
