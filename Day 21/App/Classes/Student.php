<?php

namespace App\Classes;

class Student
{
 public  function saveStudentInfo(){
  $link = mysqli_connect('localhost', 'root', '', 'demo');

  $sql = "INSERT INTO demos(name, email, mobile) values ('$_POST[name]', '$_POST[email]', '$_POST[mobile]')";
  if(mysqli_query($link, $sql)){
   $message = "Student info saved successfully";
   return $message;
  }
  else{
   die('query problem'.mysqli_error($link));
  }
 }

 public function viewStudentInfo(){
  $link = mysqli_connect('localhost', 'root', '', 'demo');

  $sql = "select * from demos";
  if(mysqli_query($link, $sql)){
   $result = mysqli_query($link, $sql);
   return $result;
  }
  else{
   die('query problem'.mysqli_error($link));
  }
 }

 public function getStudent($id){
  $link = mysqli_connect('localhost', 'root', '', 'demo');

  $sql = "select * from demos where id='$id'";
  if(mysqli_query($link, $sql)){
   $result = mysqli_query($link, $sql);
   return $result;
  }
  else{
   die('query problem'.mysqli_error($link));
  }
 }
}

 ?>
