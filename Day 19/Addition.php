<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/13/2019
 * Time: 9:56 AM
 */

class Addition
{
    public function addNumber(){
        if (isset($_POST['btn'])){
            $first = $_POST['1stNumber'];
            $second = $_POST['2ndNumber'];
            $third = $_POST['3rdNumber'];
            $fourth = $_POST['4thNumber'];
            $fifth = $_POST['5thNumber'];

            $result = $first + $second + $third + $fourth + $fifth;

            return $result;
        }
    }
}