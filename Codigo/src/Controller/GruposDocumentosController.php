<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * GruposDocumentos Controller
 *
 * @property \App\Model\Table\GruposDocumentosTable $GruposDocumentos
 */
class GruposDocumentosController extends AppController
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
        $gruposDocumentos = $this->paginate($this->GruposDocumentos);

        $this->set(compact('gruposDocumentos'));
        $this->set('_serialize', ['gruposDocumentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Grupos Documento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gruposDocumento = $this->GruposDocumentos->get($id, [
            'contain' => []
        ]);

        $this->set('gruposDocumento', $gruposDocumento);
        $this->set('_serialize', ['gruposDocumento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gruposDocumento = $this->GruposDocumentos->newEntity();
        if ($this->request->is('post')) {
            $gruposDocumento = $this->GruposDocumentos->patchEntity($gruposDocumento, $this->request->data);
            if ($this->GruposDocumentos->save($gruposDocumento)) {
                $this->Flash->success(__('The grupos documento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grupos documento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('gruposDocumento'));
        $this->set('_serialize', ['gruposDocumento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Grupos Documento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gruposDocumento = $this->GruposDocumentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gruposDocumento = $this->GruposDocumentos->patchEntity($gruposDocumento, $this->request->data);
            if ($this->GruposDocumentos->save($gruposDocumento)) {
                $this->Flash->success(__('The grupos documento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grupos documento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('gruposDocumento'));
        $this->set('_serialize', ['gruposDocumento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Grupos Documento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gruposDocumento = $this->GruposDocumentos->get($id);
        if ($this->GruposDocumentos->delete($gruposDocumento)) {
            $this->Flash->success(__('The grupos documento has been deleted.'));
        } else {
            $this->Flash->error(__('The grupos documento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
