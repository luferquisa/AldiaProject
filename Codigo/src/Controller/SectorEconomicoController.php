<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SectorEconomico Controller
 *
 * @property \App\Model\Table\SectorEconomicoTable $SectorEconomico
 */
class SectorEconomicoController extends AppController
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
        $sectorEconomico = $this->paginate($this->SectorEconomico);

        $this->set(compact('sectorEconomico'));
        $this->set('_serialize', ['sectorEconomico']);
    }

    /**
     * View method
     *
     * @param string|null $id Sector Economico id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sectorEconomico = $this->SectorEconomico->get($id, [
            'contain' => []
        ]);

        $this->set('sectorEconomico', $sectorEconomico);
        $this->set('_serialize', ['sectorEconomico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sectorEconomico = $this->SectorEconomico->newEntity();
        if ($this->request->is('post')) {
            $sectorEconomico = $this->SectorEconomico->patchEntity($sectorEconomico, $this->request->data);
            if ($this->SectorEconomico->save($sectorEconomico)) {
                $this->Flash->success(__('The sector economico has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sector economico could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sectorEconomico'));
        $this->set('_serialize', ['sectorEconomico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sector Economico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sectorEconomico = $this->SectorEconomico->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sectorEconomico = $this->SectorEconomico->patchEntity($sectorEconomico, $this->request->data);
            if ($this->SectorEconomico->save($sectorEconomico)) {
                $this->Flash->success(__('The sector economico has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sector economico could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sectorEconomico'));
        $this->set('_serialize', ['sectorEconomico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sector Economico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sectorEconomico = $this->SectorEconomico->get($id);
        if ($this->SectorEconomico->delete($sectorEconomico)) {
            $this->Flash->success(__('The sector economico has been deleted.'));
        } else {
            $this->Flash->error(__('The sector economico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
