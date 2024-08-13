<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaKao</title>
</head>
<body>
    <h1 style="text-align:center;">Webboard KaKao</h1>
    <hr>
    <?php
        if(isset($_SESSION['id'])){
            echo "<p>ผู้ใช้ : $_SESSION[user]</p>";?>
            <table>
                    <tr><td>หมวดหมู่ :</td><td><select name="learn">
                    <option value=general>เรื่องทั่วไป</option>
                    <option value=study>เรื่องเรียน</option>
                    </select></td></tr>
                    <tr><td>หัวข้อ :</td><td><input type= text name= header></td></tr>
                    <tr><td>เนื้อหา :</td><td><textarea name=detail></textarea></td></tr>
                    <tr><td></td><td><input type=submit value=บันทึกข้อความ></td></tr>
            </table>
            <?php
        }
        else{
            header("Location:index.php");
            die();
        }
        ?>
</body>
</html>