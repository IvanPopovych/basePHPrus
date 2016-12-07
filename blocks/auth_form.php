<?php
    if ($_SESSION["error_auth"]){
        unset($_SESSION["error_auth"]);
        $alert = "Невірні імейл та/або пароль";
        include "alert.php";
    }
?>

<form name="auth" action="auth.php" method="post">
    <table>
        <tr>
            <td>Email: </td>
            <td>
                <input type="text" name="email">
            </td>
            <td>Password: </td>
            <td>
                <input type="password" name="password">
            </td>
        </tr>
        <tr>
            <td colspan="4">
               <input type="submit" name="button_auth" value="Ввійти" 
            </td>
        </tr>
    </table>
</form>