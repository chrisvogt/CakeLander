<?php
/**
 * Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2014, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div id="login-overlay" class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2><?php echo __d('users', 'Forgot your password?'); ?></h2>
            <p><?php echo __d('users', 'Please enter the email you used for registration and you\'ll get an email with further instructions.'); ?></p>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-md-12">
                    <?php
                    echo $this->Form->create($model, array(
                        'url' => array(
                            'admin' => false,
                            'action' => 'reset_password')));
                    echo $this->Form->input('email', array(
                        'label' => false,
                        'placeholder' => 'you@email.com',
                        'div' => 'form-group',
                        'class' => 'form-control'
                    ));
                    echo $this->Form->submit('Submit', array(
                        'div' => 'form-group',
                        'class' => 'btn btn-success btn-block'
                    ));
                    echo $this->Form->end();
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>