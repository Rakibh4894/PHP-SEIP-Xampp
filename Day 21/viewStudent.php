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
?>

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
                <a href="deleteStudent.php">Delete</a>
            </td>
        </tr>
    <?php
    }
    ?>

</table>
