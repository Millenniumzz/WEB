<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>KaKao resgister</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr>
    <table style="border: 2px solid black;"width=40% ; align="center">
        <tr><td colspan="2" style="background-color: #6CD2FE">กรอกข้อมูล<td></tr>
        <tr><td>ชื่อบัญชี:</td><td><input type="text" name="user"></td></tr>
        <tr><td>รหัสผ่าน:</td><td><input type="password" name="pass"></td></tr>
        <tr><td>ชื่อ-นามสกุล:</td><td><input type="text" name="namesur"></td></tr>
        <tr><td rowspan="3">เพศ:</td><td><input type="radio" name="man">ชาย</td></tr>
        <tr><td><input type="radio" name="women">หญิง</td></tr>
        <tr><td><input type="radio" name="else">อื่นๆ</td><td></tr>
        <tr><td>email:</td><td><input type="text" name="email"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit"value="submit"></td>
    </table>
    <p style="text-align: center;"><?php echo "<a href=index.php>back to page</a>"?></p>
    <?php if(isset($_SESSION['id'])){header("Location:index.php");die();}?>
</body>
</html>