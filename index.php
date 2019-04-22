<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body class="login">

<form class="login-form" action="proses.php?a=login" method="post">
<div id="tabel" align="center">
<div class="tabelcontainer">
	<h1 class="login-title">Login</h1>
	<label>Username</label><br/><br/>
	<input class="login-input" type="text" placeholder=" Username " maxlength="20" name="username" required></input><br/><br/>
	<label>Password</label><br/><br/>
	<input class="login-input" type="password" placeholder=" Password " maxlength="10" name="password" required></input><br/><br/><BR/>
	<button class="login-button" type="submit">Login</button>

	</div></div>
	</form>	
</body>
</html>