<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>KaKao Register</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <?php include "navbar.php" ?>
    <div class="row mt-3">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <?php
                if (isset($_SESSION['add_login'])) {
                    if ($_SESSION['add_login'] == 'error') {
                        echo "<div class='alert alert-danger'  role='alert'>ชื่อบัญชีนี้ถูกใช้งานแล้ว</div>";
                    } else {
                        echo "<div class='alert alert-success' role='alert'>เพิ่มบัญชีเรียบร้อยแล้ว</div>";
                    }
                    unset($_SESSION['add_login']);
                }
            ?> 
            <div class="card border-primary">
                <div class="card-header bg-primary text-light">เข้าสู่ระบบ</div>
                <div class="card-body">
                    <form action="register_save.php" method="post">
                        <div class="row mb-3">
                            <label for="login" class="col-lg-3 col-form-label">ชื่อบัญชี:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="login" name="login" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="pwd" class="col-lg-3 col-form-label">รหัสผ่าน:</label>
                            <div class="col-lg-9">
                                <input type="password" class="form-control" id="pwd" name="pwd" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-lg-3 col-form-label">ชื่อ-นามสกุล:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="gender" class="col-lg-3 col-form-label">เพศ:</label>
                            <div class="col-lg-9">
                                <div class="form-check">
                                    <input type="radio" name="gender" id="m" value="m" class="form-check-input" required>
                                    <label for="m" class="form-check-label">ชาย</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" id="f" value="f" class="form-check-input" required>
                                    <label for="f" class="form-check-label">หญิง</label>
                                </div>
                                <div class="form-check">
                                    <input type="radio" name="gender" id="o" value="o" class="form-check-input" required>
                                    <label for="o" class="form-check-label">อื่นๆ</label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-lg-3 col-form-label">อีเมล:</label>
                            <div class="col-lg-9">
                                <input type="email" name="email" id="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-9 offset-lg-3">
                                <button type="submit" class="btn btn-primary">สมัครสมาชิก</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <p style="text-align: center;">
        <?php echo "<a href='index.php'>back to page</a>" ?>
    </p>

    <?php if (isset($_SESSION['id'])) { header("Location:index.php"); die(); } ?>
    
</body>
</html>