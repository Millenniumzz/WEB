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
    หมวดหมู่ :
        <select name="learn">
            <option value="all">--ทั้งหมด--</option>
            <option value="general">เรื่องทั้วไป</option>
            <option value="study">เรื่องเรียน</option>
        </select>
        <?php
        session_start()
        if(!isset($_SESSION['user'])){
            echo "<a href=login.php style=float:right;>เข้าสู่ระบบ</a>";
        }else{  
        echo ผู้ใช้งานระบบ:$_SESSION["user"]"<a href=login.html style=float:right;>ออกจากระบบ</a>";
        }
        ?>
        <ul>
            <?php
                for($k=1;$k<=10;$k++)
                {
                    echo "<li><a href=post.php?id=$k>กระทู้ที่ $k</a></li>";
                }              
            ?>
        </ul>
    
</body>
</html>