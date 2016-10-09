<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposContratos Controller
 *
 * @property \App\Model\Table\TiposContratosTable $TiposContratos
 */
class TiposContratosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tiposContratos = $this->paginate($this->TiposContratos);

        $this->set(compact('tiposContratos'));
        $this->set('_serialize', ['tiposContratos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Contrato id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposContrato = $this->TiposContratos->get($id, [
            'contain' => []
        ]);

        $this->set('tiposContrato', $tiposContrato);
        $this->set('_serialize', ['tiposContrato']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposContrato = $this->TiposContratos->newEntity();
        if ($this->request->is('post')) {
            $tiposContrato = $this->TiposContratos->patchEntity($tiposContrato, $this->request->data);
            if ($this->TiposContratos->save($tiposContrato)) {
                $this->Flash->success(__('The tipos contrato has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos contrato could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposContrato'));
        $this->set('_serialize', ['tiposContrato']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Contrato id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposContrato = $this->TiposContratos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposContrato = $this->TiposContratos->patchEntity($tiposContrato, $this->request->data);
            if ($this->TiposContratos->save($tiposContrato)) {
                $this->Flash->success(__('The tipos contrato has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos contrato could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposContrato'));
        $this->set('_serialize', ['tiposContrato']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Contrato id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposContrato = $this->TiposContratos->get($id);
        if ($this->TiposContratos->delete($tiposContrato)) {
            $this->Flash->success(__('The tipos contrato has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos contrato could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
