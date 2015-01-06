<?php
App::uses('UsersController', 'Users.Controller');

class AppUsersController extends UsersController {

    public $name = 'AppUsers';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->User = ClassRegistry::init('AppUser');
        $this->layout = 'admin';
        $this->set('model', 'AppUser');
    }
    
    /**
    * Renders the views in app/Plugin/Users/View/Users when a ctp file is not
    * found in app/View/AppUsers.
    *
    * @todo make sure to transverse through the various defined paths including
    * themes rather than assuming the View paths directory.
    *
    * @param string $view View to use for rendering
    * @param string $layout Layout to use
    * @return CakeResponse A response object containing the rendered view.
    */
   public function render($view = null, $layout = null) {
           if (is_null($view)) {
                   $view = $this->action;
           }
           $prefix = '';
           if (!file_exists(APP . 'View' . DS . $this->viewPath . DS . $view . '.ctp')) {
                   $prefix = 'Users.Users/';
           }
           return parent::render($prefix . $view, $layout);
   }

    protected function _setupAuth() {
        parent::_setupAuth();
        $this->Auth->allow('verify', 'logout', 'reset_password', 'login');
        $this->Auth->flash = array(
            'element'   => 'alert',
            'key'       => 'auth',
            'params'    => array(
                'plugin'    => 'BoostCake',
                'class'     => 'alert-danger alert-auth'
            )
        );
        $this->Auth->loginRedirect = array('controller' => 'pages', 'action' => 'display', 'dashboard');
        $this->Auth->logoutRedirect = '/';
        if ($this->request->action == 'register') {
                $this->Components->disable('Auth');
        }
    }

}
