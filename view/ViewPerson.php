<?php 
// classes para visualizações
class Person{
		// variáveis locais em pessoa
protected $name;
protected $surname;
protected $CPF;
protected $RG;
protected $blood;
protected $membership;
protected $dateOfBirth;
	function __construct($outdata){
	$this->name = $outdata[1];
	$this->surname = $outdata[2];
	$this->CPF = $outdata[3];
	$this->RG = $outdata[4];
	$this->blood = $outdata[5];
	$this->membership = $outdata[6];
	$this->dateOfBirth = $outdata[7];
	}
}
// Classe estudante
class ViewStudent extends Person{
	// Construtor para student
	private $code;
	function __construct($outdata){
		parent:: __construct($outdata); // herda os dados comuns
		$this->code = $outdata[0];
	}
	// Visualiza aluno - View Student
	public function ViewStudent(){ // Visualiza estudante
		echo "Código do aluno: ".$this->code."<br />";
		echo "Nome: ".$this->name." ".$this->surname."<br />";
		echo "CPF: ".$this->CPF."<br />"; 
		echo "RG: ".$this->RG."<br />"; 
		echo "Tipo sanguíneo: ".$this->blood."<br />"; 
		echo "Filiação: ".$this->membership."<br />"; 
		echo "Data de nascimento: ".$this->dateOfBirth."<br />";
	}
}
// Classe funcionário
class ViewEmployee extends Person{
	// Construtor para student
	private $code; // registro - código
	private $office; // cargo
	function __construct($outdata){
		parent:: __construct($outdata); // herda os dados comuns
// campos vazios na consulta Employee outdata: $CPF $RG $blood $membership $dateOfBirth;
		$this->code = $outdata[0];
		$this->office = $outdata[8];
	}
	// Visualiza funcionário - View Employee
	public function ViewEmployee(){ // Visualiza estudante
	// include para apágina
		echo "<p><br /></p>";
		echo "Código do Funcionário: ".$this->code."<br />";
		echo "Nome: ".$this->name." ".$this->surname."<br />";
		echo "Cargo: ".$this->office."<br />";
	}
}
?>