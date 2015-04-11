<?php

class DATABASE_CONFIG {

    public $default = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'prefix' => ''
    );
    public $test = array(
        'datasource' => 'Database/Mysql',
        'persistent' => false,
        'host' => 'localhost',
        'login' => 'user',
        'password' => 'password',
        'database' => 'test_mahoney',
        'prefix' => ''
    );

    public function __construct() {
        $this->default = array_merge($this->default, Configure::read('App.database'));
    }

}