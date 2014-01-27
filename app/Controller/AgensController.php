<?php
App::uses('AppController', 'Controller');
/**
 * Agens Controller
 *
 * @property Agen $Agen
 * @property PaginatorComponent $Paginator
 */
class AgensController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Agen->recursive = 0;
		$this->set('agens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Agen->exists($id)) {
			throw new NotFoundException(__('Invalid agen'));
		}
		$options = array('conditions' => array('Agen.' . $this->Agen->primaryKey => $id));
		$this->set('agen', $this->Agen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Agen->create();
			if ($this->Agen->save($this->request->data)) {
				$this->Session->setFlash(__('The agen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agen could not be saved. Please, try again.'));
			}
		}
		$users = $this->Agen->User->find('list');
		$employees = $this->Agen->Employee->find('list', array('fields'=>'id,nama'));
		$this->set(compact('users', 'employees'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Agen->exists($id)) {
			throw new NotFoundException(__('Invalid agen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Agen->save($this->request->data)) {
				$this->Session->setFlash(__('The agen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The agen could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Agen.' . $this->Agen->primaryKey => $id));
			$this->request->data = $this->Agen->find('first', $options);
		}
		$users = $this->Agen->User->find('list');
		$employees = $this->Agen->Employee->find('list');
		$this->set(compact('users', 'employees'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Agen->id = $id;
		if (!$this->Agen->exists()) {
			throw new NotFoundException(__('Invalid agen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Agen->delete()) {
			$this->Session->setFlash(__('The agen has been deleted.'));
		} else {
			$this->Session->setFlash(__('The agen could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
