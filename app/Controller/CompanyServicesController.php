<?php
App::uses('AppController', 'Controller');
/**
 * CompanyServices Controller
 *
 * @property CompanyService $CompanyService
 * @property PaginatorComponent $Paginator
 */
class CompanyServicesController extends AppController {

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
		$this->CompanyService->recursive = 0;
		$this->set('companyServices', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyService->exists($id)) {
			throw new NotFoundException(__('Invalid company service'));
		}
		$options = array('conditions' => array('CompanyService.' . $this->CompanyService->primaryKey => $id));
		$this->set('companyService', $this->CompanyService->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyService->create();
			if ($this->CompanyService->save($this->request->data)) {
				$this->Session->setFlash(__('The company service has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company service could not be saved. Please, try again.'));
			}
		}
		$services = $this->CompanyService->Service->find('list');
		$companies = $this->CompanyService->Company->find('list');
		$this->set(compact('services', 'companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompanyService->exists($id)) {
			throw new NotFoundException(__('Invalid company service'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyService->save($this->request->data)) {
				$this->Session->setFlash(__('The company service has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company service could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyService.' . $this->CompanyService->primaryKey => $id));
			$this->request->data = $this->CompanyService->find('first', $options);
		}
		$services = $this->CompanyService->Service->find('list');
		$companies = $this->CompanyService->Company->find('list');
		$this->set(compact('services', 'companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompanyService->id = $id;
		if (!$this->CompanyService->exists()) {
			throw new NotFoundException(__('Invalid company service'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompanyService->delete()) {
			$this->Session->setFlash(__('The company service has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company service could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
