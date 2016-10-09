<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ActividadEconomica Controller
 *
 * @property \App\Model\Table\ActividadEconomicaTable $ActividadEconomica
 */
class ActividadEconomicaController extends AppController
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
        $actividadEconomica = $this->paginate($this->ActividadEconomica);

        $this->set(compact('actividadEconomica'));
        $this->set('_serialize', ['actividadEconomica']);
    }

    /**
     * View method
     *
     * @param string|null $id Actividad Economica id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $actividadEconomica = $this->ActividadEconomica->get($id, [
            'contain' => []
        ]);

        $this->set('actividadEconomica', $actividadEconomica);
        $this->set('_serialize', ['actividadEconomica']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $actividadEconomica = $this->ActividadEconomica->newEntity();
        if ($this->request->is('post')) {
            $actividadEconomica = $this->ActividadEconomica->patchEntity($actividadEconomica, $this->request->data);
            if ($this->ActividadEconomica->save($actividadEconomica)) {
                $this->Flash->success(__('The actividad economica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actividad economica could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('actividadEconomica'));
        $this->set('_serialize', ['actividadEconomica']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Actividad Economica id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $actividadEconomica = $this->ActividadEconomica->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $actividadEconomica = $this->ActividadEconomica->patchEntity($actividadEconomica, $this->request->data);
            if ($this->ActividadEconomica->save($actividadEconomica)) {
                $this->Flash->success(__('The actividad economica has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The actividad economica could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('actividadEconomica'));
        $this->set('_serialize', ['actividadEconomica']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Actividad Economica id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $actividadEconomica = $this->ActividadEconomica->get($id);
        if ($this->ActividadEconomica->delete($actividadEconomica)) {
            $this->Flash->success(__('The actividad economica has been deleted.'));
        } else {
            $this->Flash->error(__('The actividad economica could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
