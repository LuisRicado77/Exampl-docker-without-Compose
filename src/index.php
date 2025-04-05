<?php
include 'bd.php';

$resultado = $conexion->query("SELECT * FROM USERS");

?>


<h1>Users</h1>

<ul>
	<?php while ($fila = $resultado->fetch_assoc()):?>
		<li><?= $fila['nombre']?> (<?= $fila['email']?>)</li>
	<?php endwhile;?>	

	
</ul>

<a href="users.php">Add Users</a>