<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		require_once "db-config.php"; 
		$q="select * from utilizador";
		$stmt=$db->prepare($q);
		$stmt->execute();
		$users=$stmt->fetchAll(PDO::FETCH_OBJ);
	?>
	<p>
		<a href="adicionar.php">Novo Utilizador</a>
	</p>
	<table border="1" width="100%">
		<tr>
			<th>Nome</th>
			<th>Email</th>
			<th>Perfil</th>
			<th>Teste</th>
			
		</tr>

		<?php foreach ($users as $u) {
		?>
		<tr>
			<td><? echo $u->nome; ?></td>
			<td><? echo $u->email; ?></td>
			<td><? echo $u->perfil; ?></td>
			<td>
				<a href="ver?id=<?php echo $u->id; ?>">Ver</a>
				<a href="editar?id=<?php echo $u->id; ?>">Editar</a>
				<a href="apagar?id=<?php echo $u->id; ?>">Apagar</a>
			</td>
		</tr>

		<?php } ?>
	</table>


</body>
</html>