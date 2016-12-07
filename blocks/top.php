<tr>
    <td colspan="2" id="header">
        <h1>Сайт про автомобілі</h1>
        <p>
            <img src="images/header.png" alt="hat"> 
        </p>
    </td>
</tr>
<tr>
    <td colspan="2">
        <hr />
    </td>
</tr>
<tr>
    <td>
        <table id="topmenu">
            <tr>
                <td>
                    <a href="index.php">Головна</a>
                </td>
                <td>
                    <a href="reg.php">Реєстрація</a>
                </td>
                <td>
                    <a href="articles.php">Статті</a>
                </td>
                <td>
                    <a href="questbook.php">Гостьова книга</a>
                </td>
            </tr>
        </table>
    </td>
    <td class="right">
        <?php
            if (checkUser($_SESSION["email"], $_SESSION["password"] )) 
                require_once "blocks/user_panel.php";
            else require_once "blocks/auth_form.php"; 
        ?>
        
    </td>
</tr>
<tr>
    <td colspan="2">
        <hr />
    </td>
</tr>