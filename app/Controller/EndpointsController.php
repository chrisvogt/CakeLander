<?php
/*
 * This file is part of CakeLander.
 *
 * (c) 2014 CJ Vogt <mail@chrisvogt.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
App::uses('AppController', 'Controller');

/**
 * Endpoints Controller
 *
 * @property Endpoint $Endpoint
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EndpointsController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
    public function admin_index() {
        $this->Endpoint->recursive = 0;
        $this->set('endpoints', $this->Paginator->paginate());
    }

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_view($id = null) {
        $this->Endpoint->recursive = 0;
        if (!$this->Endpoint->exists($id)) {
            throw new NotFoundException(__('Invalid endpoint'));
        }
        $options = array('conditions' => array('Endpoint.' . $this->Endpoint->primaryKey => $id));
        $this->set('endpoint', $this->Endpoint->find('first', $options));
    }

/**
 * admin_add method
 *
 * @return void
 */
    public function admin_add() {
        $this->Endpoint->recursive = 0;
        if ($this->request->is('post')) {
            $this->Endpoint->create();
            if ($this->Endpoint->save($this->request->data)) {
                $this->Session->setFlash(__('The endpoint has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The endpoint could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $contents = $this->Endpoint->Content->find('list');
        $this->set(compact('contents'));
    }

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_edit($id = null) {
        $this->Endpoint->recursive = 0;
        if (!$this->Endpoint->exists($id)) {
            throw new NotFoundException(__('Invalid endpoint'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Endpoint->save($this->request->data)) {
                $this->Session->setFlash(__('The endpoint has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The endpoint could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Endpoint.' . $this->Endpoint->primaryKey => $id));
            $this->request->data = $this->Endpoint->find('first', $options);
        }
        $contents = $this->Endpoint->Content->find('list');
        $this->set(compact('contents'));
    }

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_delete($id = null) {
        $this->Endpoint->id = $id;
        if (!$this->Endpoint->exists()) {
            throw new NotFoundException(__('Invalid endpoint'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Endpoint->delete()) {
            $this->Session->setFlash(__('The endpoint has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The endpoint could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
