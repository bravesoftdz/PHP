<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
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
 */
class AppController extends Controller {

    public $helpers = array(
        'System.Mahoney',
        'Form' => array('className' => 'System.MahoneyForm'),
        'System.Search'
    );
    public $components = array(
        'System.Filter',
        'System.Configurer',
        'System.Security',
        'RequestHandler',
        'System.Plugin',
        'Session',
        'Cookie',
        'Acl',
        'Auth' => array(
            'loginRedirect' => "/admin",
            'logoutRedirect' => "/",
            'loginAction' => "/admin",
            'authError' => 'Você não está autorizado a visualizar esta área',
            'authenticate' => array(
                'Form' => array(
                    'userModel' => 'System.User'
                )
            ),
            'authorize' => array('Controller', 'Actions' => array('userModel' => 'System.User', 'actionPath' => MAHONEY_ACL_ROOT_NODE))
        )
    );

    function beforeRender() {

        $this->theme = Configure::read("SystemSiteInfo.theme");

        Configure::write('Config.language', (Configure::check("SystemSiteInfo.locale") ? Configure::read("SystemSiteInfo.locale") : "default"));

        if ($this->Session->check('Message.flash')) {
            $flash = $this->Session->read('Message.flash');

            if ($flash['element'] == 'default') {
                $flash['element'] = 'flashMessage';
                $this->Session->write('Message.flash', $flash);
            }
        }
    }

    function beforeFilter() {
        global $mahoneyContent;
        global $pluginController;

        $mahoneyContent["class"] = array();
        $mahoneyContent["meta"] = array();

        $pluginController = $this->Configurer->getJsController();

        // If user have not installed Mahoney
        if (!MAHONEY_IS_INSTALLED && $this->params['controller'] != 'install' && $this->params['action'] != 'db'):
            $this->redirect('/install');
        endif;
        // If mahoney is installed
        if (MAHONEY_IS_INSTALLED && $this->params['controller'] != 'install' && $this->params['action'] != 'db'):
            // Load config data from database
            $this->Configurer->loadMahoneyConf();
        endif;

        // Load Plugins Informations
        $this->set('mahoneyPlugins', $this->Plugin->getPlugins());
    }

    function isAuthorized($user) {
        return !(bool) Configure::read("SystemAcl.useAcl");
    }

}
