<?php
/**
 * Simple example of extending the SQLite3 class and changing the __construct
 * parameters, then using the open method to initialize the DB.
 */
class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('escolar.db');
    }
}

$db = new MyDB();

$db->exec("INSERT INTO student (codigo,name,surname,CPF,RG,blood,filiacao,dateOfBirth) VALUES ('123','Aijalon','Brito Júnior','1232424','242424','A+','Jurema','24/04/2024')");

$result = $db->query('SELECT * FROM student where codigo = 123 ');
while ($outdata = $result->fetchArray()){
	include("view/student.php");
	$student = new ViewStudent($outdata);
	$student->ViewStudent();
	}
}
?>