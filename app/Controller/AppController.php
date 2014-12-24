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
App::uses('CrudControllerTrait', 'Crud.Lib');

/**
 * Application Controller
 *
 * Application-wide methods, inherited by controllers
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	use CrudControllerTrait;

/**
 * List of global controller components
 *
 * @var array
 */
	public $components = [
		'RequestHandler',
		'Session',
		'Crud.Crud' => [
			'listeners' => [
				'Crud.Api',
				'Crud.ApiPagination',
				'Crud.ApiQueryLog'
			]
		],
		'Paginator' => ['settings' => ['paramType' => 'querystring', 'limit' => 30]]
	];

}
