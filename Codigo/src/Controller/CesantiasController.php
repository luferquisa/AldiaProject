<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Cesantias Controller
 *
 * @property \App\Model\Table\CesantiasTable $Cesantias
 */
class CesantiasController extends AppController
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
        $cesantias = $this->paginate($this->Cesantias);

        $this->set(compact('cesantias'));
        $this->set('_serialize', ['cesantias']);
    }

    /**
     * View method
     *
     * @param string|null $id Cesantia id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cesantia = $this->Cesantias->get($id, [
            'contain' => []
        ]);

        $this->set('cesantia', $cesantia);
        $this->set('_serialize', ['cesantia']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cesantia = $this->Cesantias->newEntity();
        if ($this->request->is('post')) {
            $cesantia = $this->Cesantias->patchEntity($cesantia, $this->request->data);
            if ($this->Cesantias->save($cesantia)) {
                $this->Flash->success(__('The cesantia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cesantia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cesantia'));
        $this->set('_serialize', ['cesantia']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cesantia id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cesantia = $this->Cesantias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cesantia = $this->Cesantias->patchEntity($cesantia, $this->request->data);
            if ($this->Cesantias->save($cesantia)) {
                $this->Flash->success(__('The cesantia has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The cesantia could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cesantia'));
        $this->set('_serialize', ['cesantia']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cesantia id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cesantia = $this->Cesantias->get($id);
        if ($this->Cesantias->delete($cesantia)) {
            $this->Flash->success(__('The cesantia has been deleted.'));
        } else {
            $this->Flash->error(__('The cesantia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
