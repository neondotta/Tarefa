<?php
	class Usuario_Tarefa{

		private $usuario_matricula;
		private $tarefa_codTarefa;


		public function Usuario_Tarefa(){

			//vazio

		}

	
    /**
     * Gets the value of usuario_matricula.
     *
     * @return mixed
     */
    public function getUsuario_matricula()
    {
        return $this->usuario_matricula;
    }
    
    /**
     * Sets the value of usuario_matricula.
     *
     * @param mixed $usuario_matricula the usuario_matricula
     *
     * @return self
     */
    public function setUsuario_matricula($usuario_matricula)
    {
        $this->usuario_matricula = $usuario_matricula;

        return $this;
    }

    /**
     * Gets the value of tarefa_codTarefa.
     *
     * @return mixed
     */
    public function getTarefa_codTarefa()
    {
        return $this->tarefa_codTarefa;
    }
    
    /**
     * Sets the value of tarefa_codTarefa.
     *
     * @param mixed $tarefa_codTarefa the tarefa_cod tarefa
     *
     * @return self
     */
    public function setTarefa_codTarefa($tarefa_codTarefa)
    {
        $this->tarefa_codTarefa = $tarefa_codTarefa;

        return $this;
    }
}


?>