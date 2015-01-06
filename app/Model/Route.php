<?php
App::uses('AppModel', 'Model');
/**
 * Route Model
 *
 * @property Content $Content
 */
class Route extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Content' => array(
			'className' => 'Content',
			'foreignKey' => 'content_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	/**
	 * Override beforeValidate()
	 *
	 * @param array $options
	 * @return bool
	 */
	public function beforeValidate($options = array()) {
		parent::beforeValidate();
		$this->data['Route']['domain'] = $this->sanitizeUrl($this->data['Route']['domain']);
		return true;
	}

	public function afterFind($results, $primary = false) {
		foreach ($results as $key => $val) {
			if (isset($val['Route']['domain'])) {
				$results[$key]['Route']['domain'] = $this->addSchemeToUrl(
					$val['Route']['domain']
				);
			}
		}
		return $results;
	}

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
		if(substr($result, -1) == '/') {
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
