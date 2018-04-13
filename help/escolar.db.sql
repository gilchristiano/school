BEGIN TRANSACTION;
CREATE TABLE IF NOT EXISTS `student` (
	`codigo`	INTEGER PRIMARY KEY AUTOINCREMENT,
	`name`	TEXT NOT NULL,
	`surname`	TEXT NOT NULL,
	`CPF`	NUMERIC,
	`RG`	NUMERIC NOT NULL,
	`blood`	TEXT,
	`filiacao`	INTEGER NOT NULL,
	`dateOfBirth`	INTEGER
);
INSERT INTO `student` (codigo,name,surname,CPF,RG,blood,filiacao,dateOfBirth) VALUES (123,'Aijalon','Brito Júnior',1232424,242424,'A+','Jurema','24/04/2024'),
 (1234,'Jurema','teste',1232424,242424,'A+','Jurema','24/04/2024');
CREATE TABLE IF NOT EXISTS `employee` (
	`codigo`	INTEGER PRIMARY KEY AUTOINCREMENT UNIQUE,
	`name`	TEXT NOT NULL,
	`surname`	TEXT NOT NULL,
	`CPF`	TEXT NOT NULL,
	`RG`	TEXT NOT NULL,
	`blood`	REAL NOT NULL,
	`filiacao`	text after blood,
	`dateOfBirth`	TEXT NOT NULL,
	`office`	TEXT NOT NULL
);
INSERT INTO `employee` (codigo,name,surname,CPF,RG,blood,filiacao,dateOfBirth,office) VALUES (1,'','','','','',NULL,'',''),
 (123,'Robson','Monteiro','1232424','242424','A+','Jurema','24/04/2024','Vigilante');
COMMIT;
