<?php 
	require_once 'db-config.php';
	$q="insert into utilizador (nome, email, perfil, username, password) values (?,?,?,?,?)";
	$stmt = $db->prepare($q);
	$stmt->bindParam(1, $nome);
	$stmt->bindParam(2, $email);
	$stmt->bindParam(3, $perfil);
	$stmt->bindParam(4, $username);
	$stmt->bindParam(5, $password);

	$nome=$_POST['nome'];
	$perfil=$_POST['perfil'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];

	if ($stmt->execute()) {
		header("Location:index.php");
	}

	

 ?>
 <p>Colorado</p>

 <p>Fim</p>