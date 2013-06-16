<?php
App::uses('AppController', 'Controller');
/**
 * Trucks Controller
 *
 * @property Truck $Truck
 */
class TrucksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Truck->recursive = 0;
		$this->set('trucks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Truck->exists($id)) {
			throw new NotFoundException(__('Invalid truck'));
		}
		$options = array('conditions' => array('Truck.' . $this->Truck->primaryKey => $id));
		$this->set('truck', $this->Truck->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Truck->create();
			if ($this->Truck->save($this->request->data)) {
				$this->Session->setFlash(__('The truck has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The truck could not be saved. Please, try again.'));
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
		if (!$this->Truck->exists($id)) {
			throw new NotFoundException(__('Invalid truck'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Truck->save($this->request->data)) {
				$this->Session->setFlash(__('The truck has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The truck could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Truck.' . $this->Truck->primaryKey => $id));
			$this->request->data = $this->Truck->find('first', $options);
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
		$this->Truck->id = $id;
		if (!$this->Truck->exists()) {
			throw new NotFoundException(__('Invalid truck'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Truck->delete()) {
			$this->Session->setFlash(__('Truck deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Truck was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Truck->recursive = 0;
		$this->set('trucks', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Truck->exists($id)) {
			throw new NotFoundException(__('Invalid truck'));
		}
		$options = array('conditions' => array('Truck.' . $this->Truck->primaryKey => $id));
		$this->set('truck', $this->Truck->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Truck->create();
			if ($this->Truck->save($this->request->data)) {
				$this->Session->setFlash(__('The truck has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The truck could not be saved. Please, try again.'));
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
		if (!$this->Truck->exists($id)) {
			throw new NotFoundException(__('Invalid truck'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Truck->save($this->request->data)) {
				$this->Session->setFlash(__('The truck has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The truck could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Truck.' . $this->Truck->primaryKey => $id));
			$this->request->data = $this->Truck->find('first', $options);
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
		$this->Truck->id = $id;
		if (!$this->Truck->exists()) {
			throw new NotFoundException(__('Invalid truck'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Truck->delete()) {
			$this->Session->setFlash(__('Truck deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Truck was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
