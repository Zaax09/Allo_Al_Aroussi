<!DOCTYPE html>
<html>
<head>
	<title>اشتراك</title>
	<link rel="stylesheet" type="text/css" href="./CSS/Login.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>اشتراك</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>اسم</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="أدخل أسمك"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="أدخل أسمك"><br>
          <?php }?>

          <label>اسم االمستخدم</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="أدخل اسم المستخدم"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="أدخل اسم المستخدم"><br>
          <?php }?>


     	<label>كلمة المرور</label>
     	<input type="password" 
                 name="password" 
                 placeholder="كلمة المرور"><br>

          <label>إعادة كلمة المرور</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="إعادة كلمة المرور"><br>

     	<button style="background-color: #ac0101;"type="submit">اشتراك</button>
          <a style="color: #ac0101;
		  			font-size: 18px;
		  " href="Login.php" class="ca">هل لديك حساب؟</a>
     </form>
</body>
</html>