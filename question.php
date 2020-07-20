<!DOCTYPE html>
<html>
<head>
	<title>Limited Hustle Data</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="short icon" href="../img/a.jpg">
</head>
<style type="text/css">
	.container{
		text-align: center;
	}
</style>
<body>
	<div class="container">
		<?php
			$myfile = fopen("question/list.txt", "r") or die("Unable to open file!");
			$data= fread($myfile,filesize("question/list.txt"));
			echo $data;
		?>
	</div>
	<form class="text-center border border-light p-5" action=""  method="post">
		<button class="btn btn-info btn-block" type="submit" name="submit">Delete</button>
	</form>
</body>
</html>

<?php
	if(isset($_POST['submit'])){
		$myfile = fopen("question/list.txt", "w") or die("Unable to open file!");
		$a="Data: ";
		fwrite($myfile,$a);
		fclose($myfile);
	}

?>