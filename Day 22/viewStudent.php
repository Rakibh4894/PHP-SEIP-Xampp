<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/18/2019
 * Time: 11:48 AM
 */
    require_once "vendor/autoload.php";
    use App\Classes\Student;

    $student = new Student();
    $result = $student->viewStudentInfo();

    //$message = '';
    if (isset($_GET['status'])){
        $id = $_GET['id'];
        $message = $student->deleteStudentInfo($id);
    }

    if (isset($_POST['btn'])){
        $student = new Student();
        $result = $student->searchStudentInfo();
    }


?>
<!--<h2 style="color:red;"><?php /*echo $message;*/?></h2>-->

<table border="1">
    <tr>
        <td><a href="view.php">Add Student</a></td>
        <td><a href="viewStudent.php">View Student</a></td>
    </tr>
</table>

<hr>
<form action="" method="post">
    <table>
        <tr>
            <td>Search:</td>
            <td><input type="text" name="search_text"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="search"></td>
        </tr>

    </table>
</form>

<table border="1" width="500">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Action</th>
    </tr>
    <?php
        while ($student = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td><?php echo $student['id'];?></td>
            <td><?php echo $student['name'];?></td>
            <td><?php echo $student['email'];?></td>
            <td><?php echo $student['mobile'];?></td>
            <td>
                <a href="editStudent.php?id=<?php echo $student['id'];?>">Edit || </a>
                <a href="?status=delete&id=<?php echo $student['id'];?>" onclick="return confirm('Are you sure to delete this data?');">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>
