<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/9/2019
 * Time: 12:24 PM
 */

class MyCal
{
    function cal($data){
        $btn = $data['btn'];
        switch ($btn){
            case '+':
                $result = $data['firstNumber'] + $data['lastNumber'];
                break;
            case '-':
                $result = $data['firstNumber'] - $data['lastNumber'];
                break;
            case '*':
                $result = $data['firstNumber'] * $data['lastNumber'];
                break;
            case '/':
                $result = $data['firstNumber'] / $data['lastNumber'];
                break;
            case '%':
                $result = $data['firstNumber'] % $data['lastNumber'];
                break;

        }
        return $result;
    }
}