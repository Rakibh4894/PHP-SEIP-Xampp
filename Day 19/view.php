<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/13/2019
 * Time: 9:45 AM
 */
require_once "./Addition.php";
$add = new Addition();
$result = $add->addNumber();
?>

<form action="" method="post">
    <table>
        <tr>
            <td>First Number</td>
            <td><input type="text" name="1stNumber"></td>
        </tr>
        <tr>
            <td>Second Number</td>
            <td><input type="text" name="2ndNumber"></td>
        </tr>
        <tr>
            <td>Third Number</td>
            <td><input type="text" name="3rdNumber"></td>
        </tr>
        <tr>
            <td>Fourth Number</td>
            <td><input type="text" name="4thNumber"></td>
        </tr>
        <tr>
            <td>Fifth Number</td>
            <td><input type="text" name="5thNumber"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="submit" name="btn">
            </td>
        </tr>

    </table>
</form>

<table border="1" width="600px" height="100px" align="center">
    <tr>
        <th width="100px" height="50px">1st Number</th>
        <th width="100px">2nd Number</th>
        <th width="100px">3rd Number</th>
        <th width="100px">4th Number</th>
        <th width="100px">5th Number</th>
        <th>Total</th>
    </tr>
    <tr align="center">
        <td width="100px"><?php echo $_POST['1stNumber']?></td>
        <td width="100px"><?php echo $_POST['2ndNumber']?></td>
        <td width="100px"><?php echo $_POST['3rdNumber']?></td>
        <td width="100px"><?php echo $_POST['4thNumber']?></td>
        <td width="100px"><?php echo $_POST['5thNumber']?></td>
        <td><?php echo $result;?></td>
    </tr>
</table>