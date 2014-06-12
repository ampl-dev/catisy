<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 * 
 * @property SessionComponent $Session
 * @property PaginatorComponent $Paginator
 * @property ToolbarComponent $Toolbar
 * @property AuthComponent $Auth
 */
class AppController extends Controller {

    public $components = array(
        'Session',
        'Auth' => array(
            'loginAction' => array(
                'admin' => false,
                'plugin' => null,
                'controller' => 'users',
                'action' => 'login',
            ),
            'loginRedirect' => array(
                'admin' => false,
                'plugin' => null,
                'controller' => 'projects',
                'action' => 'index',
            ),
            'logoutRedirect' => array(
                'admin' => false,
                'plugin' => null,
                'controller' => 'users',
                'action' => 'login',
            ),
            'authError' => 'You need to be logged in to access that page!',
            'authorize' => array('Controller'),
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'User',
                    'fields' => array(
                        'username' => 'email',
                        'password' => 'password'
                    ),
                    'scope' => array('User.is_active' => 1),
                    'passwordHasher' => array(
                        'className' => 'Simple',
                        'hashType' => 'sha256'
                    )
                )
            ),
        ),
        'Paginator',
        'DebugKit.Toolbar'
    );
    public $helpers = array(
        'Session',
        'Html' => array('className' => 'BoostCake.BoostCakeHtml'),
        'Form' => array('className' => 'BoostCake.BoostCakeForm'),
        'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),
    );
    public $layout = 'bootstrap';

    public function isAuthorized($user = null) {
        // Any registered user can access public functions
        if (empty($this->request->params['admin'])) {
            return true;
        }

        // Only admins can access admin functions
        if (isset($this->request->params['admin'])) {
            return (bool) ($user['role'] === 'admin');
        }

        // Default deny
        return false;
    }

}
