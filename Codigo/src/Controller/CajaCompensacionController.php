<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CajaCompensacion Controller
 *
 * @property \App\Model\Table\CajaCompensacionTable $CajaCompensacion
 */
class CajaCompensacionController extends AppController
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
        $cajaCompensacion = $this->paginate($this->CajaCompensacion);

        $this->set(compact('cajaCompensacion'));
        $this->set('_serialize', ['cajaCompensacion']);
    }

    /**
     * View method
     *
     * @param string|null $id Caja Compensacion id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cajaCompensacion = $this->CajaCompensacion->get($id, [
            'contain' => []
        ]);

        $this->set('cajaCompensacion', $cajaCompensacion);
        $this->set('_serialize', ['cajaCompensacion']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cajaCompensacion = $this->CajaCompensacion->newEntity();
        if ($this->request->is('post')) {
            $cajaCompensacion = $this->CajaCompensacion->patchEntity($cajaCompensacion, $this->request->data);
            if ($this->CajaCompensacion->save($cajaCompensacion)) {
                $this->Flash->success(__('The caja compensacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The caja compensacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cajaCompensacion'));
        $this->set('_serialize', ['cajaCompensacion']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Caja Compensacion id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cajaCompensacion = $this->CajaCompensacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cajaCompensacion = $this->CajaCompensacion->patchEntity($cajaCompensacion, $this->request->data);
            if ($this->CajaCompensacion->save($cajaCompensacion)) {
                $this->Flash->success(__('The caja compensacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The caja compensacion could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('cajaCompensacion'));
        $this->set('_serialize', ['cajaCompensacion']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Caja Compensacion id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cajaCompensacion = $this->CajaCompensacion->get($id);
        if ($this->CajaCompensacion->delete($cajaCompensacion)) {
            $this->Flash->success(__('The caja compensacion has been deleted.'));
        } else {
            $this->Flash->error(__('The caja compensacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
