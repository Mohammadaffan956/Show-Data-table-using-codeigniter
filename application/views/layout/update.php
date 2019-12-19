<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
	<h1>Update Data</h1>
	<?php 
		foreach($info as $data)
		$id = $data->User_id;
	 ?>
	<?= form_open("mycontroller/updatedata/$id"); ?>
		<input type="text" name="User_Name" value="<?= $data->User_Name ?>" placeholder="User Name"><br><br>
		<input type="email" name="User_Email" value="<?= $data->User_Email ?>" placeholder="Email Address"><br><br>
		<input type="password" name="User_Password" value="<?= $data->User_Password ?>" placeholder="User_Password"><br><br>
		<button class="btn btn-primary">Update</button>
	<?= form_close(); ?>

</body>
</html>