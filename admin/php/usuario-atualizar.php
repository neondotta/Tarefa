<?php
	require_once 'inc/inc.autoload.php';

	$tpl-> new TemplatePower('../tpl/_master.php');

	$tpl->assignInclude('content','../tpl/usuario-atualizar.htm');

	$tpl->prepare();

	/********************************************************/

		require_once '../inc/inc.session.php';

		$tpl->assign('log', $_SESSION['login']);

		$dao = new UsuarioDAO();

		$mat = $_REQUEST['mat'];

		$vet = $dao->listaUm($mat);

		$usu = $vet[0];

		$mat = $usu->getMatricula();
		$nom = $usu->getNome();
		$niv = $usu->getNivel();
		$sen = $usu->getSenha();
		$ati = $usu->getAtivo();

		$tpl->('mat',$mat);
		$tpl->('nom',$nom);
		$tpl->('niv',$niv);
		$tpl->('sen',$sen);
		$tpl->('ati',$ati);
	/********************************************************/

	$tpl->printToScreen();


?>