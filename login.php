<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KaKao login</title>
</head>
<body>
    <h1 style="text-align:center;">Webboard KaKao</h1>
    <hr>
    <form action="verify.php" method="post">
        <table style="border: 2px solid black; width: 40%;" align="center">
            <tr ><td colspan="2" style="background-color:#6CD2FE;">เข้าสู่ระบบ</td></tr>
            <tr><td>login</td><td><input type="text" name="user"/> <br></td></tr>
            <tr><td> Password</td><td><input type="password" name="pass"/></td></tr>  
            <tr ><td colspan="2" align="center"><input type="submit"value="login"/></td></tr>
        </table>
    </form>
    <br>
    <p style="text-align: center;"><?php echo "ถ้ายังไม่ได้เป็นสมาชิก<a href=resgister.php>กรุณาสมัครสมาชิก</a>" ?></p>
    <?php if(isset($_SESSION['id'])){header("Location:index.php");die();}?>
</body>
</html> 