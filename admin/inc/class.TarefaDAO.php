<?php
	require_once '../inc/inc.autoload.php';

	Class TarefaDAO{

		private $dba;

		public function TarefaDAO(){

			$dba = new DbAdmin('mysql');

			$dba->connect('localhost', 'root', '', 'tarefa');

			$this->dba = $dba;
		}

		public function lista(){

			$dba = $this->dba;

			$vet = array();

			$sql = 'SELECT * FROM tarefa';

			$res = $dba->query($sql);

			$num = $dba->rows($res);

			for($i=0; $i<num; $i++){

				$cta = dba->result($res, $i, 'codTarefa');
				$tit = dba->result($res, $i, 'titulo');
				$sta = dba->result($res, $i, 'status');
				$cri = dba->result($res, $i, 'criticidade');
				$tar = dba->result($res, $i, 'tarefa');

				$trf = new Tarefa();

				$trf->setCodTarefa($cta);
				$trf->setTitulo($tit);
				$trf->setStatus($sta);
				$trf->setCriticidade($cri);
				$trf->setTarefa($tar);

				$vet[i] = $trf;

			}

			return $trf;

		}

		public function cadastrar($trf){

			$dba = $this->dba;

			$cta = $trf->getCodTarefa();
			$tit = $trf->getTitulo();
			$sta = $trf->getStatus();
			$cri = $trf->getCriticidade();
			$tar = $trf->getTarefa();

			$sql = 'INSERT INTO tarefa(titulo, status, criticidade, tarefa)
					VALUES ("'.$tit.'","'.$sta.'","'.$cri.'","'.$tar.'")';

			$dba->query($sql);

		}

		public function atualizar($trf){

			$dba = $this->dba;

			$cta = $trf->getCodTarefa();
			$tit = $trf->getTitulo();
			$sta = $trf->getStatus();
			$cri = $trf->getCriticidade();
			$tar = $trf->getTarefa();

			$sql = 'UPDATE categoria
					SET titulo 		= "'.$tit.'",
						status 		= "'.$sta.'",
						criticidade = "'.$cri.'",
						tarefa 		= '.$tar.'",
					WHERE codTarefa = '.$cod;

			$dba->query($sql);

		}
		public function deletar($trf){

			$dba = $this->dba;

			$cta = $trf->getCodTarefa();

			$sql = 'DELETE FROM tarefa
					WHERE codTarefa = '.$cta;

			$dba->query($sql);

		}

	}
	

?>