<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
                'index',
                'add',
                'edit',
                'view',
                'delete'
            ]
        ]
    ];

}
