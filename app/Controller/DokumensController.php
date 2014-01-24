<?php
App::uses('AppController', 'Controller');
/**
 * Dokumens Controller
 *
 * @property Dokumen $Dokumen
 * @property PaginatorComponent $Paginator
 */
class DokumensController extends AppController {

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
		$this->Dokumen->recursive = 0;
		$this->set('dokumens', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dokumen->exists($id)) {
			throw new NotFoundException(__('Invalid dokumen'));
		}
		$options = array('conditions' => array('Dokumen.' . $this->Dokumen->primaryKey => $id));
		$this->set('dokumen', $this->Dokumen->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dokumen->create();
			if ($this->Dokumen->save($this->request->data)) {
				$this->Session->setFlash(__('The dokumen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dokumen could not be saved. Please, try again.'));
			}
		}
		$submissions = $this->Dokumen->Submission->find('list');
		$this->set(compact('submissions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Dokumen->exists($id)) {
			throw new NotFoundException(__('Invalid dokumen'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dokumen->save($this->request->data)) {
				$this->Session->setFlash(__('The dokumen has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dokumen could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dokumen.' . $this->Dokumen->primaryKey => $id));
			$this->request->data = $this->Dokumen->find('first', $options);
		}
		$submissions = $this->Dokumen->Submission->find('list');
		$this->set(compact('submissions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Dokumen->id = $id;
		if (!$this->Dokumen->exists()) {
			throw new NotFoundException(__('Invalid dokumen'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Dokumen->delete()) {
			$this->Session->setFlash(__('The dokumen has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dokumen could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
