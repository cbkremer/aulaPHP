<?php
class Usuario{
    //definir atributos
    private $idusuario;
    private $nomeUsuario;
    private $usuario;
    private $senha;

    public function Usuario(){
    }
    
    /**
     * @return mixed
     */
    public function getIdusuario() {
        return $this->idusuario;
    }
	/**
	 * @param mixed $idusuario 
	 * @return self
	 */
	public function setIdusuario($idusuario): self {
		$this->idusuario = $idusuario;
		return $this;
	}


	/**
	 * @return mixed
	 */
	public function getNomeUsuario() {
		return $this->nomeUsuario;
	}
	
	/**
	 * @param mixed $nomeUsuario 
	 * @return self
	 */
	public function setNomeUsuario($nomeUsuario): self {
		$this->nomeUsuario = $nomeUsuario;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getUsuario() {
		return $this->usuario;
	}
	
	/**
	 * @param mixed $usuario 
	 * @return self
	 */
	public function setUsuario($usuario): self {
		$this->usuario = $usuario;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSenha() {
		return $this->senha;
	}
	
	/**
	 * @param mixed $senha 
	 * @return self
	 */
	public function setSenha($senha): self {
		$this->senha = $senha;
		return $this;
	}
}