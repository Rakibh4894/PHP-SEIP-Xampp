<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/27/2019
 * Time: 9:57 AM
 */
    //echo '<pre>';
    //print_r($_POST);

$link = mysqli_connect('localhost', 'root', '', 'demo');


if (isset($_POST['btn'])) {

    $directory = "images/";
    $imageUrl = $directory . $_FILES['imageFile']['name'];
    //move_uploaded_file($_FILES['imageFile']['tmp_name'], $imageUrl);
    $fileType = pathinfo($_FILES['imageFile']['name'], PATHINFO_EXTENSION);
    $check = getimagesize($_FILES['imageFile']['tmp_name']);

    if ($check) {
        if (file_exists($imageUrl)) {
            die('Image file already exists. Please upload a new one');
        } else {
            if ($_FILES['imageFile']['size'] > 1000000) {
                die('File is too large. Please upload a image within 30kb');
            } else {
                if ($fileType != 'jpg' && $fileType != 'png' && $fileType != 'JPG' && $fileType                     != 'PNG') {
                    die('Image format does not support');
                } else {
                    move_uploaded_file($_FILES['imageFile']['tmp_name'], $imageUrl);

                    $sql = "insert into images(imageFile) values ('$imageUrl')";
                    mysqli_query($link, $sql);

                    echo "Image uploaded and saved successfully";
                }
            }
        }
    } else {
        die('Please upload a iamge file');
    }
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Select File</td>
            <td><input type="file" name="imageFile"></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>


    </table>
</form>

<?php
    $sql = "select * from images";
    $result = mysqli_query($link, $sql);
?>

<table>
    <?php
        while($row = mysqli_fetch_assoc($result)){?>

    <tr>
        <td><img src="<?php echo $row['imageFile'];?>" height="100" width="100"></td>
    </tr>

    <?php }?>
</table>
