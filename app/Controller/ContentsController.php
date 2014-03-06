<?php
App::uses('AppController', 'Controller');
/**
 * Contents Controller
 *
 * @property Content $Content
 * @property PaginatorComponent $Paginator
 */
class ContentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	public $helper = array('Substr');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		$this->set('contents',$this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid content'));
		}
		$options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
		$this->set('content', $this->Content->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
		//debug($this->request->data);
			if ($this->Content->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The content has been saved.'),'default',array('class' => 'alert alert-block alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'),'default',array('class' => 'alert alert-block alert-danger'));
			}
		}
		$categories = $this->Content->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {

		if (!$this->Content->exists($id)) {
			throw new NotFoundException(__('Invalid content'));
		}
		if ($this->request->is(array('post', 'put'))) {

			if ($this->Content->save($this->request->data)) {
				$this->Session->setFlash(__('The content has been saved.'),'default',array('class' => 'alert alert-block alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The content could not be saved. Please, try again.'),'default',array('class' => 'alert alert-block alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
			$this->request->data = $this->Content->find('first', $options);
		}
		$categories = $this->Content->Category->find('list');
		$this->set(compact('categories'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Content->id = $id;
		if (!$this->Content->exists()) {
			throw new NotFoundException(__('Invalid content'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Content->delete()) {
			$this->Session->setFlash(__('The content has been deleted.'),'default',array('class' => 'alert alert-block alert-success'));
		} else {
			$this->Session->setFlash(__('The content could not be deleted. Please, try again.'),'default',array('class' => 'alert alert-block alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
