<?php
App::uses('AppController', 'Controller');
App::import('Controller', 'LogUsers');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to register and logout.
		$this -> Auth -> allow( 'logout','add','edit');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	public function index_backroom() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	public function index_admin() {
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

	public function list_user(){
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	public function add_agen(){
		if ($this->request->is('post')) {
			$this->User->create();
			// var_dump($this->request->data);
			// exit;
			if ($this->User->saveAssociated($this->request->data,array('deep'=>TRUE))) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index_admin'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
	}

	public function add_customer(){
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->saveAssociated($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$this->User->recursive = 0;	
		//$companies = $this->User->Company->find('all',array('conditions'=>array('user_id is NULL')));
		
		$this->set('companies');
		// ambil data dari company..
		// cek dari company tersebut, ada ga yang user_id nya NULL dan jadikan sebagai list dari calon user dari customer 
		// lempar variable nya view nya.
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			echo "<pre>";
			var_dump($this->request->data);
			echo "</pre>";
			exit;
			if ($this->User->saveAssociated($this->request->data,array('deep'=>TRUE))) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index_admin'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function login() {
		$this->set('jsIncludes', $this->js);
		if ($this -> request -> is('post')) {
			if ($this -> Auth -> login()) {
				// cek dulu dia ada di agen atau di costumer dengan id nya
				$agens = $this->User->Agen->findByUserId($this->Session->read('Auth.User.id'));
				$costumers = $this->User->Company->findByUserId($this->Session->read('Auth.User.id'));

				$log = new LogUsersController();
				$data  = array(
					'LogUser' => array(
						'tanggal_log' => date('Y-m-d H:i:s'),
						'user_id' => $this->Session->read('Auth.User.id'),
						'action' => "Login"
					)
				);
				//var_dump($data);
				$log->createNew($data);

				// jika dia agen berarti set logagen dan redirect nya ke halaman agen
				if($agens){
					$this->Session->write('Auth.User.agen_id', $agens['Agen']['id']);
					$this->Session->write('Auth.User.agen_level', $agens['Agen']['level']);
					// jika agen CSR
					if($agens['Agen']['level'] == '1'){
						return $this->redirect(array("controller"=>"users", "action"=>"index"));
					}
					// jika agen backroom
					else if($agens['Agen']['level'] == '2'){
						return $this->redirect(array("controller"=>"users", "action"=>"index_backroom"));
					}
					// jika agen manage user
					else if($agens['Agen']['level'] == '3'){
						return $this->redirect(array("controller"=>"users", "action"=>"index_admin"));
					}
					
				}else if($costumers){
					return $this -> redirect(array("controller"=>"customers", "action"=>"index"));
				}
			}else{
				$this -> Session -> setFlash(__('Invalid username or password, try again'));
			}
		}
	}

	public function logout() {
		// set dulu log Agen nya
		$log = new LogUsersController();
				$data  = array(
					'LogUser' => array(
						'tanggal_log' => date('Y-m-d H:i:s'),
						'user_id' => $this->Session->read('Auth.User.id'),
						'action' => "Logout"
					)
				);
				var_dump($data);
				$log->createNew($data);		
		return $this -> redirect($this -> Auth -> logout());
	}
}
