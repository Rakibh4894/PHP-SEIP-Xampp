<?php
session_start();
if($_SESSION == null){
    header('Location:Login.php');
}

require_once "../vendor/autoload.php";
use App\classes\Login;
use App\classes\News;

$news = new News();
$result = $news->allPublishedNews();

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
        <title>Add Student</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php include 'include/menu.php';?>

        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-title">
                            <div class="lead text-center">All news info</div>
                        </div>
                        <div class="card-body">
                            <?php
                                while ($newsInfo = mysqli_fetch_assoc($result)){
                            ?>
                            <div class="col-lg-12">
                                <h2><?php echo $newsInfo['news_title'];?></h2>
                                <p><?php echo $newsInfo['news_description'];?></p>
                                <img src="<?php echo $newsInfo['news_image'];?>" height="200" width="500">
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!--<table>
    <tr>
        <td><a href="addStudent.php">Add Student</a></td>
        <td><a href="viewStudent.php">View Student</a></td>
        <td><a href="?logout=true">Logout || </a></td>
        <td><a href=""><?php /*echo $_SESSION['name'];*/?></a></td>
    </tr>
</table>
<hr>-->
<!--<form action="" method="POST">
    <h1><?php /*//echo $message; */?></h1>
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Mobile:</td>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>-->
