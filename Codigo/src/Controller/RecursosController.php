<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Recursos Controller
 *
 * @property \App\Model\Table\RecursosTable $Recursos
 */
class RecursosController extends AppController
{
	
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
        $recursos = $this->paginate($this->Recursos);

        $this->set(compact('recursos'));
        $this->set('_serialize', ['recursos']);
    }

    /**
     * View method
     *
     * @param string|null $id Recurso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recurso = $this->Recursos->get($id, [
            'contain' => []
        ]);

        $this->set('recurso', $recurso);
        $this->set('_serialize', ['recurso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$tiposD = TableRegistry::get('TiposDocumentos');
		$ds = $tiposD->find('all');
		foreach($ds as $d):
			$dm[$d['codigo']]=$d['tipo'];
		endforeach;
		
		$ciudades = TableRegistry::get('Ciudades');
		$ciud = $ciudades->find('all');
		foreach($ciud as $d):
			$cd[$d['id']]=$d['ciudad'];
		endforeach;
		
		$estados = TableRegistry::get('EstadosCiviles');
		$est = $estados->find('all');
		foreach($est as $e):
			$et[$e['id']]=$e['estado'];
		endforeach;

		$empresas = TableRegistry::get('Empresas');
		$emp = $empresas->find('all');
		foreach($emp as $e):
			$empr[$e['id']]=$e['empresa'];
		endforeach;
		
		$sucursales = TableRegistry::get('Sucursales');
		$sucu = $sucursales->find('all');
		foreach($sucu as $s):
			$su[$s['id']]=$s['sucursal'];
		endforeach;
		
        $recurso = $this->Recursos->newEntity();
        if ($this->request->is('post')) {
            $recurso = $this->Recursos->patchEntity($recurso, $this->request->data);
            if ($this->Recursos->save($recurso)) {
                $this->Flash->success(__('The recurso has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recurso could not be saved. Please, try again.'));
            }
        }
		$this->set('sucursales',$su);
		$this->set('empresas',$empr);
		$this->set('tipod',$dm);
		$this->set('ciudades',$cd);
		$this->set('estados',$et);
        $this->set(compact('recurso'));
        $this->set('_serialize', ['recurso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recurso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recurso = $this->Recursos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recurso = $this->Recursos->patchEntity($recurso, $this->request->data);
            if ($this->Recursos->save($recurso)) {
                $this->Flash->success(__('The recurso has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recurso could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('recurso'));
        $this->set('_serialize', ['recurso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recurso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recurso = $this->Recursos->get($id);
        if ($this->Recursos->delete($recurso)) {
            $this->Flash->success(__('The recurso has been deleted.'));
        } else {
            $this->Flash->error(__('The recurso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
