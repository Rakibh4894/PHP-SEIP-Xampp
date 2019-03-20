<?php

namespace App\Classes;

class Student
{
 public function saveStudentInfo()
 {
  $link = mysqli_connect('localhost', 'root', '', 'demo');

  $sql = "INSERT INTO demos(name, email, mobile) values ('$_POST[name]', '$_POST[email]', '$_POST[mobile]')";
  if (mysqli_query($link, $sql)) {
   $message = "Student info saved successfully";
   return $message;
  } else {
   die('query problem' . mysqli_error($link));
  }
 }

 public function viewStudentInfo()
 {
  $link = mysqli_connect('localhost', 'root', '', 'demo');

  $sql = "select * from demos";
  if (mysqli_query($link, $sql)) {
   $result = mysqli_query($link, $sql);
   return $result;
  } else {
   die('query problem' . mysqli_error($link));
  }
 }

 public function getStudent($id)
 {
  $link = mysqli_connect('localhost', 'root', '', 'demo');

  $sql = "select * from demos where id='$id'";
  if (mysqli_query($link, $sql)) {
   $result = mysqli_query($link, $sql);
   return $result;
  } else {
   die('query problem' . mysqli_error($link));
  }
 }

 public function updateStudentInfo($id)
 {
  $link = mysqli_connect('localhost', 'root', '', 'demo');

  $sql = "update demos set name='$_POST[name]', email='$_POST[email]', mobile='$_POST[mobile]' where id='$id'";
  if (mysqli_query($link, $sql)) {
   header('Location:viewStudent.php');
  } else {
   die('query problem' . mysqli_error($link));
  }
 }

 public function deleteStudentInfo($id)
 {
  $link = mysqli_connect('localhost', 'root', '', 'demo');

  $sql = "delete from demos where id='$id'";
  if (mysqli_query($link, $sql)) {
   header('Location:viewStudent.php');
  } else {
   die('connection problem' . mysqli_error($link));
  }
 }

 public function searchStudentInfo()
 {
  $link = mysqli_connect('localhost', 'root', '', 'demo');

  $sql = "select * from demos where name like '%$_POST[search_text]%'";
  if (mysqli_query($link, $sql)) {
   $result = mysqli_query($link, $sql);
   return $result;
  } else {
   die('connection problem' . mysqli_error($link));
  }
 }
}

 ?>
