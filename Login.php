<!DOCTYPE html>
<html>
<head>
	<title>تسجيل الدخول</title>
	<link rel="stylesheet" type="text/css" href="CSS/Login.css">
</head>

<body>

        <div class="login">
                <form  action="Login-Code.php" method="post">
                        <h2>تسجيل الدخول</h2>
                        <?php if (isset($_GET['error'])) { ?>
                            <p class="error"><?php echo $_GET['error']; ?></p>
                        <?php } ?>
                        <label>اسم االمستخدم</label>
                        <input type="text" name="uname" placeholder="اسم االمستخدم"><br>

                        <label>كلمة المرور</label>
                        <input type="password" name="password" placeholder="كلمة المرور"><br>

                        <button class="login-btn" type="submit">تسجيل الدخول</button>

                        <a href="signup.php" class="sign-up-link">انشئ حساب</a>
                        <br><br><br><br>
                        <div class="img-real-estate">

                        </div>
                </form>
        </div>
    
</body>
</html>