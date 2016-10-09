<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Idiomas Controller
 *
 * @property \App\Model\Table\IdiomasTable $Idiomas
 */
class IdiomasController extends AppController
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
        $idiomas = $this->paginate($this->Idiomas);

        $this->set(compact('idiomas'));
        $this->set('_serialize', ['idiomas']);
    }

    /**
     * View method
     *
     * @param string|null $id Idioma id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $idioma = $this->Idiomas->get($id, [
            'contain' => []
        ]);

        $this->set('idioma', $idioma);
        $this->set('_serialize', ['idioma']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $idioma = $this->Idiomas->newEntity();
        if ($this->request->is('post')) {
            $idioma = $this->Idiomas->patchEntity($idioma, $this->request->data);
            if ($this->Idiomas->save($idioma)) {
                $this->Flash->success(__('The idioma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The idioma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('idioma'));
        $this->set('_serialize', ['idioma']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Idioma id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $idioma = $this->Idiomas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $idioma = $this->Idiomas->patchEntity($idioma, $this->request->data);
            if ($this->Idiomas->save($idioma)) {
                $this->Flash->success(__('The idioma has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The idioma could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('idioma'));
        $this->set('_serialize', ['idioma']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Idioma id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $idioma = $this->Idiomas->get($id);
        if ($this->Idiomas->delete($idioma)) {
            $this->Flash->success(__('The idioma has been deleted.'));
        } else {
            $this->Flash->error(__('The idioma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
