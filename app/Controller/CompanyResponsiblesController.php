<?php
App::uses('AppController', 'Controller');
/**
 * CompanyResponsibles Controller
 *
 * @property CompanyResponsible $CompanyResponsible
 * @property PaginatorComponent $Paginator
 */
class CompanyResponsiblesController extends AppController {

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
		$this->CompanyResponsible->recursive = 0;
		$this->set('companyResponsibles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyResponsible->exists($id)) {
			throw new NotFoundException(__('Invalid company responsible'));
		}
		$options = array('conditions' => array('CompanyResponsible.' . $this->CompanyResponsible->primaryKey => $id));
		$this->set('companyResponsible', $this->CompanyResponsible->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyResponsible->create();
			if ($this->CompanyResponsible->save($this->request->data)) {
				$this->Session->setFlash(__('The company responsible has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company responsible could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompanyResponsible->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompanyResponsible->exists($id)) {
			throw new NotFoundException(__('Invalid company responsible'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyResponsible->save($this->request->data)) {
				$this->Session->setFlash(__('The company responsible has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company responsible could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyResponsible.' . $this->CompanyResponsible->primaryKey => $id));
			$this->request->data = $this->CompanyResponsible->find('first', $options);
		}
		$companies = $this->CompanyResponsible->Company->find('list');
		$this->set(compact('companies'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompanyResponsible->id = $id;
		if (!$this->CompanyResponsible->exists()) {
			throw new NotFoundException(__('Invalid company responsible'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompanyResponsible->delete()) {
			$this->Session->setFlash(__('The company responsible has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company responsible could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
