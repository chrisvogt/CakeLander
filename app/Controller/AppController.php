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
     * @var mixed
     */
    public $components = [
        'RequestHandler',
        'Session',
        'Auth',
        'Paginator' => ['settings' => ['paramType' => 'querystring', 'limit' => 30]]
    ];

    /**
     * List of loaded helpers
     *
     * @var mixed
     */
    public $helpers = array(
        'Session',
        'Js',
        'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
        'Form' => array('className' => 'BoostCake.BoostCakeForm'),
        'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
    );

    /**
     * Admin scaffold layout
     */
    public function beforeFilter() {
        if (AuthComponent::user()) {
            $this->layout = 'admin';
        }
        $this->set('bodyId', 'id="' . $this->params['action'] . '"');
    }

}
