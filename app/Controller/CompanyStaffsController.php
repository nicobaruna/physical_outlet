<?php
App::uses('AppController', 'Controller');
/**
 * CompanyStaffs Controller
 *
 * @property CompanyStaff $CompanyStaff
 * @property PaginatorComponent $Paginator
 */
class CompanyStaffsController extends AppController {

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
		$this->CompanyStaff->recursive = 0;
		$this->set('companyStaffs', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyStaff->exists($id)) {
			throw new NotFoundException(__('Invalid company staff'));
		}
		$options = array('conditions' => array('CompanyStaff.' . $this->CompanyStaff->primaryKey => $id));
		$this->set('companyStaff', $this->CompanyStaff->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyStaff->create();
			if ($this->CompanyStaff->save($this->request->data)) {
				$this->Session->setFlash(__('The company staff has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company staff could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompanyStaff->Company->find('list');
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
		if (!$this->CompanyStaff->exists($id)) {
			throw new NotFoundException(__('Invalid company staff'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyStaff->save($this->request->data)) {
				$this->Session->setFlash(__('The company staff has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company staff could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyStaff.' . $this->CompanyStaff->primaryKey => $id));
			$this->request->data = $this->CompanyStaff->find('first', $options);
		}
		$companies = $this->CompanyStaff->Company->find('list');
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
		$this->CompanyStaff->id = $id;
		if (!$this->CompanyStaff->exists()) {
			throw new NotFoundException(__('Invalid company staff'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompanyStaff->delete()) {
			$this->Session->setFlash(__('The company staff has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company staff could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
