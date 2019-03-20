<?php
require_once "vendor/autoload.php";
use App\Classes\student;

$id = $_GET['id'];
$student = new Student();
$result = $student->getStudent($id);
$student = mysqli_fetch_assoc($result);

if (isset($_POST['btn'])){
    $student = new Student();
    $student->updateStudentInfo($id);
}
?>

    <table border="1">
        <tr>
            <td><a href="view.php">Add Student</a></td>
            <td><a href="viewStudent.php">View Student</a></td>
        </tr>
    </table>

    <form action="" method="post">

    <table>
        <tr>
            <td>name</td>
            <td><input type="text" name="name" value="<?php echo $student['name']?>"> </td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="text" name="email" value="<?php echo $student['email']?>"> </td>
        </tr>
        <tr>
            <td>phone</td>
            <td><input type="text" name="mobile" value="<?php echo $student['mobile']?>"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Update"> </td>
        </tr>
    </table>
    </form><?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/18/2019
 * Time: 12:40 PM
 */