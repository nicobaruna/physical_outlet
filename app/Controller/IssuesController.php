<?php
App::uses('AppController', 'Controller');
/**
 * Issues Controller
 *
 * @property Issue $Issue
 * @property PaginatorComponent $Paginator
 */
class IssuesController extends AppController {

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
		$this->Issue->recursive = 0;
		$this->set('issues', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Issue->exists($id)) {
			throw new NotFoundException(__('Invalid issue'));
		}
		$options = array('conditions' => array('Issue.' . $this->Issue->primaryKey => $id));
		$this->set('issue', $this->Issue->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Issue->create();
			$this->request->data['Issue']['tanggal'] = date('Y-m-d H:i:s');

			$this->request->data['HistoryIssue'][0]['tanggal'] = date('Y-m-d H:i:s');
			$this->request->data['HistoryIssue'][0]['agen_id'] = $this->request->data['Issue']['agen_id'];
			$this->request->data['HistoryIssue'][0]['status'] = $this->request->data['Issue']['status'];
			$this->request->data['HistoryIssue'][0]['comment'] = $this->request->data['Issue']['note'];

			// echo "<pre>";
			// var_dump($this->request->data);
			// echo "</pre>";
			// exit;
			
			if ($this->Issue->saveAssociated($this->request->data,array('deep'=>TRUE))) {
				$this->Session->setFlash(__('The issue has been saved.'));
				return $this->redirect(array('controller'=>'users','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The issue could not be saved. Please, try again.'));
			}
		}
		$companies_all = $this->Issue->Company->find('all');
		foreach ($companies_all as $key => $value) {
			$companies[$value['Company']['id']] = $value['Company']['nama_perusahaan'];
		}
		$agens = $this->Issue->Agen->find('list');
		$reporters_all = $this->Issue->Reporter->find('all');
		foreach ($reporters_all as $key => $value) {
			$reporters[$value['Reporter']['id']] = $value['Reporter']['nama'];
		}
		$categories_all = $this->Issue->Category->find('all');
		foreach ($categories_all as $key => $value) {
			$categories[$value['Category']['id']] = $value['Category']['nama'];
		}
		$this->set(compact('companies', 'agens','reporters','categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Issue->recursive = 2;
		if (!$this->Issue->exists($id)) {
			throw new NotFoundException(__('Invalid issue'));
		}
		if ($this->request->is(array('post', 'put'))) {
			
			$this->request->data['HistoryIssue'][0]['tanggal'] = date('Y-m-d H:i:s');
			$this->request->data['HistoryIssue'][0]['agen_id'] = $this->Session->read('Auth.User.agen_id');
			$this->request->data['HistoryIssue'][0]['status'] = $this->request->data['Issue']['status'];
			$this->request->data['Issue']['tanggal'] = date('Y-m-d H:i:s');
			
			

			// echo "<pre>";
			// var_dump($this->request->data);
			// echo "</pre>";
			// exit;

			if ($this->Issue->saveAssociated($this->request->data,array('deep'=>TRUE))) {
				$this->Session->setFlash(__('The History Issue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The issue could not be saved. Please, try again.'));

			}
		}
		$options = array('conditions' => array('Issue.' . $this->Issue->primaryKey => $id));
		$this->request->data = $this->Issue->find('first', $options);

		$companies = $this->Issue->Company->find('list',array('fields'=>'id,nama_perusahaan'));
		$agens = $this->Issue->Agen->find('list',array('fields'=>'id,nama'));
		$reporters = $this->Issue->Reporter->find('list',array('fields'=>'id,nama'));
		$categories = $this->Issue->Category->find('list',array('fields'=>'id,nama'));
		$this->set(compact('companies', 'agens', 'reporters', 'categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Issue->id = $id;
		if (!$this->Issue->exists()) {
			throw new NotFoundException(__('Invalid issue'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Issue->delete()) {
			$this->Session->setFlash(__('The issue has been deleted.'));
		} else {
			$this->Session->setFlash(__('The issue could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
