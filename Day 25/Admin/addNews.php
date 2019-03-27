<?php
session_start();
if($_SESSION == null){
    header('Location:Login.php');
}

require_once "../vendor/autoload.php";
use App\classes\Login;
use App\classes\News;

$message = "";
if (isset($_POST['btn'])){
    $news = new News();
    $message = $news->saveNewsInfo();
}

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
    <title>Add News</title>
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
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-title">
                        <h1>Add news</h1>
                    </div>
                    <div class="card-body">
                        <h1><?php echo $message;?></h1>
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">News Title</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="news_title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">News Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" name="news_description"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">News Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="news_image" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">News Image</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="status">
                                        <option>Select</option>
                                        <option>Published</option>
                                        <option>Unpublished</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <input type="submit" class="btn btn-primary" name="btn">
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>