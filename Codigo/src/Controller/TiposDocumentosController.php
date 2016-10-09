<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

/**
 * TiposDocumentos Controller
 *
 * @property \App\Model\Table\TiposDocumentosTable $TiposDocumentos
 */
class TiposDocumentosController extends AppController
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
        $tiposDocumentos = $this->paginate($this->TiposDocumentos);
		$grupos = TableRegistry::get('GruposDocumentos');
		$gs = $grupos->find('all');
		foreach($gs as $d):
			$gr[$d['id']]=$d['descripcion'];
		endforeach;
		$this->set('grupos',$gr);
        $this->set(compact('tiposDocumentos'));
        $this->set('_serialize', ['tiposDocumentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Tipos Documento id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tiposDocumento = $this->TiposDocumentos->get($id, [
            'contain' => []
        ]);
		//Se traen  los campos creados
		$tdc = TableRegistry::get('TiposDocumentosCampos');
		$campos = $tdc->find('all')
					->where(['tipo_documento =' => $id]);
		$this->set('campos',$campos->toArray());
        $this->set('tiposDocumento', $tiposDocumento);
        $this->set('_serialize', ['tiposDocumento']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
		$grupos = TableRegistry::get('GruposDocumentos');
		$gs = $grupos->find('all');
		foreach($gs as $d):
			$gr[$d['id']]=$d['descripcion'];
		endforeach;
        $tiposDocumento = $this->TiposDocumentos->newEntity();
        if ($this->request->is('post')) {
			pr($this->request->data);
            $tiposDocumento = $this->TiposDocumentos->patchEntity($tiposDocumento, $this->request->data);
			//Se  guarda el tipo de documento
            if ($this->TiposDocumentos->save($tiposDocumento)) {
				//Recorro el arreglo de camops agregados para guardarlos bajo la llave del nuevo tipo de documento
				foreach($this->request->data['campos'] as $campo){
					$connection = ConnectionManager::get('default');
					$connection->insert('tipos_documentos_campos', [
						'nombre' => $campo['nombre'],
						'tipo' => $campo['tipo'],
						'tipo_documento' => $tiposDocumento->id ]);
					echo $campo['nombre'];
					echo "<br>".$campo['tipo'];
				}
				
                $this->Flash->success(__('The tipos documento has been saved.'));
			
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos documento could not be saved. Please, try again.'));
            }
        }
		$this->set('grupos',$gr);
        $this->set(compact('tiposDocumento'));
        $this->set('_serialize', ['tiposDocumento']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipos Documento id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tiposDocumento = $this->TiposDocumentos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tiposDocumento = $this->TiposDocumentos->patchEntity($tiposDocumento, $this->request->data);
            if ($this->TiposDocumentos->save($tiposDocumento)) {
                $this->Flash->success(__('The tipos documento has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The tipos documento could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('tiposDocumento'));
        $this->set('_serialize', ['tiposDocumento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipos Documento id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tiposDocumento = $this->TiposDocumentos->get($id);
        if ($this->TiposDocumentos->delete($tiposDocumento)) {
            $this->Flash->success(__('The tipos documento has been deleted.'));
        } else {
            $this->Flash->error(__('The tipos documento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
