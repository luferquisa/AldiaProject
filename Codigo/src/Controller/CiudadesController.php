<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Ciudades Controller
 *
 * @property \App\Model\Table\CiudadesTable $Ciudades
 */
class CiudadesController extends AppController
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
        $ciudades = $this->paginate($this->Ciudades);
		$departamentos = TableRegistry::get('Departamentos');
		$ds = $departamentos->find('all');
		foreach($ds as $d):
			$dm[$d['id']]=$d['departamento'];
		endforeach;
		$this->set('departamentos',$dm);
        $this->set(compact('ciudades'));
        $this->set('_serialize', ['ciudades']);
    }

    /**
     * View method
     *
     * @param string|null $id Ciudade id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ciudade = $this->Ciudades->get($id, [
            'contain' => []
        ]);
		
        $this->set('ciudade', $ciudade);
        $this->set('_serialize', ['ciudade']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ciudade = $this->Ciudades->newEntity();
		$departamentos = TableRegistry::get('Departamentos');
		$ds = $departamentos->find('all');
		foreach($ds as $d):
			$dm[$d['id']]=$d['departamento'];
		endforeach;
        if ($this->request->is('post')) {
            $ciudade = $this->Ciudades->patchEntity($ciudade, $this->request->data);
            if ($this->Ciudades->save($ciudade)) {
                $this->Flash->success(__('The ciudade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ciudade could not be saved. Please, try again.'));
            }
        }
		$this->set('departamentos',$dm);
        $this->set(compact('ciudade'));
        $this->set('_serialize', ['ciudade']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ciudade id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ciudade = $this->Ciudades->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ciudade = $this->Ciudades->patchEntity($ciudade, $this->request->data);
            if ($this->Ciudades->save($ciudade)) {
                $this->Flash->success(__('The ciudade has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The ciudade could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('ciudade'));
        $this->set('_serialize', ['ciudade']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ciudade id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ciudade = $this->Ciudades->get($id);
        if ($this->Ciudades->delete($ciudade)) {
            $this->Flash->success(__('The ciudade has been deleted.'));
        } else {
            $this->Flash->error(__('The ciudade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
