<?php
	require_once '../inc/inc.autoload.php';

	$tpl = new TemplatePower('../tpl/_master.htm');

	$tpl->assignInclude('content','../tpl/tarefa-lista.htm');

	$tpl->prepare();

	/**********************************/

	$dao = new TarefaDAO();

	$vet = $dao->lista();

	$num = count($vet);

	for($i=0;$i<$num;$i++){

		$trf = $vet[$i];

		$cta = $trf->getCodTarefa();
		$tit = $trf->getTitulo();
		$sta = $trf->getStatus();
		$cri = $trf->getCriticidade();
		$tar = $trf->getTarefa();

		$tpl->newBlock('tarefas');

		$tpl->assign('tit', $tit);
		$tpl->assign('sta', $sta);
		$tpl->assign('cri', $cri);
		$tpl->assign('tar', $tar);

	}

	/**********************************/

	$tpl->printToScreen();

?>