<?php
App::uses('AppController', 'Controller');
/**
 * IssueHistories Controller
 *
 * @property IssueHistory $IssueHistory
 * @property PaginatorComponent $Paginator
 */
class IssueHistoriesController extends AppController {

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
		$this->IssueHistory->recursive = 0;
		$this->set('issueHistories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IssueHistory->exists($id)) {
			throw new NotFoundException(__('Invalid issue history'));
		}
		$options = array('conditions' => array('IssueHistory.' . $this->IssueHistory->primaryKey => $id));
		$this->set('issueHistory', $this->IssueHistory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IssueHistory->create();
			if ($this->IssueHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The issue history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The issue history could not be saved. Please, try again.'));
			}
		}
		$issues = $this->IssueHistory->Issue->find('list');
		$users = $this->IssueHistory->User->find('list');
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
		if (!$this->IssueHistory->exists($id)) {
			throw new NotFoundException(__('Invalid issue history'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->IssueHistory->save($this->request->data)) {
				$this->Session->setFlash(__('The issue history has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The issue history could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IssueHistory.' . $this->IssueHistory->primaryKey => $id));
			$this->request->data = $this->IssueHistory->find('first', $options);
		}
		$issues = $this->IssueHistory->Issue->find('list');
		$users = $this->IssueHistory->User->find('list');
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
		$this->IssueHistory->id = $id;
		if (!$this->IssueHistory->exists()) {
			throw new NotFoundException(__('Invalid issue history'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IssueHistory->delete()) {
			$this->Session->setFlash(__('The issue history has been deleted.'));
		} else {
			$this->Session->setFlash(__('The issue history could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
