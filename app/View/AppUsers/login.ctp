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
<?php echo $this->Session->flash('auth'); ?>

<div class="login-container">
    <div id="output"></div>
    <div class="avatar"></div>
    <div class="form-box">
        <?php
        echo $this->Form->create($model, array(
            'action' => 'login',
            'id' => 'LoginForm',
            'class' => 'form-box'));
        echo $this->Form->input('email', array(
            'label' => false));
        echo $this->Form->input('password', array(
            'label' => false));
        echo '<div class="checkbox">' . $this->Form->input('remember_me', array('type' => 'checkbox', 'div' => false)) . '</div>';
        echo '<p>' . $this->Html->link(__d('users', 'I forgot my password'), array('action' => 'reset_password')) . '</p>';

        echo $this->Form->hidden('User.return_to', array(
            'value' => $return_to));
        echo $this->Form->button('Submit Form', array('type' => 'submit', 'class' => 'btn btn-info btn-block login'));
        echo $this->Form->end();
        ?>
    </div>
</div>