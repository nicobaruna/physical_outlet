<?php
App::uses('AppController', 'Controller');
/**
 * LogUsers Controller
 *
 * @property LogUser $LogUser
 * @property PaginatorComponent $Paginator
 */
class LogUsersController extends AppController {

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
		$this->LogUser->recursive = 0;
		$this->set('logUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->LogUser->exists($id)) {
			throw new NotFoundException(__('Invalid log user'));
		}
		$options = array('conditions' => array('LogUser.' . $this->LogUser->primaryKey => $id));
		$this->set('logUser', $this->LogUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->LogUser->create();
			if ($this->LogUser->save($this->request->data)) {
				$this->Session->setFlash(__('The log user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log user could not be saved. Please, try again.'));
			}
		}
		$users = $this->LogUser->User->find('list');
		$this->set(compact('users'));
	}
	
	public function createNew($data) {
		if (!empty($data)) {
			$this->LogUser->create();
			if ($this->LogUser->save($data)) {
				//$this->Session->setFlash(__('The log user has been saved.'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				//echo "gagal son"; exit;
			}
		}
		
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->LogUser->exists($id)) {
			throw new NotFoundException(__('Invalid log user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LogUser->save($this->request->data)) {
				$this->Session->setFlash(__('The log user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The log user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('LogUser.' . $this->LogUser->primaryKey => $id));
			$this->request->data = $this->LogUser->find('first', $options);
		}
		$users = $this->LogUser->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->LogUser->id = $id;
		if (!$this->LogUser->exists()) {
			throw new NotFoundException(__('Invalid log user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LogUser->delete()) {
			$this->Session->setFlash(__('The log user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The log user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
