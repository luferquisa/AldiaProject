<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Departamentos Controller
 *
 * @property \App\Model\Table\PaisesTable $Departamentos
 */
class DepartamentosController extends AppController
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
        $departamentos = $this->paginate($this->Departamentos);
		$Paises = TableRegistry::get('Paises');
		$ps = $Paises->find('all');
		foreach($ps as $p):
			$pm[$p['codigo']]=$p['pais'];
		endforeach;
		$this->set('paises',$pm);
        $this->set(compact('departamentos'));
        $this->set('_serialize', ['departamentos']);
    }

    /**
     * View method
     *
     * @param string|null $id Paise id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paise = $this->Paises->get($id, [
            'contain' => []
        ]);

        $this->set('paise', $paise);
        $this->set('_serialize', ['paise']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $departamento = $this->Departamentos->newEntity();
		$Paises = TableRegistry::get('Paises');
		$ps = $Paises->find('all');
		foreach($ps as $p):
			$pm[$p['codigo']]=$p['pais'];
		endforeach;
        if ($this->request->is('post')) {
            $paise = $this->Departamentos->patchEntity($departamento, $this->request->data);
            if ($this->Departamentos->save($departamento)) {
                $this->Flash->success(__('El departamento ha sido guardado'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Error al guardar el departamento'));
            }
        }
        $this->set(compact('departamento'));
        $this->set('_serialize', ['departamento']);
		$this->set('paises', $pm);
    }

    /**
     * Edit method
     *
     * @param string|null $id Paise id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $departamento = $this->Departamentos->get($id, [
            'contain' => []
        ]);
		$Paises = TableRegistry::get('Paises');
		$ps = $Paises->find('all');
		foreach($ps as $p):
			$pm[$p['codigo']]=$p['pais'];
		endforeach;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $departamento = $this->Departamentos->patchEntity($departamento, $this->request->data);
            if ($this->Departamentos->save($departamento)) {
                $this->Flash->success(__('El departamento ha sido guardado'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('Error al guardar'));
            }
        }
		$this->set('paises',$pm);
        $this->set(compact('departamento'));
        $this->set('_serialize', ['departamento']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Paise id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paise = $this->Paises->get($id);
        if ($this->Paises->delete($paise)) {
            $this->Flash->success(__('The paise has been deleted.'));
        } else {
            $this->Flash->error(__('The paise could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
