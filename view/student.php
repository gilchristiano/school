<?php 
class ViewStudent{
		// variáveis locais
		private $name = $outdata[1];
		private $surname = $outdata[2];
		private $CPF = $outdata[3];
		private $RG = $outdata[4];
		private $blood = $outdata[5];
		private $membership = $outdata[6];
		private $dateOfBirth = $outdata[7]
	// Construtor para student
	function __construct($outdata){
		$this->name = $outdata[1];
		$this->surname = $outdata[2];
		$this->CPF = $outdata[3];
		$this->RG = $outdata[4];
		$this->blood = $outdata[5];
		$this->membership = $outdata[6]
		$this->dateOfBirth = $outdata[7]
	}
	// Visualiza aluno - View Student
	public function ViewStudent(){
		echo "Nome: $this->name $this->surname" <br />"; 
		echo "CPF: ".$this->CPF;."<br />"; 
		echo "RG: ".$this->RG."<br />"; 
		echo "Tipo sanguíneo: "$this->blood."<br />"; 
		echo "Filiação: ".$this->membership."<br />"; 
		echo "Data de nascimento: ".$this->dateOfBirth."<br />";
	}
}
?>