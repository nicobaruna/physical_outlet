<?php
App::uses('AppController', 'Controller');
/**
 * LogCustomers Controller
 *
 * @property LogCustomer $LogCustomer
 * @property PaginatorComponent $Paginator
 */
class LogCustomersController extends AppController {

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
		$this->LogCustomer->recursive = 0;
		$this->set('logCustomers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LogCustomer->exists($id)) {
			throw new NotFoundException(__('Invalid log customer'));
		}
		$options = array('conditions' => array('LogCustomer.' . $this->LogCustomer->primaryKey => $id));
		$this->set('logCustomer', $this->LogCustomer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LogCustomer->create();
			if ($this->LogCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The log customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log customer could not be saved. Please, try again.'));
			}
		}
		$customers = $this->LogCustomer->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LogCustomer->exists($id)) {
			throw new NotFoundException(__('Invalid log customer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LogCustomer->save($this->request->data)) {
				$this->Session->setFlash(__('The log customer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log customer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LogCustomer.' . $this->LogCustomer->primaryKey => $id));
			$this->request->data = $this->LogCustomer->find('first', $options);
		}
		$customers = $this->LogCustomer->Customer->find('list');
		$this->set(compact('customers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LogCustomer->id = $id;
		if (!$this->LogCustomer->exists()) {
			throw new NotFoundException(__('Invalid log customer'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LogCustomer->delete()) {
			$this->Session->setFlash(__('The log customer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The log customer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
