<?php

	class Tarefa{

	private $codTarefa;
	private $titulo;
	private $status;
	private $criticidade;
	private $tarefa;


	public function Tarefa(){


	}

	
    /**
     * Gets the value of codTarefa.
     *
     * @return mixed
     */
    public function getCodTarefa()
    {
        return $this->codTarefa;
    }
    
    /**
     * Sets the value of codTarefa.
     *
     * @param mixed $codTarefa the cod tarefa
     *
     * @return self
     */
    public function setCodTarefa($codTarefa)
    {
        $this->codTarefa = $codTarefa;

        return $this;
    }
    

    /**
     * Gets the value of titulo.
     *
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }
    
    /**
     * Sets the value of titulo.
     *
     * @param mixed $titulo the titulo
     *
     * @return self
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Gets the value of status.
     *
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     * Sets the value of status.
     *
     * @param mixed $status the status
     *
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets the value of criticidade.
     *
     * @return mixed
     */
    public function getCriticidade()
    {
        return $this->criticidade;
    }
    
    /**
     * Sets the value of criticidade.
     *
     * @param mixed $criticidade the criticidade
     *
     * @return self
     */
    public function setCriticidade($criticidade)
    {
        $this->criticidade = $criticidade;

        return $this;
    }

    /**
     * Gets the value of tarefa.
     *
     * @return mixed
     */
    public function getTarefa()
    {
        return $this->tarefa;
    }
    
    /**
     * Sets the value of tarefa.
     *
     * @param mixed $tarefa the tarefa
     *
     * @return self
     */
    public function setTarefa($tarefa)
    {
        $this->tarefa = $tarefa;

        return $this;
    }
}


?>