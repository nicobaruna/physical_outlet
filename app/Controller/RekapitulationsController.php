<?php
App::uses('AppController', 'Controller');
/**
 * Rekapitulations Controller
 *
 * @property Rekapitulation $Rekapitulation
 * @property PaginatorComponent $Paginator
 */
class RekapitulationsController extends AppController {

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
		$this->Rekapitulation->recursive = 0;
		$this->set('rekapitulations', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rekapitulation->exists($id)) {
			throw new NotFoundException(__('Invalid rekapitulation'));
		}
		$options = array('conditions' => array('Rekapitulation.' . $this->Rekapitulation->primaryKey => $id));
		$this->set('rekapitulation', $this->Rekapitulation->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rekapitulation->create();
			if ($this->Rekapitulation->save($this->request->data)) {
				$this->Session->setFlash(__('The rekapitulation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rekapitulation could not be saved. Please, try again.'));
			}
		}
		$issues = $this->Rekapitulation->Issue->find('list');
		$users = $this->Rekapitulation->User->find('list');
		$this->set(compact('issues', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Rekapitulation->exists($id)) {
			throw new NotFoundException(__('Invalid rekapitulation'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rekapitulation->save($this->request->data)) {
				$this->Session->setFlash(__('The rekapitulation has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rekapitulation could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rekapitulation.' . $this->Rekapitulation->primaryKey => $id));
			$this->request->data = $this->Rekapitulation->find('first', $options);
		}
		$issues = $this->Rekapitulation->Issue->find('list');
		$users = $this->Rekapitulation->User->find('list');
		$this->set(compact('issues', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Rekapitulation->id = $id;
		if (!$this->Rekapitulation->exists()) {
			throw new NotFoundException(__('Invalid rekapitulation'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Rekapitulation->delete()) {
			$this->Session->setFlash(__('The rekapitulation has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rekapitulation could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
