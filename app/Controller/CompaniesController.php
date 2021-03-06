<?php
App::uses('AppController', 'Controller');
/**
 * Companies Controller
 *
 * @property Company $Company
 * @property PaginatorComponent $Paginator
 */
class CompaniesController extends AppController {

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
		$this->Company->recursive = 0;
		$this->set('companies', $this->Paginator->paginate());
	}

	public function generatePassword() {
    $length = 8;
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
	}

	public function add_customer(){
		if($this->request->is('post')){
			$this->loadModel('User');
			$this->User->create();
			$this->request->data['User']['password'] = $this->generatePassword();
			// echo "<pre>";
			// var_dump($this->request->data);
			// exit;
			// echo "</pre>";
			// exit;
			if ($this->User->saveAssociated($this->request->data,array('deep'=>TRUE))) {
				$this->Session->setFlash(__('The Customer has been saved.'));

				return $this->redirect(array('controller'=>'users','action' => 'index_backroom'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}else{
			$this->Company->recursive = 0;
			$this->set('companies', $this->Paginator->paginate());
		}
	}
	public function save_customer($id = null){
		if($this->request->is('post')){
			$this->User->create();
			echo "<pre>";
			var_dump($this->request->data);
			exit;
			echo "</pre>";
			exit;
			if ($this->Company->saveAssociated($this->request->data,array('deep'=>TRUE))) {
				$this->Session->setFlash(__('The company has been saved.'));

				return $this->redirect(array('controller'=>'users','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
		$this->set('company', $this->Company->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Company->create();
			foreach ($this->request->data['CompanyService'] as $key=>$value) {
				if($value['service_id'] == 0){
					unset($this->request->data['CompanyService'][$key]);
				}
			}
			foreach ($this->request->data['CompanyArea'] as $key=>$value) {
				if($value['area_id'] == 0){
					unset($this->request->data['CompanyArea'][$key]);
				}
			}
			// echo "<pre>";
			// var_dump($this->request->data);
			// exit;
			// echo "</pre>";
			// exit;
			if ($this->Company->saveAssociated($this->request->data,array('deep'=>TRUE))) {
				$this->Session->setFlash(__('The company has been saved.'));

				return $this->redirect(array('controller'=>'users','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		}
		$services = $this->Company->CompanyService->Service->find('all');
		$this->set(compact('services'));
		$areas = $this->Company->CompanyArea->Area->find('all');
		$this->set(compact('areas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {

		if (!$this->Company->exists($id)) {
			throw new NotFoundException(__('Invalid company'));
		}
		if ($this->request->is(array('post', 'put'))) {

			echo "<pre>";
			var_dump($this->request->data);
			echo "</pre>";
			exit;

			if ($this->Company->saveAssociated($this->request->data,array('deep'=>TRUE))) {
				$this->Session->setFlash(__('The company has been saved.'));
				
				return $this->redirect(array('controller'=>'users','action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Company.' . $this->Company->primaryKey => $id));
			$this->request->data = $this->Company->find('first', $options);
		}
		
		//get all areas
		$services = $this->Company->CompanyService->Service->find('list',array('fields'=>array('id','nama_layanan')));
		//get all services
		$areas = $this->Company->CompanyArea->Area->find('list',array('fields'=>array('id','nama')));
		
		//selected area
		$selectedArea = $this->getSelected($this->request->data['CompanyArea'] , 'area_id');
		 
		
		//get seleceted services
		$selectedService = $this->getSelected($this->request->data['CompanyService'] , 'service_id');
		
		$this->set(compact('areas','services','selectedArea','selectedService'));
	}

	function getSelected($data,$idKey){
		foreach ($data as $key => $value) {
			$selectedArea[] = $value[$idKey];
		}
		
		return (!empty($selectedArea)) ? $selectedArea : array();
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Company->id = $id;
		if (!$this->Company->exists()) {
			throw new NotFoundException(__('Invalid company'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Company->delete()) {
			$this->Session->setFlash(__('The company has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

}
