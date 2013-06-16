<?php
App::uses('AppController', 'Controller');
/**
 * JobLoads Controller
 *
 * @property JobLoad $JobLoad
 */
class JobLoadsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->JobLoad->recursive = 0;
		$this->set('jobLoads', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobLoad->exists($id)) {
			throw new NotFoundException(__('Invalid job load'));
		}
		$options = array('conditions' => array('JobLoad.' . $this->JobLoad->primaryKey => $id));
		$this->set('jobLoad', $this->JobLoad->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobLoad->create();
			if ($this->JobLoad->save($this->request->data)) {
				$this->Session->setFlash(__('The job load has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job load could not be saved. Please, try again.'));
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
		if (!$this->JobLoad->exists($id)) {
			throw new NotFoundException(__('Invalid job load'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobLoad->save($this->request->data)) {
				$this->Session->setFlash(__('The job load has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job load could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobLoad.' . $this->JobLoad->primaryKey => $id));
			$this->request->data = $this->JobLoad->find('first', $options);
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
		$this->JobLoad->id = $id;
		if (!$this->JobLoad->exists()) {
			throw new NotFoundException(__('Invalid job load'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobLoad->delete()) {
			$this->Session->setFlash(__('Job load deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Job load was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->JobLoad->recursive = 0;
		$this->set('jobLoads', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->JobLoad->exists($id)) {
			throw new NotFoundException(__('Invalid job load'));
		}
		$options = array('conditions' => array('JobLoad.' . $this->JobLoad->primaryKey => $id));
		$this->set('jobLoad', $this->JobLoad->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->JobLoad->create();
			if ($this->JobLoad->save($this->request->data)) {
				$this->Session->setFlash(__('The job load has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job load could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->JobLoad->exists($id)) {
			throw new NotFoundException(__('Invalid job load'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->JobLoad->save($this->request->data)) {
				$this->Session->setFlash(__('The job load has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The job load could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobLoad.' . $this->JobLoad->primaryKey => $id));
			$this->request->data = $this->JobLoad->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->JobLoad->id = $id;
		if (!$this->JobLoad->exists()) {
			throw new NotFoundException(__('Invalid job load'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->JobLoad->delete()) {
			$this->Session->setFlash(__('Job load deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Job load was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
