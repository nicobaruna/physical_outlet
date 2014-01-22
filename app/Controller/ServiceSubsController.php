<?php
App::uses('AppController', 'Controller');
/**
 * ServiceSubs Controller
 *
 * @property ServiceSub $ServiceSub
 * @property PaginatorComponent $Paginator
 */
class ServiceSubsController extends AppController {

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
		$this->ServiceSub->recursive = 0;
		$this->set('serviceSubs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ServiceSub->exists($id)) {
			throw new NotFoundException(__('Invalid service sub'));
		}
		$options = array('conditions' => array('ServiceSub.' . $this->ServiceSub->primaryKey => $id));
		$this->set('serviceSub', $this->ServiceSub->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ServiceSub->create();
			if ($this->ServiceSub->save($this->request->data)) {
				$this->Session->setFlash(__('The service sub has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service sub could not be saved. Please, try again.'));
			}
		}
		$services = $this->ServiceSub->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ServiceSub->exists($id)) {
			throw new NotFoundException(__('Invalid service sub'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ServiceSub->save($this->request->data)) {
				$this->Session->setFlash(__('The service sub has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The service sub could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ServiceSub.' . $this->ServiceSub->primaryKey => $id));
			$this->request->data = $this->ServiceSub->find('first', $options);
		}
		$services = $this->ServiceSub->Service->find('list');
		$this->set(compact('services'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ServiceSub->id = $id;
		if (!$this->ServiceSub->exists()) {
			throw new NotFoundException(__('Invalid service sub'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ServiceSub->delete()) {
			$this->Session->setFlash(__('The service sub has been deleted.'));
		} else {
			$this->Session->setFlash(__('The service sub could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
