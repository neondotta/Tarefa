<?php
	require_once '../inc/inc.session.php';
	require_once '../inc/inc.autoload.php';

	$act = $_REQUEST['act'];

	switch($act){

		case 'inserir':

			$mat = $_POST['matricula'];
			$nom = $_POST['nome'];
			$niv = $_POST['nivel'];
			$sen = $_POST['senha'];
			$ati = $_POST['ativo'];

			$usu = new Usuario();

			$usu->setMatricula($mat);
			$usu->setNome($nom);
			$usu->setNivel($niv);
			$usu->setSenha($sen);
			$usu->setAtivo($ati);

			$dao = new UsuarioDAO();

			$dao->cadastrar($usu);
	
		break;
		case 'atualizar':

			$mat = $_REQUEST['matricula'];
			$nom = $_REQUEST['nome'];
			$niv = $_REQUEST['nivel'];
			$sen = $_REQUEST['senha'];
			$ati = $_REQUEST['ativo'];
	
			$usu = new Usuario();

			$usu->setMatricula($mat);
			$usu->setNome($nom);
			$usu->setNivel($niv);
			$usu->setSenha($sen);
			$usu->setAtivo($ati);

			$dao = new UsuarioDAO();

			$dao->cadastrar($usu);
	
		break;
		case 'deletar':

			$mat = $_REQUEST['mat'];

			$mat = new Usuario();

			$usu->setMatricula($mat);

			$dao = new UsuarioDAO();

			$dao->deletar($usu);

			header("Location: usuario-lista.php");

		break;

	}

?>