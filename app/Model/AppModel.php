<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Model', 'Model');
App::uses('CakeTime', 'Utility');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

/**
 * recursive
 *
 * @var int
 */
	public $recursive = -1;

/**
 * behaviors used by model
 *
 * @var array
 */
	public $actsAs = ['Containable'];
        
/**
 * afterFind() override
 * 
 * @param mixed $results
 * @param boolean $primary
 * @return mixed
 */
        public function afterFind($results, $primary = false) {
            parent::afterFind($results, $primary);
            return $this->_prettifyDates($results);
        }
        
        /**
         * Reformat date fields
         * 
         * @param mixed $results
         * @uses CakeTime()
         * @return mixed
         */
        protected function _prettifyDates($results) {
            $datetime_fields = array('created', 'modified');
            foreach ($datetime_fields as $needle) {
                foreach ($results as $key => $val) {
                    if (isset($val[key($val)][$needle])) {
                        $results[$key][key($val)][$needle] = CakeTime::niceShort($val[key($val)][$needle]);
                    }
                }
            }
            return $results;
        }

}
