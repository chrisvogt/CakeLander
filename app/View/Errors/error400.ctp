<?php
/**
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
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="error-template">
                <h1>
                    Oops! That page wasn't found.</h1>
                <h2>
                    404 Not Found</h2>
                <div class="error-details">
                    Perhaps the landing page you are looking for has't been setup yet?
                </div>
                <div class="error-actions">
                	<?php # echo $this->Html->link('<span class="glyphicon glyphicon-home"></span> Take Me Home', '/', array('escape' => false, 'class' => 'btn btn-primary btn-lg')); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>
