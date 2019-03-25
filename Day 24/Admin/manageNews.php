<?php
session_start();
if($_SESSION == null){
    header('Location:Login.php');
}

require_once "../vendor/autoload.php";
use App\classes\Login;

$login = new Login();

if (isset($_GET['logout'])){
    $login->adminLogout();
}

/*use App\classes\Student;

$message='';
if(isset($_POST['btn'])){
    $student = new Student();
    $message = $student->saveStudentInfo();
}*/

?>

    <html>
<head>
    <title>Manage News</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
<?php include 'include/menu.php';?>
<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-md-8 mr-auto">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Sl No.</th>
                            <th>News Title</th>
                            <th>News Description</th>
                            <th>Publicatipon Status</th>
                            <th>Action</th>
                        </tr>

                        <tr>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
    </html><?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/25/2019
 * Time: 10:46 AM
 */