<?php
    require_once "start.php";
    $article=getArticle($_GET["id"]);
    $id=$article["id"];
    $title=$article["title"];
    $full_text=$article["full_text"];
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title;?></title>
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
                    <table cellpadding="0" cessspacing="0" id="content">
                        <tr>
                            <td>
                                <?php
                                    require_once "blocks/full_article.php";
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