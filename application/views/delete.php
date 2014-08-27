<html>
<head>
<body>
<?php echo $msg; ?>
<form action=<?php echo base_url()."index.php/home/delete"?> method ="POST">
	Id<input type="text" name='id' required><br>
	<input type="submit" name="delete" value="delete">
	</form>
	</body>
	</head>
	</html>