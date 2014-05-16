<?php
	class Usuario{

		private $matricula;
		private $nome;
		private $nivel;
		private $senha;
		private $ativo;

		public function Usuario(){

		}

	
    /**
     * Gets the value of matricula.
     *
     * @return mixed
     */
    public function getMatricula()
    {
        return $this->matricula;
    }
    
    /**
     * Sets the value of matricula.
     *
     * @param mixed $matricula the matricula
     *
     * @return self
     */
    public function setMatricula($matricula)
    {
        $this->matricula = $matricula;

        return $this;
    }

    /**
     * Gets the value of nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }
    
    /**
     * Sets the value of nome.
     *
     * @param mixed $nome the nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Gets the value of nivel.
     *
     * @return mixed
     */
    public function getNivel()
    {
        return $this->nivel;
    }
    
    /**
     * Sets the value of nivel.
     *
     * @param mixed $nivel the nivel
     *
     * @return self
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Gets the value of senha.
     *
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }
    
    /**
     * Sets the value of senha.
     *
     * @param mixed $senha the senha
     *
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;

        return $this;
    }

    /**
     * Gets the value of ativo.
     *
     * @return mixed
     */
    public function getAtivo()
    {
        return $this->ativo;
    }
    
    /**
     * Sets the value of ativo.
     *
     * @param mixed $ativo the ativo
     *
     * @return self
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;

        return $this;
    }
}


?>