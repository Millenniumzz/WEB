<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>KaKao login</title>
</head>
<body>
    <div class="container-mt-5" >
    <h1 style="text-align:center;" class="mt-3">Webboard KaKao</h1>
    <?php include "navbar.php" ?>
    </div>
    <div class="container-lg" >
            <?php 
            if(isset($_SESSION['error'])){
            echo "<div class='alert alert-danger mt-3 mx-auto' style='max-width: 400px;' role='alert'>
                ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง!
            </div>";
            }
            unset($_SESSION['error']);
            ?>

        </div>

        <div class="card mx-auto" style="margin:20px; width: 40rem;">
            <div class="card-header">เข้าสู่ระบบ</div>
            <div class="card-body">
                <form action="verify.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="card-text">Login:</label>
                        <input type="text" class="form-control mt-3" id="login" name="login">
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="card-text">Password:</label>
                        <input type="password" class="form-control mt-3" id="pwd" name="pwd">
                    </div>
                    <div class="mt-3 d-flex justify-content-center">    
                        <button type="submit" class="btn btn-success me-3" style>Login</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <p style="text-align: center;"><?php echo "ถ้ายังไม่ได้เป็นสมาชิก<a href=register.php>กรุณาสมัครสมาชิก</a>" ?></p>
    <?php if(isset($_SESSION['id'])){header("Location:index.php");die();}?>
</body>
</html> 
<!--<form action="verify.php" method="post">
            <table style="border: 2px solid black; width: 40%;" align="center">
                <tr ><td colspan="2" style="background-color:#6CD2FE;">เข้าสู่ระบบ</td></tr>
                <tr><td>login</td><td><input type="text" name="user"/> <br></td></tr>
                <tr><td> Password</td><td><input type="password" name="pass"/></td></tr>  
                <tr ><td colspan="2" align="center"><input type="submit"value="login"/></td></tr>
            </table>
        </form>-->