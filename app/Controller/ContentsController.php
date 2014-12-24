<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
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
                'index',
                'add' => ['relatedModels' => ['Menu']],
                'edit' => ['relatedModels' => ['Menu']],
                'view',
                'delete'
            ]
        ]
    ];
        
}
