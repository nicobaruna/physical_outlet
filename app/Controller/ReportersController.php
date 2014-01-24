<?php
App::uses('AppController', 'Controller');
/**
 * Reporters Controller
 *
 * @property Reporter $Reporter
 * @property PaginatorComponent $Paginator
 */
class ReportersController extends AppController {

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
		$this->Reporter->recursive = 0;
		$this->set('reporters', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reporter->exists($id)) {
			throw new NotFoundException(__('Invalid reporter'));
		}
		$options = array('conditions' => array('Reporter.' . $this->Reporter->primaryKey => $id));
		$this->set('reporter', $this->Reporter->find('first', $options));
	}
	
	public function reporterLookUp($key){
		$names = $this->Reporter->find('list',array(
		'fields' => array(
			'nama'
		),
		'conditions'=>array(
			'nama LIKE' => '%'.$key.'%'
		)));
		$this->set(array(
			'names' => $names,
			'_serialize' => array('names')
		));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reporter->create();
			if ($this->Reporter->save($this->request->data)) {
				$this->Session->setFlash(__('The reporter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reporter could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reporter->exists($id)) {
			throw new NotFoundException(__('Invalid reporter'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reporter->save($this->request->data)) {
				$this->Session->setFlash(__('The reporter has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The reporter could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reporter.' . $this->Reporter->primaryKey => $id));
			$this->request->data = $this->Reporter->find('first', $options);
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
		$this->Reporter->id = $id;
		if (!$this->Reporter->exists()) {
			throw new NotFoundException(__('Invalid reporter'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reporter->delete()) {
			$this->Session->setFlash(__('The reporter has been deleted.'));
		} else {
			$this->Session->setFlash(__('The reporter could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
