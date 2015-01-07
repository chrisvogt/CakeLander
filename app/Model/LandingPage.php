<?php

App::uses('AppModel', 'Model');

/**
 * LandingPage Model
 *
 * @property Menu $Menu
 * @property Slide $Slide
 */
class LandingPage extends AppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'title' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'domain' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'headline' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'body' => array(
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
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Slide' => array(
            'className' => 'Slide',
            'foreignKey' => 'landing_page_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
    public $hasOne = array(
        'Menu' => array(
            'className' => 'Menu',
            'foreignKey' => 'landing_page_id',
            'dependent' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
    );

    /**
     * Sanitize the user input domain field
     *
     * @param string $url
     * @return string
     */
    public function sanitizeUrl($url) {
        // remove the scheme
        $result = preg_replace('#^https?://#', '', $url);
        // remove any trailing slashes
        if (substr($result, -1) == '/') {
            $result = substr($result, 0, -1);
        }
        return $result;
    }

    /**
     * Prepend the `http` scheme to URLs
     *
     * @param $url
     * @return string
     */
    public function addSchemeToUrl($url) {
        return 'http://' . $url;
    }
    
}
