<?php

class Db {
    
    public $con;
    
    public function __construct(){
        $this->con = new PDO('mysql:host=localhost;dbname=phpajax;charset=utf8','root','');
    }
    
}