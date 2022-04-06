<!DOCTYPE html>
<html>
<head>
	<title>تأكيد المسؤول</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>تأكيد المسؤول</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>: اسم المستخدم </label>
     	<input type="text" name="uname" placeholder=" اسم المستخدم"><br>

     	<label> : كلمة المرور</label>
     	<input type="password" name="password" placeholder="كلمة المرور"><br>

     	<button type="submit">متابعة </button>
     </form>
</body>
</html>