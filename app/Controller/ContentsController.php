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
 * Contents Controller
 *
 * @property Content $Content
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContentsController extends AppController {

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
        $this->Content->recursive = 0;
        $this->set('contents', $this->Paginator->paginate());
    }

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
    public function admin_view($id = null) {
        if (!$this->Content->exists($id)) {
            throw new NotFoundException(__('Invalid content'));
        }
        $options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
        $this->set('content', $this->Content->find('first', $options));
    }

/**
 * admin_add method
 *
 * @return void
 */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Content->create();
            if ($this->Content->save($this->request->data)) {
                $this->Session->setFlash(__('The content has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The content could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
        if (!$this->Content->exists($id)) {
            throw new NotFoundException(__('Invalid content'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Content->save($this->request->data)) {
                $this->Session->setFlash(__('The content has been saved.'), 'default', array('class' => 'alert alert-success'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The content could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
            }
        } else {
            $options = array('conditions' => array('Content.' . $this->Content->primaryKey => $id));
            $this->request->data = $this->Content->find('first', $options);
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
        $this->Content->id = $id;
        if (!$this->Content->exists()) {
            throw new NotFoundException(__('Invalid content'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Content->delete()) {
            $this->Session->setFlash(__('The content has been deleted.'), 'default', array('class' => 'alert alert-success'));
        } else {
            $this->Session->setFlash(__('The content could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
        }
        return $this->redirect(array('action' => 'index'));
    }

}
