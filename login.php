<?php include('db.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>

</head>
<body >
	<div class="header">
		<h2>Login_Page</h2>
	</div>


<div class="enter">
  <form method="post" action="login.php">
     <?php include('weberrors.php'); ?>
     <div class="input">
     <label>Username</label>
   <input type="text" name="username"  value="<?php echo $username; ?>">
         </div>

           <div class="input">
     <label>Password</label>
   <input type="password" name="password"  value="<?php echo $password; ?>">
   </div>

     <button type="submit" class="btn" name="login">Login</button>

     <p>
       Not have acount?<a href="webhtml2.php">Sign_Up</a>
 </p>
</form>
</div>

</body>
</html>
