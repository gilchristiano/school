<?php
/**
 * Simple example of extending the SQLite3 class and changing the __construct
 * parameters, then using the open method to initialize the DB.
 */
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../school.db');
    }
}
 
$db = new MyDB();
// $db->exec("INSERT INTO employee(codigo,name,surname,CPF,RG,blood,filiacao,dateOfBirth,office) VALUES('123','Robson','Monteiro','1232424','242424','A+','Jurema','24/04/2024','Vigilante')");
	include("../view/ViewPerson.php");
	include("../view/header.php"); // cabeçalho
	/*
$result = $db->query('SELECT * FROM student where codigo = 1234 ');
while ($outdata = $result->fetchArray()){
	$student = new ViewStudent($outdata);
	$student->ViewStudent(); // Saída na tela
	}
	*/
$result = $db->query('SELECT * FROM employee ORDER BY name');
while ($outdata = $result->fetchArray()){
	$employee = new ViewEmployee($outdata);
	$employee->ViewEmployee(); // Saída na tela
	}
	include("../view/footnote.php"); // rodapé

?>