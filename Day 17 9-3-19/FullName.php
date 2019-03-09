<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/9/2019
 * Time: 10:28 AM
 */
    //echo isset($x);
    /*if (isset($_POST['btn'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $fullName = $firstName." ".$lastName;
        echo $fullName;
    }*/

    if (isset($_POST['btn'])){
        require_once './Name.php';
        $name = new Name;
        $result = $name->makeFullName($_POST['firstName'],$_POST['lastName']);
    }
?>

<form action="" method="post">
	<table>
		<tr>
			<td>First Name</td>
			<td><input type="text" name="firstName"></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text" name="lastName"></td>
		</tr>
		<tr>
			<td>Full Name</td>
			<td><input type="text" name="fullName" value="<?php echo $result;?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" value="submit" name="btn"></td>
		</tr>

	</table>
</form>

