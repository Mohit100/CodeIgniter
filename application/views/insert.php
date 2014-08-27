<html>
<head>
<body>
<?php echo $msg; ?>
<form action=<?php echo base_url()."index.php/home/insert"?> method ="POST">
	Name<input type="text" name='name' required><br>
	Email<input type="text" name='email' required><br>
	Status<input type="text" name='status' required><br>
	<input type="submit" name="insert" value="insert">
</form>
</body>
</head>
</html>