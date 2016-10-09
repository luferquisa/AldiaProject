<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Eps Controller
 *
 * @property \App\Model\Table\EpsTable $Eps
 */
class EpsController extends AppController
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
        $eps = $this->paginate($this->Eps);

        $this->set(compact('eps'));
        $this->set('_serialize', ['eps']);
    }

    /**
     * View method
     *
     * @param string|null $id Eps id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eps = $this->Eps->get($id, [
            'contain' => []
        ]);

        $this->set('eps', $eps);
        $this->set('_serialize', ['eps']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eps = $this->Eps->newEntity();
        if ($this->request->is('post')) {
            $eps = $this->Eps->patchEntity($eps, $this->request->data);
            if ($this->Eps->save($eps)) {
                $this->Flash->success(__('The eps has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The eps could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('eps'));
        $this->set('_serialize', ['eps']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Eps id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eps = $this->Eps->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eps = $this->Eps->patchEntity($eps, $this->request->data);
            if ($this->Eps->save($eps)) {
                $this->Flash->success(__('The eps has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The eps could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('eps'));
        $this->set('_serialize', ['eps']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Eps id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eps = $this->Eps->get($id);
        if ($this->Eps->delete($eps)) {
            $this->Flash->success(__('The eps has been deleted.'));
        } else {
            $this->Flash->error(__('The eps could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
