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
 * CakePHP MenusController
 * @author chrisvogt
 */
class MenusController extends AppController {

    public $components = [
        'Crud.Crud' => [
            'actions' => [
                'index' => ['relatedModels' => ['Content', 'Endpoint']],
                'add' => ['relatedModels' => ['Content']],
                'edit' => ['relatedModels' => ['Content']],
                'view',
                'delete'
            ]
        ]
    ];

}
