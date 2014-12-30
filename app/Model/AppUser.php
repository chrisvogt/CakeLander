<?php
App::uses('User', 'Users.Model');

class AppUser extends User {
    public $name = 'AppUser';
    public $useTable = 'users';
}
