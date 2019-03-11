<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/11/2019
 * Time: 9:58 AM
 */

class Demo
{
    public function makeOddEven(){
        if (isset($_POST['btn'])){
            $firstNumber = $_POST['first_number'];
            $lastNumber = $_POST['last_number'];
            $check = $_POST['check'];
            $res = "";

            for($i = $firstNumber; $i <= $lastNumber; $i++){
                if($i%2 !=0 && $check == 'ODD'){
                    $res .= $i." ";
                }
                elseif($i%2 ==0 && $check == 'EVEN'){
                    $res .= $i." ";
                }

            }
            return $res;

        }
    }
}