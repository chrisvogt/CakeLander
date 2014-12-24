<?php
/*
 * This file is part of CakeLander.
 *
 * (c) 2014 CJ Vogt <mail@chrisvogt.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

    /**
     * Controller name
     *
     * @var string
     */
    public $name = 'Pages';

    /**
     * This controller does not use a model
     *
     * @var array
     */
    public $uses = [];

    public function beforeFilter() {
        $this->layout = 'landerbs';
    }

    /**
     * Displays a view
     *
     * @return void
     * @throws NotFoundException
     */
    public function display() {
        $path = func_get_args();

        $count = count($path);
        if (!$count) {
            $this->redirect('/');
        }
        $page = $subpage = $title_for_layout = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        if (!empty($path[$count - 1])) {
            $title_for_layout = Inflector::humanize($path[$count - 1]);
        }

        // call method to declade model relationships
        $this->_setupModelsOnFly();

        // call method to set the template content
        $this->_setLanderData();

        $this->set(compact('page', 'subpage', 'title_for_layout'));

        try {
            $this->render(implode('/', $path));
        } catch (MissingViewException $e) {
            if (!Configure::read('debug')) {
                throw new NotFoundException();
            }

            throw $e;
        }
    }

    protected function _getHost() {
        return $_SERVER['HTTP_HOST'];
    }

    /**
     * Define model relationships on the fly
     * 
     * Probably a better way to do this; I need to research the CRUD plug-in
     * @todo find a way to get rid of this method
     */
    protected function _setupModelsOnFly() {
        $this->loadModel('Endpoint');
        $this->Endpoint->recursive = 2;
        $this->Endpoint->bindModel(
                array('hasOne' => array(
                        'Content' => array(
                            'className' => 'Content'
                        )
                    )
                )
        );
        $this->Endpoint->Content->bindModel(
                array('hasOne' => array(
                'Menu' => array(
                    'className' => 'Menu'
                )
            )
                ), array('belongsTo' => array(
                'Endpoint' => array(
                    'className' => 'Endpoint'
                )
            )
                )
        );
        $this->Endpoint->Content->Menu->bindModel(
                array('belongsTo' => array(
                        'Content' => array(
                            'className' => 'Content'
                        )
                    )
                )
        );
    }

    /**
     * Method to load and set the landing page contents
     */
    protected function _setLanderData() {
        $lander_data = $this->Endpoint->findByUrl($this->_getHost());
        $content = $lander_data['Content'];

        $this->set(array(
            'menu' => $content['Menu']['html'],
            'logo' => $content['logo_href'],
            'slides' => $content['slider'],
            'social' => $content['social'],
            'headline' => $content['headline'],
            'subhead' => $content['subhead'],
            'body' => $content['body'],
            'host_address' => $this->_getHost()
        ));
    }

}
