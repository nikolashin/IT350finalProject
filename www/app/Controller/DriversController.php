<?php
App::uses('AppController', 'Controller');
/**
 * Drivers Controller
 *
 * @property Driver $Driver
 */
class DriversController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Driver->recursive = 0;
		$this->set('drivers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Driver->exists($id)) {
			throw new NotFoundException(__('Invalid driver'));
		}
		$options = array('conditions' => array('Driver.' . $this->Driver->primaryKey => $id));
		$this->set('driver', $this->Driver->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Driver->create();
			if ($this->Driver->save($this->request->data)) {
				$this->Session->setFlash(__('The driver has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver could not be saved. Please, try again.'));
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
		if (!$this->Driver->exists($id)) {
			throw new NotFoundException(__('Invalid driver'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Driver->save($this->request->data)) {
				$this->Session->setFlash(__('The driver has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Driver.' . $this->Driver->primaryKey => $id));
			$this->request->data = $this->Driver->find('first', $options);
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
		$this->Driver->id = $id;
		if (!$this->Driver->exists()) {
			throw new NotFoundException(__('Invalid driver'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Driver->delete()) {
			$this->Session->setFlash(__('Driver deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Driver was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Driver->recursive = 0;
		$this->set('drivers', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Driver->exists($id)) {
			throw new NotFoundException(__('Invalid driver'));
		}
		$options = array('conditions' => array('Driver.' . $this->Driver->primaryKey => $id));
		$this->set('driver', $this->Driver->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Driver->create();
			if ($this->Driver->save($this->request->data)) {
				$this->Session->setFlash(__('The driver has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver could not be saved. Please, try again.'));
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
		if (!$this->Driver->exists($id)) {
			throw new NotFoundException(__('Invalid driver'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Driver->save($this->request->data)) {
				$this->Session->setFlash(__('The driver has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The driver could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Driver.' . $this->Driver->primaryKey => $id));
			$this->request->data = $this->Driver->find('first', $options);
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
		$this->Driver->id = $id;
		if (!$this->Driver->exists()) {
			throw new NotFoundException(__('Invalid driver'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Driver->delete()) {
			$this->Session->setFlash(__('Driver deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Driver was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
