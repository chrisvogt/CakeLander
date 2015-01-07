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
 * Static content controller
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * Controller name
 *
 * @var string
 */
    public $name = 'Pages';

/**
 * This controller does not use a model
 *
 * @var array
 */
    public $uses = [];

    public $components = array('Auth');

/**
 * Displays a view
 *
 * @return void
 * @throws NotFoundException
 */
    public function display() {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            $this->redirect('/');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }

        if ($page === 'home') { // landing page
            $this->loadModel('LandingPage');
            $this->LandingPage->recursive = '1';
            
            $here = $this->LandingPage->sanitizeUrl(Router::fullBaseUrl());
            $landing_page = $this->LandingPage->findByDomain($here);
            
            if (!$landing_page) {
                throw new NotFoundException('Oops! Perhaps this domain hasn\'t been setup yet?');
            }

            $this->set('landing_page', $landing_page);
        }

        if ($page === 'dashboard') {
            if ($this->Auth->user()) {
                $this->loadModel('LandingPage');
                $this->loadModel('User');
                $count = array(
                    'landing_pages' => $this->LandingPage->find('count'),
                    'users'     => $this->User->find('count')
                );
                $this->set('counts', $count);
            } else {
                return $this->redirect('/login');
            }
        }

        $this->set(compact('page', 'subpage', 'title_for_layout'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingViewException $e) {
            if (!Configure::read('debug')) {
                throw new NotFoundException();
            }

            throw $e;
        }
    }

/**
 * beforeFilter override
 */
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('display');
        $this->_determineLayout();
    }

/**
 * Switch the layout
 */
    protected function _determineLayout() {
        if ($this->here === '/admin') {
            $this->layout = 'admin';
        } elseif ($this->here === '/') {
            $this->layout = 'landerbs';
        }
    }
    
    protected function _setupAuth() {
        parent::_setupAuth();
    }
}
