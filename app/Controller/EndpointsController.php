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
 * CakePHP EndpointsController
 * @author chrisvogt
 */
class EndpointsController extends AppController {

    public $components = [
        'Crud.Crud' => [
            'actions' => [
                'index'  => ['relatedModels' => ['Content', 'Menu']],
                'add',
                'edit',
                'view',
                'delete'
            ]
        ]
    ];

}
