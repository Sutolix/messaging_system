<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "DELETE FROM enviadas WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['popup'] = "Apagado com sucesso!";
		header('Location: ../gerenciar.php');
	else:
		$_SESSION['popup'] = "Erro ao apagar";
		header('Location: ../gerenciar.php');
	endif;
endif;