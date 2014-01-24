<?php
App::uses('AppController', 'Controller');
/**
 * HistoryIssues Controller
 *
 * @property HistoryIssue $HistoryIssue
 * @property PaginatorComponent $Paginator
 */
class HistoryIssuesController extends AppController {

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
		$this->HistoryIssue->recursive = 0;
		$this->set('historyIssues', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HistoryIssue->exists($id)) {
			throw new NotFoundException(__('Invalid history issue'));
		}
		$options = array('conditions' => array('HistoryIssue.' . $this->HistoryIssue->primaryKey => $id));
		$this->set('historyIssue', $this->HistoryIssue->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HistoryIssue->create();
			if ($this->HistoryIssue->save($this->request->data)) {
				$this->Session->setFlash(__('The history issue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The history issue could not be saved. Please, try again.'));
			}
		}
		$issues = $this->HistoryIssue->Issue->find('list');
		$agens = $this->HistoryIssue->Agen->find('list');
		$this->set(compact('issues', 'agens'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HistoryIssue->exists($id)) {
			throw new NotFoundException(__('Invalid history issue'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HistoryIssue->save($this->request->data)) {
				$this->Session->setFlash(__('The history issue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The history issue could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistoryIssue.' . $this->HistoryIssue->primaryKey => $id));
			$this->request->data = $this->HistoryIssue->find('first', $options);
		}
		$issues = $this->HistoryIssue->Issue->find('list');
		$agens = $this->HistoryIssue->Agen->find('list');
		$this->set(compact('issues', 'agens'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HistoryIssue->id = $id;
		if (!$this->HistoryIssue->exists()) {
			throw new NotFoundException(__('Invalid history issue'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HistoryIssue->delete()) {
			$this->Session->setFlash(__('The history issue has been deleted.'));
		} else {
			$this->Session->setFlash(__('The history issue could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
