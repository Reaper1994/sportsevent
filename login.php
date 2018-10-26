<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
	<link rel="stylesheet" href="css/login_style.css">


</head>
<body>

	<h2 style="text-align: center">Admin Login Page</h2>
	<hr>
	<form action="authenticate.php" method="post">
    <input type="text" name="username" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Submit">

</form>

</body>
</html>