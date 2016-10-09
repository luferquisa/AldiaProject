<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
/**
 * Sucursales Controller
 *
 * @property \App\Model\Table\SucursalesTable $Sucursales
 */
class SucursalesController extends AppController
{
	
	public function initialize()
	{
		parent::initialize();
		
		// Set the layout
		$this->viewBuilder()->layout('configuracion');
	}
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
        $sucursales = $this->paginate($this->Sucursales);

        $this->set(compact('sucursales'));
        $this->set('_serialize', ['sucursales']);
    }

    /**
     * View method
     *
     * @param string|null $id Sucursale id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sucursale = $this->Sucursales->get($id, [
            'contain' => []
        ]);

        $this->set('sucursale', $sucursale);
        $this->set('_serialize', ['sucursale']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		
		$ciudades = TableRegistry::get('Ciudades');
		$ciud = $ciudades->find('all');
		foreach($ciud as $d):
			$cd[$d['id']]=$d['ciudad'];
		endforeach;
		
		$empresas = TableRegistry::get('Empresas');
		$emp = $empresas->find('all');
		foreach($emp as $e):
			$empr[$e['id']]=$e['empresa'];
		endforeach;
		
        $sucursale = $this->Sucursales->newEntity();
        if ($this->request->is('post')) {
            $sucursale = $this->Sucursales->patchEntity($sucursale, $this->request->data);
            if ($this->Sucursales->save($sucursale)) {
                $this->Flash->success(__('The sucursale has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sucursale could not be saved. Please, try again.'));
            }
        }
		
		$this->set('ciudades',$cd);
		$this->set('empresas',$empr);
        $this->set(compact('sucursale'));
        $this->set('_serialize', ['sucursale']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sucursale id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sucursale = $this->Sucursales->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sucursale = $this->Sucursales->patchEntity($sucursale, $this->request->data);
            if ($this->Sucursales->save($sucursale)) {
                $this->Flash->success(__('The sucursale has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The sucursale could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('sucursale'));
        $this->set('_serialize', ['sucursale']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sucursale id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sucursale = $this->Sucursales->get($id);
        if ($this->Sucursales->delete($sucursale)) {
            $this->Flash->success(__('The sucursale has been deleted.'));
        } else {
            $this->Flash->error(__('The sucursale could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
