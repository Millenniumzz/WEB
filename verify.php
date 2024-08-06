    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>KaKao login</title>
    </head>
    <body>
        <?php
        $name = $_POST['user'];
        $pass = $_POST['pass'];
        ?>
        <h1 style="text-align:center;">Webboard KaKao</h1>
        <hr>
        <div style="text-align: center;">
            <?php
            if ($name== "admin" && $pass== "ad1234"){
                echo "ยินดีต้อนรับ ADMIN <br>";
                echo "<p style=text-align: center;><a href=index.php>back to page</a></p>";
            }
            elseif ($name== "member" && $pass== "mem1234"){
                echo "ยินดีต้อนรับ MEMBER <br>";
                echo "<p style=text-align: center;><a href=index.php>back to page</a></p>";
            }
            else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
                echo "<p style=text-align: center;><a href=index.php>back to page</a></p>";
            }
            ?>
        </div> 
    </body>
    </html>