<html>
<head>
<body>
<?php echo $msg; ?>
<form action=<?php echo base_url()."index.php/home/update"?> method ="POST">
	id<input type="text" name='id' required><br>
	Name<input type="text" name='name' required><br>
	Email<input type="text" name='email' required><br>
	Status<input type="text" name='status' required><br>
	<input type="submit" name="update" value="update">
</form>
</body>
</head>
</html>