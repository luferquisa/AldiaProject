<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pensiones Controller
 *
 * @property \App\Model\Table\PensionesTable $Pensiones
 */
class PensionesController extends AppController
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
        $pensiones = $this->paginate($this->Pensiones);

        $this->set(compact('pensiones'));
        $this->set('_serialize', ['pensiones']);
    }

    /**
     * View method
     *
     * @param string|null $id Pensione id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pensione = $this->Pensiones->get($id, [
            'contain' => []
        ]);

        $this->set('pensione', $pensione);
        $this->set('_serialize', ['pensione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pensione = $this->Pensiones->newEntity();
        if ($this->request->is('post')) {
            $pensione = $this->Pensiones->patchEntity($pensione, $this->request->data);
            if ($this->Pensiones->save($pensione)) {
                $this->Flash->success(__('The pensione has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pensione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pensione'));
        $this->set('_serialize', ['pensione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pensione id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pensione = $this->Pensiones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pensione = $this->Pensiones->patchEntity($pensione, $this->request->data);
            if ($this->Pensiones->save($pensione)) {
                $this->Flash->success(__('The pensione has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pensione could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pensione'));
        $this->set('_serialize', ['pensione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pensione id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pensione = $this->Pensiones->get($id);
        if ($this->Pensiones->delete($pensione)) {
            $this->Flash->success(__('The pensione has been deleted.'));
        } else {
            $this->Flash->error(__('The pensione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
