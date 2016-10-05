<?php



class ia{

	private $columna=1;
	private $fila=1;

	
	public function getColumna(){
		$this->columna=rand(0,3);
		return $this->columna;
	}

	public function getFila(){
		$this->fila=rand(0,3);
		return $this->fila;
	}


}
?>