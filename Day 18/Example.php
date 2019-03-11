<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/11/2019
 * Time: 11:37 AM
 */

class Example
{
    public $name = "Rahim Khan";
    protected $city = "Dhaka";
    private $country = "BD";
    public $value;

    /*public function __construct($data){
       echo $this->value = $data;
       echo "<br>";
    }*/
    public function add(){
        echo "In add";
        //$this->div();
        //echo $this->value;
    }
    protected function sub(){
        echo "In sub";
    }
    private function div(){
        echo "In div";
    }

}