<?php
App::uses('AppController', 'Controller');
/**
 * LandingPages Controller
 *
 * @property LandingPage $LandingPage
 * @property PaginatorComponent $Paginator
 */
class LandingPagesController extends AppController {

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
 * index method
 *
 * @return void
 */
	public function admin_index() {
		$this->LandingPage->recursive = 0;
		$this->set('landingPages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->LandingPage->recursive = 1;
                if (!$this->LandingPage->exists($id)) {
			throw new NotFoundException(__('Invalid landing page'));
		}
		$options = array('conditions' => array('LandingPage.' . $this->LandingPage->primaryKey => $id));
		$this->set('landingPage', $this->LandingPage->find('first', $options));
        #        Debugger::dump(var_dump($this->LandingPage->find('first', $options)));
	}

/**
 * add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->LandingPage->create();
			if ($this->LandingPage->saveAll($this->request->data)) {
				$this->Session->setFlash(__('The landing page has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The landing page could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
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
	public function admin_edit($id = null) {
		if (!$this->LandingPage->exists($id)) {
			throw new NotFoundException(__('Invalid landing page'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->LandingPage->save($this->request->data)) {
				$this->Session->setFlash(__('The landing page has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The landing page could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('LandingPage.' . $this->LandingPage->primaryKey => $id));
			$this->request->data = $this->LandingPage->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->LandingPage->id = $id;
		if (!$this->LandingPage->exists()) {
			throw new NotFoundException(__('Invalid landing page'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->LandingPage->delete()) {
			$this->Session->setFlash(__('The landing page has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The landing page could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
