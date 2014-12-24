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
 * CakePHP ContentsController
 * @author chrisvogt
 */
class ContentsController extends AppController {

    public $components = [
        'Crud.Crud' => [
            'actions' => [
                'index' => ['relatedModels' => ['Endpoint', 'Menu']],
                'add' => ['relatedModels' => ['Endpoint']],
                'edit' => ['relatedModels' => ['Endpoint']],
                'view',
                'delete'
            ]
        ]
    ];
        
}
