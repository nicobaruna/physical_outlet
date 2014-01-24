<?php
App::uses('AppController', 'Controller');
/**
 * HistorySubmissions Controller
 *
 * @property HistorySubmission $HistorySubmission
 * @property PaginatorComponent $Paginator
 */
class HistorySubmissionsController extends AppController {

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
		$this->HistorySubmission->recursive = 0;
		$this->set('historySubmissions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->HistorySubmission->exists($id)) {
			throw new NotFoundException(__('Invalid history submission'));
		}
		$options = array('conditions' => array('HistorySubmission.' . $this->HistorySubmission->primaryKey => $id));
		$this->set('historySubmission', $this->HistorySubmission->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->HistorySubmission->create();
			if ($this->HistorySubmission->save($this->request->data)) {
				$this->Session->setFlash(__('The history submission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The history submission could not be saved. Please, try again.'));
			}
		}
		$submissions = $this->HistorySubmission->Submission->find('list');
		$agens = $this->HistorySubmission->Agen->find('list');
		$this->set(compact('submissions', 'agens'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->HistorySubmission->exists($id)) {
			throw new NotFoundException(__('Invalid history submission'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->HistorySubmission->save($this->request->data)) {
				$this->Session->setFlash(__('The history submission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The history submission could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('HistorySubmission.' . $this->HistorySubmission->primaryKey => $id));
			$this->request->data = $this->HistorySubmission->find('first', $options);
		}
		$submissions = $this->HistorySubmission->Submission->find('list');
		$agens = $this->HistorySubmission->Agen->find('list');
		$this->set(compact('submissions', 'agens'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->HistorySubmission->id = $id;
		if (!$this->HistorySubmission->exists()) {
			throw new NotFoundException(__('Invalid history submission'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->HistorySubmission->delete()) {
			$this->Session->setFlash(__('The history submission has been deleted.'));
		} else {
			$this->Session->setFlash(__('The history submission could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
