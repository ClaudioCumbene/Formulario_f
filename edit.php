<?php 

$id= $_GET[$id];
$user= $db-> prepare(" ");
$user->bindparom('p',$id);
$user-> execute;
$u= $user -> Fetch(PDO::FETCH_OBJ);

$nome=$u->nome;
