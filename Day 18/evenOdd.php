<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop - PH
 * Date: 3/11/2019
 * Time: 9:58 AM
 */
require_once "./Demo.php";
$demo = new Demo();
$res = $demo->makeOddEven();
?>
<form action="" method="post">
    <table>
        <tr>
            <td>First Number</td>
            <td><input type="text" name="first_number" value="<?php echo $_POST['first_number']?>"></td>
        </tr>
        <tr>
            <td>Last Number</td>
            <td><input type="text" name="last_number" value="<?php echo $_POST['last_number']?>"></td>
        </tr>
        <tr>
            <td>Show</td>
            <td>
                <input type="radio" name="check"
                    <?php if (isset($_POST['check'])&& $_POST['check'] == "EVEN"){
                        echo "checked";} ?> value="EVEN">Even
                <input type="radio" name="check" <?php if (isset($_POST['check'])&& $_POST['check'] == "ODD"){
                    echo "checked";} ?> value="ODD">Odd

            </td>
        </tr>

        <tr>
            <td>Result</td>
            <td><textarea rows="5" cols="20" name="result" ><?php echo $res;?></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" value="submit" name="btn">
            </td>

        </tr>

    </table>
</form>