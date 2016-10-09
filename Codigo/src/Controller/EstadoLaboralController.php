<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EstadoLaboral Controller
 *
 * @property \App\Model\Table\EstadoLaboralTable $EstadoLaboral
 */
class EstadoLaboralController extends AppController
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
        $estadoLaboral = $this->paginate($this->EstadoLaboral);

        $this->set(compact('estadoLaboral'));
        $this->set('_serialize', ['estadoLaboral']);
    }

    /**
     * View method
     *
     * @param string|null $id Estado Laboral id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estadoLaboral = $this->EstadoLaboral->get($id, [
            'contain' => []
        ]);

        $this->set('estadoLaboral', $estadoLaboral);
        $this->set('_serialize', ['estadoLaboral']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estadoLaboral = $this->EstadoLaboral->newEntity();
        if ($this->request->is('post')) {
            $estadoLaboral = $this->EstadoLaboral->patchEntity($estadoLaboral, $this->request->data);
            if ($this->EstadoLaboral->save($estadoLaboral)) {
                $this->Flash->success(__('The estado laboral has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estado laboral could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estadoLaboral'));
        $this->set('_serialize', ['estadoLaboral']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Estado Laboral id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estadoLaboral = $this->EstadoLaboral->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estadoLaboral = $this->EstadoLaboral->patchEntity($estadoLaboral, $this->request->data);
            if ($this->EstadoLaboral->save($estadoLaboral)) {
                $this->Flash->success(__('The estado laboral has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The estado laboral could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('estadoLaboral'));
        $this->set('_serialize', ['estadoLaboral']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Estado Laboral id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estadoLaboral = $this->EstadoLaboral->get($id);
        if ($this->EstadoLaboral->delete($estadoLaboral)) {
            $this->Flash->success(__('The estado laboral has been deleted.'));
        } else {
            $this->Flash->error(__('The estado laboral could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
