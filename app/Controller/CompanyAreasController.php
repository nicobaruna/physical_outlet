<?php
App::uses('AppController', 'Controller');
/**
 * CompanyAreas Controller
 *
 * @property CompanyArea $CompanyArea
 * @property PaginatorComponent $Paginator
 */
class CompanyAreasController extends AppController {

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
		$this->CompanyArea->recursive = 0;
		$this->set('companyAreas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyArea->exists($id)) {
			throw new NotFoundException(__('Invalid company area'));
		}
		$options = array('conditions' => array('CompanyArea.' . $this->CompanyArea->primaryKey => $id));
		$this->set('companyArea', $this->CompanyArea->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyArea->create();
			if ($this->CompanyArea->save($this->request->data)) {
				$this->Session->setFlash(__('The company area has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company area could not be saved. Please, try again.'));
			}
		}
		$companies = $this->CompanyArea->Company->find('list');
		$areas = $this->CompanyArea->Area->find('list');
		$this->set(compact('companies', 'areas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->CompanyArea->exists($id)) {
			throw new NotFoundException(__('Invalid company area'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyArea->save($this->request->data)) {
				$this->Session->setFlash(__('The company area has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company area could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyArea.' . $this->CompanyArea->primaryKey => $id));
			$this->request->data = $this->CompanyArea->find('first', $options);
		}
		$companies = $this->CompanyArea->Company->find('list');
		$areas = $this->CompanyArea->Area->find('list');
		$this->set(compact('companies', 'areas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->CompanyArea->id = $id;
		if (!$this->CompanyArea->exists()) {
			throw new NotFoundException(__('Invalid company area'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompanyArea->delete()) {
			$this->Session->setFlash(__('The company area has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company area could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
