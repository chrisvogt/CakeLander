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
            $this->loadModel('Endpoint');
            $this->loadModel('Menu');
            $this->Endpoint->recursive = '0';
            $endpoint = $this->Endpoint->findByUrl(Router::fullBaseUrl());
            $menu = $this->Menu->findByContentId($endpoint['Content']['id']);
            if (isset($endpoint['Content'])) {
                $this->set('lander', $endpoint['Content']);
            }
            if (isset($endpoint['Endpoint'])) {
                $this->set('endpoint', $endpoint['Endpoint']);
            }
            if (isset($menu['Menu'])) {
                $this->set('menu', $menu['Menu']['html']);
            }
            $endpoint = $this->Endpoint->findByUrl(Router::fullBaseUrl());
            if (isset($endpoint['Content'])) {
                $this->set('lander', $endpoint['Content']);
            }
            if (isset($endpoint['Endpoint'])) {
                $this->set('endpoint', $endpoint['Endpoint']);
            }
            if (isset($endpoint['Menu'])) {
                $this->set('menu', $endpoint['Content']['Menu']['html']);
            }
        }

        if ($page === 'dashboard') {
            $this->loadModel('Endpoint');
            $this->loadModel('Content');
            $this->loadModel('Menu');
            $this->loadModel('User');
            $count = array(
                'endpoints' => $this->Endpoint->find('count'),
                'contents'  => $this->Content->find('count'),
                'menus'     => $this->Menu->find('count'),
                'users'     => $this->User->find('count')
            );
            $this->set('counts', $count);
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

}
