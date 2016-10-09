<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LineaProducto Controller
 *
 * @property \App\Model\Table\LineaProductoTable $LineaProducto
 */
class LineaProductoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $lineaProducto = $this->paginate($this->LineaProducto);

        $this->set(compact('lineaProducto'));
        $this->set('_serialize', ['lineaProducto']);
    }

    /**
     * View method
     *
     * @param string|null $id Linea Producto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lineaProducto = $this->LineaProducto->get($id, [
            'contain' => []
        ]);

        $this->set('lineaProducto', $lineaProducto);
        $this->set('_serialize', ['lineaProducto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lineaProducto = $this->LineaProducto->newEntity();
        if ($this->request->is('post')) {
            $lineaProducto = $this->LineaProducto->patchEntity($lineaProducto, $this->request->data);
            if ($this->LineaProducto->save($lineaProducto)) {
                $this->Flash->success(__('The linea producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The linea producto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('lineaProducto'));
        $this->set('_serialize', ['lineaProducto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Linea Producto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lineaProducto = $this->LineaProducto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lineaProducto = $this->LineaProducto->patchEntity($lineaProducto, $this->request->data);
            if ($this->LineaProducto->save($lineaProducto)) {
                $this->Flash->success(__('The linea producto has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The linea producto could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('lineaProducto'));
        $this->set('_serialize', ['lineaProducto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Linea Producto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lineaProducto = $this->LineaProducto->get($id);
        if ($this->LineaProducto->delete($lineaProducto)) {
            $this->Flash->success(__('The linea producto has been deleted.'));
        } else {
            $this->Flash->error(__('The linea producto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
