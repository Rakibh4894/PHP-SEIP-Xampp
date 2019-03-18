<?php
require_once "vendor/autoload.php";
use App\Classes\student;

$message = '';
if(isset($_POST['btn'])){
    $student = new Student();
    $message = $student->saveStudentInfo($_POST);
}
?>

<table border="1">
    <tr>
        <td><a href="view.php">Add Student</a></td>
        <td><a href="viewStudent.php">View Student</a></td>
    </tr>
</table>

<form action="" method="post">
    <h1><?php echo $message;?></h1>
    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value=""> </td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email" value=""> </td>
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="text" name="mobile" value=""> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"> </td>
        </tr>
    </table>
</form>