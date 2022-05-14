<!DOCTYPE html>
<html>
<head>
	<title>Login | FreiendsBook</title>
	<link rel="stylesheet" type = "text/css"  href="style.css">    
</head>
<body>
	<h1>FriendsBook</h1>
    <form action="login.php" method="post">
     	<h2>Login</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
        <a href="signup.php" class="ca">Sign up for FriendsBook</a>
    </form>
</body>
</html>     	