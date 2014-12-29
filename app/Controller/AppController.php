<?php
/*
 * This file is part of CakeLander.
 *
 * (c) 2014 CJ Vogt <mail@chrisvogt.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Application-wide methods, inherited by controllers
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

/**
 * List of global controller components
 *
 * @var array
 */
	public $components = [
		'RequestHandler',
  #              'DebugKit.Toolbar',
		'Session',
		'Paginator' => ['settings' => ['paramType' => 'querystring', 'limit' => 30]]
	];
        
        public $helpers = array('Js');
        
/**
 * Admin scaffold layout
 */
        public function beforeFilter() {
          if ($this->request->prefix == 'admin') {
            $this->layout = 'admin';
          } 
        }

}
