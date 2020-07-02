<!DOCTYPE html>
<html>
<head>
	<title>Registration Form ~ Limited Hustle</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="short icon" href="../img/a.jpg">
</head>
<body>
	<form class="text-center border border-light p-5" action="" method="post">
	    <p class="h4 mb-4">Limited Hustle Registration Form</p>
	    <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Name" name="name" required>
	    <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="E-mail" name="email" required>
	    <input type="text" id="defaultContactFormDivision" class="form-control mb-4" placeholder="Division" name="division" required>
	    <input type="text" id="defaultContactFormIG" class="form-control mb-4" placeholder="instagram" name="instagram" required>
	    <div class="form-group">
	        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Additional message" name="message"></textarea>
	    </div>
	    <button class="btn btn-info btn-block" type="submit" name="submit">Send</button>
	</form>
	<div class="footer-copyright text-center py-3 fixed-bottom" style="background-color: gray;">Copyright © 2020 Limited Hustle. All rights reserved</div>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$division=$_POST['division'];
		$message=$_POST['message'];
		$instagram=$_POST['instagram'];
		$txt= 'Name: '.$name.' , Email: '.$email.' , Division: '.$division.' , Message: '.$message.' , Instagram: '.$instagram;
		$myfile = fopen("list.txt", "r") or die("Unable to open file!");
		$a= fread($myfile,filesize("list.txt"));
		$myfile = fopen("list.txt", "w") or die("Unable to open file!");
		$txt = nl2br("\n$txt");
		fwrite($myfile,$a);
		fwrite($myfile, $txt);
		fclose($myfile);
		echo "<script>window.location='ty.php'</script>";
	}


?>