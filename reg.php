<?php
    require_once "start.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>BasePHP</title>
        <meta charset="utf-8"/>
        <link href="css/style.css" rel="stylesheet"/>
    </head>
    <body>
        <table id="main">
            <?php
                require_once "blocks/top.php";
            ?>
            <tr>
                <td colspan="2">
                    <table cellpadding="0" cellspacing="0" id="content">
                        <tr>
                            <td>
                                <?php
                                    require_once "blocks/reg.php";
                                ?>
                            </td>
                            <td id="banners_240">
                                <?php
                                    require_once "blocks/banners_240.php";
                                ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <?php
                require_once "blocks/footer.php";
            ?>
        </table>
    </body>
</html>