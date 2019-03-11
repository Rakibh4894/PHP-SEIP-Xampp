<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/11/2019
 * Time: 12:17 PM
 */
require_once "./Example.php";

class DemoTwo extends Example
{
    public $age = "20";
    protected $location = "Dhaka";
    private $mobile = "018838";

    public function newOne(){
        //echo "In one";
        $this->add();
    }
    public function newTwo(){
        echo "In two";
    }
    public function newThree(){
        echo "In three";
    }

}