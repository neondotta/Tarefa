<?php
	require_once '../inc/inc.autoload.php';

	$tpl = new TemplatePower('../tpl/_master.htm');

	$tpl->assignInclude('content', '../tpl/admin.htm');

	$tpl->prepare;

	/**********************************************/

		require_once '../inc/inc.session.php';

		$tpl->assign('log', $SESSION['login']);

	/**********************************************/

		$tpl->printToScreen();
?>