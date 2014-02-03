<?php
App::uses('AppController', 'Controller');
/**
 * Submissions Controller
 *
 * @property Submission $Submission
 * @property PaginatorComponent $Paginator
 */
class SubmissionsController extends AppController {

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
		$this->Submission->recursive = 0;
		$this->set('submissions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Submission->exists($id)) {
			throw new NotFoundException(__('Invalid submission'));
		}
		$options = array('conditions' => array('Submission.' . $this->Submission->primaryKey => $id));
		$this->set('submission', $this->Submission->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Submission->create();
			$this->request->data['Submission']['tanggal'] = date('Y-m-d H:i:s');

			$this->request->data['HistorySubmission'][0]['tanggal'] = date('Y-m-d H:i:s');
			$this->request->data['HistorySubmission'][0]['agen_id'] = $this->request->data['Submission']['agen_id'];
			$this->request->data['HistorySubmission'][0]['status'] = $this->request->data['Submission']['status'];

			// echo "<pre>";
			// var_dump($this->request->data);
			// echo "</pre>";
			// exit;
			if ($this->Submission->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The submission has been saved.'));
				return $this->redirect(array('controller'=>'users','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		}

		$companies = $this->Submission->Company->find('list', array('fields'=> 'id,nama_perusahaan'));
		$reporters = $this->Submission->Reporter->find('list', array('fields'=> 'id,nama'));
		$services = $this->Submission->Service->find('list', array('conditions'=>array('parent_id is NULL'),'fields'=>'id,nama_layanan'));

		$this->set(compact('companies','reporters','services'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Submission->exists($id)) {
			throw new NotFoundException(__('Invalid submission'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Submission->save($this->request->data)) {
				$this->Session->setFlash(__('The submission has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Submission.' . $this->Submission->primaryKey => $id));
			$this->request->data = $this->Submission->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Submission->id = $id;
		if (!$this->Submission->exists()) {
			throw new NotFoundException(__('Invalid submission'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Submission->delete()) {
			$this->Session->setFlash(__('The submission has been deleted.'));
		} else {
			$this->Session->setFlash(__('The submission could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
