<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Login</h1>
	<form method="post" action="login.php"> 
		<input type="text" name="txtuname" placeholder= "Username">
		<input type="password" name="txtpword" placeholder= "Password">
		<button type="submit" name="login" value="login">Login</button>
	</form>
<h1>Sign-Up</h1>
	
	<form method="post" action="signup.php"> 
		<input type="text" name="txtuname1" placeholder= "Username">
		<input type="password" name="txtpword1" placeholder= "Password" >
		<button type="submit" name="signup" value="login">Sign-Up</button>
	</form>
<style>
<form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
body {
background-image: url("https://ak2.picdn.net/shutterstock/videos/4039345/thumb/1.jpg");
}

button {
    background-color: #FFB6C1;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}
</style>	

 <footer><center>
     Basic Log-in|| All Rights Reserved 2017
    </footer></center>
	
</body>
</html>