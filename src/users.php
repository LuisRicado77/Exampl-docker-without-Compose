<?php
	include 'bd.php';

	if($_SERVER['REQUEST_METHOD'] === 'POST'){
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$conexion->query("INSERT INTO USERS (nombre,email) VALUES ('$nombre','$email')");
		header("Location: index.php");
	}

?>

<h1>Add User</h1>

<form method="POST">
	<input type="text" name="nombre" placeholder="nombre" required>
	<input type="email" name="email" placeholder="email" required>
	<button type="submit">Save</button>
</form>