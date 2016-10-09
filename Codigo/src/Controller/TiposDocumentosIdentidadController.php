<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TiposDocumentosIdentidad Controller
 *
 * @property \App\Model\Table\TiposDocumentosIdentidadTable $TiposDocumentosIdentidad
 */
class TiposDocumentosIdentidadController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tiposDocumentosIdentidad = $this->paginate($this->TiposDocumentosIdentidad);

        $this->set(compact('tiposDocumentosIdentidad'));
        $this->set('_serialize', ['tiposDocumentosIdentidad']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Documentos Identidad id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposDocumentosIdentidad = $this->TiposDocumentosIdentidad->get($id, [
            'contain' => []
        ]);

        $this->set('tiposDocumentosIdentidad', $tiposDocumentosIdentidad);
        $this->set('_serialize', ['tiposDocumentosIdentidad']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tiposDocumentosIdentidad = $this->TiposDocumentosIdentidad->newEntity();
        if ($this->request->is('post')) {
            $tiposDocumentosIdentidad = $this->TiposDocumentosIdentidad->patchEntity($tiposDocumentosIdentidad, $this->request->data);
            if ($this->TiposDocumentosIdentidad->save($tiposDocumentosIdentidad)) {
                $this->Flash->success(__('The tipos documentos identidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos documentos identidad could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposDocumentosIdentidad'));
        $this->set('_serialize', ['tiposDocumentosIdentidad']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Documentos Identidad id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposDocumentosIdentidad = $this->TiposDocumentosIdentidad->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposDocumentosIdentidad = $this->TiposDocumentosIdentidad->patchEntity($tiposDocumentosIdentidad, $this->request->data);
            if ($this->TiposDocumentosIdentidad->save($tiposDocumentosIdentidad)) {
                $this->Flash->success(__('The tipos documentos identidad has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos documentos identidad could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposDocumentosIdentidad'));
        $this->set('_serialize', ['tiposDocumentosIdentidad']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Documentos Identidad id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposDocumentosIdentidad = $this->TiposDocumentosIdentidad->get($id);
        if ($this->TiposDocumentosIdentidad->delete($tiposDocumentosIdentidad)) {
            $this->Flash->success(__('The tipos documentos identidad has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos documentos identidad could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
