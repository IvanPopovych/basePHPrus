<h2>Додати запис</h2>
<form name="questbook" action="" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td>
                <input type="text" name="name">
            </td>
        </tr>
        <tr>
            <td>Comment:</td>
            <td>
                <input type="text" name="comment">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="button_questbook" value="add"
            </td>
        </tr>
    </table>
</form>
<h2>Записи в гостьовій книзі</h2>
<div>
    <?php
        if(!empty($_POST["button_questbook"])){
            $name = htmlspecialchars($_POST["name"]);
            $comment = htmlspecialchars($_POST["comment"]);
            if((strlen($name)<3) || (strlen($comment)<3)) $success=false;
            else $success=addGuestBookComment($name,$comment);
            if(!$success){
                $alert="Помилка при додаванні нового запису";
                include "alert.php";
            }
        }
        $comments=getAllGuestBookComments();
        for($i=0; $i<count($comments); $i++){
            $name=$comments[$i]["name"];
            $comment=$comments[$i]["comment"];
            include "blocks/questbook_comment.php";
        } 
    ?>
</div>