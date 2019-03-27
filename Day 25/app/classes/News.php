<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/25/2019
 * Time: 12:32 PM
 */

namespace App\classes;
use App\classes\Connection;


class News
{
    public function saveNewsInfo(){
        $fileName = $_FILES['news_image']['name'];
        $directory = "../assets/images/";
        $imageUrl = $directory . $fileName;
        //move_uploaded_file($_FILES['imageFile']['tmp_name'], $imageUrl);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $check = getimagesize($_FILES['news_image']['tmp_name']);

        if ($check) {
            if (file_exists($imageUrl)) {
                die('Image file already exists. Please upload a new one');
            } else {
                if ($_FILES['news_image']['size'] > 1000000) {
                    die('File is too large. Please upload a image within 30kb');
                } else {
                    if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'JPG' && $fileType != 'PNG') {
                        die('Image format does not support');
                    } else {
                        move_uploaded_file($_FILES['news_image']['tmp_name'], $imageUrl);

                        $sql = "INSERT INTO news(news_title, news_description, news_image, status)
                                VALUES ('$_POST[news_title]', '$_POST[news_description]', '$imageUrl', '$_POST[status]')";

                        if (mysqli_query(Connection:: dbConnection(), $sql)){
                            $message = "News info saved successfully";
                            return $message;
                        }else{
                            die('Query problem'.mysqli_error(Connection::dbConnection()));
                        }

                        //echo "Image uploaded and saved successfully";
                    }
                }
            }
        } /*else {
            die('Please upload a image file');
        }*/


    }

    public function selectNewsInfo(){
        $sql = "select * from news";
        if (mysqli_query(Connection:: dbConnection(), $sql)){
            $result = mysqli_query(Connection:: dbConnection(), $sql);
            return $result;
        }else{
            die('Query problem'.mysqli_error(Connection::dbConnection()));
        }
    }

    public function allPublishedNews(){
        $sql = "select * from news where status = 0";
        if (mysqli_query(Connection:: dbConnection(), $sql)){
            $result = mysqli_query(Connection:: dbConnection(), $sql);
            return $result;
        }else{
            die('Query problem'.mysqli_error(Connection::dbConnection()));
        }
    }
}