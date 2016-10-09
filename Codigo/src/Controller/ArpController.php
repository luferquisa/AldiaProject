<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Arp Controller
 *
 * @property \App\Model\Table\ArpTable $Arp
 */
class ArpController extends AppController
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
        $arp = $this->paginate($this->Arp);

        $this->set(compact('arp'));
        $this->set('_serialize', ['arp']);
    }

    /**
     * View method
     *
     * @param string|null $id Arp id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $arp = $this->Arp->get($id, [
            'contain' => []
        ]);

        $this->set('arp', $arp);
        $this->set('_serialize', ['arp']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $arp = $this->Arp->newEntity();
        if ($this->request->is('post')) {
            $arp = $this->Arp->patchEntity($arp, $this->request->data);
            if ($this->Arp->save($arp)) {
                $this->Flash->success(__('The arp has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The arp could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('arp'));
        $this->set('_serialize', ['arp']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Arp id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $arp = $this->Arp->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $arp = $this->Arp->patchEntity($arp, $this->request->data);
            if ($this->Arp->save($arp)) {
                $this->Flash->success(__('The arp has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The arp could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('arp'));
        $this->set('_serialize', ['arp']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Arp id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $arp = $this->Arp->get($id);
        if ($this->Arp->delete($arp)) {
            $this->Flash->success(__('The arp has been deleted.'));
        } else {
            $this->Flash->error(__('The arp could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
