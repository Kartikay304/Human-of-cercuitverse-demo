<?php
$host="localhost";
$user="host";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
	$uname=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from loginform where user='".$uname."' AND Pass='".$password."'limit 1 ";

	$result=mysql_query($sql);

	if(mysql_num_rows($result)==1){
		echo "You have successfully logged in";
		exit();
	}
	else{
		echo "You have Enetred INcorrent Password";
		exit();
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Admin-Login</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="top">
			<h1 id="title" class="hidden"><span id="logo">Circuit<span>Verse</span></span></h1>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<form method="$POST" action="#">
			<label for="username" >Username</label>
			<br>
			<input type="text" id="username" placeholder="Email address" required>
			<br>
			<label for="password">Password</label>
			<br>
			<input type="password" id="password" placeholder="Password" required>
			<br>
			<button type="submit">Submit</button>
			<br>
		  </form>
		</div>
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>

</html>