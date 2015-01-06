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
 * Routes Controller
 *
 * @property Route $Route
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RoutesController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator', 'Session', 'Auth');

/**
 * admin_index method
 *
 * @return void
 */
    public function admin_index() {
        $this->Route->recursive = 0;
        $this->set('routes', $this->Paginator->paginate());
    }

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_view($id = null) {
        $this->Route->recursive = 0;
        if (!$this->Route->exists($id)) {
            throw new NotFoundException(__('Invalid Route'));
        }
        $options = array('conditions' => array('Route.' . $this->Route->primaryKey => $id));
        $this->set('route', $this->Route->find('first', $options));
    }

/**
 * admin_add method
 *
 * @return void
 */
    public function admin_add() {
        $this->Route->recursive = 0;
        if ($this->request->is('post')) {
            $this->Route->create();
            if ($this->Route->save($this->request->data)) {
                $this->Session->setFlash(__('The Route has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Route could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $contents = $this->Route->Content->find('list');
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
        $this->Route->recursive = 0;
        if (!$this->Route->exists($id)) {
            throw new NotFoundException(__('Invalid Route'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Route->save($this->request->data)) {
                $this->Session->setFlash(__('The Route has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The Route could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Route.' . $this->Route->primaryKey => $id));
            $this->request->data = $this->Route->find('first', $options);
        }
        $contents = $this->Route->Content->find('list');
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
        $this->Route->id = $id;
        if (!$this->Route->exists()) {
            throw new NotFoundException(__('Invalid Route'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Route->delete()) {
            $this->Session->setFlash(__('The Route has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The Route could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
