<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/13/2019
 * Time: 11:39 AM
 */
namespace App\Classes;

class Demo
{
    public $name = "Sanjida";
    protected $email = "Sanjida@gmail.com";
    private $mobile = "01854438765";
    static $city = "Dhaka";

    public function test(){
        echo "In test";
        //$this->world();
        //echo Demo::$city;

    }
    protected function hello(){
        echo "In hello";
    }
    private function world(){
        echo "In world";
    }

}