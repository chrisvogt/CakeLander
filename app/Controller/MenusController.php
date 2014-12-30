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
 * Menus Controller
 *
 * @property Menu $Menu
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MenusController extends AppController {

/**
 * Components
 *
 * @var array
 */
    public $components = array('Paginator', 'Session', 'Auth');

/**
 * Helpers
 *
 * @var array
 */
    public $helpers = array('Wysiwyg.Wysiwyg' => array('_editor' => 'Markitup'));

/**
 * Markitup options
 *
 * @var array
 */
    public $editorOptions = array('_buffer' => false, '_scriptBlock' => 'scriptBottom');

/**
 * beforeFilter override
 */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('editorOptions', $this->editorOptions);
    }

/**
 * admin_index method
 *
 * @return void
 */
    public function admin_index() {
        $this->Menu->recursive = 0;
        $this->set('menus', $this->Paginator->paginate());
    }

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_view($id = null) {
        $this->Menu->recursive = 0;
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
        $this->set('menu', $this->Menu->find('first', $options));
    }

/**
 * admin_add method
 *
 * @return void
 */
    public function admin_add() {
        $this->Menu->recursive = 0;
        if ($this->request->is('post')) {
            $this->Menu->create();
            if ($this->Menu->save($this->request->data)) {
                $this->Session->setFlash(__('The menu has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The menu could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        }
        $contents = $this->Menu->Content->find('list');
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
        $this->Menu->recursive = 0;
        if (!$this->Menu->exists($id)) {
            throw new NotFoundException(__('Invalid menu'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Menu->save($this->request->data)) {
                $this->Session->setFlash(__('The menu has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The menu could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Menu.' . $this->Menu->primaryKey => $id));
            $this->request->data = $this->Menu->find('first', $options);
        }
        $contents = $this->Menu->Content->find('list');
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
        $this->Menu->id = $id;
        if (!$this->Menu->exists()) {
            throw new NotFoundException(__('Invalid menu'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Menu->delete()) {
            $this->Session->setFlash(__('The menu has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The menu could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
