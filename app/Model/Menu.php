<?php
App::uses('AppModel', 'Model');
/**
 * Menu Model
 *
 * @property LandingPage $LandingPage
 */
class Menu extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'landing_page_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'html' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'LandingPage' => array(
			'className' => 'LandingPage',
			'foreignKey' => 'landing_page_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
