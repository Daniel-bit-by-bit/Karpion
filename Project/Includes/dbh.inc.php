<?php
$servername="localhost";
$dbUsername="group3";
$dbPassword="5J7pONKvNY2K";
$dbName="group3";
$conn = mysqli_connect($servername,$dbUsername,$dbPassword,$dbName);

if(!$conn){
  die("connection failed: " . mysqli_connec_error());
}

/*

CREATE TABLE EmployerUsers (
  employerId int UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL,
  employerName VARCHAR(128) NOT NULL,
  employerEmail VARCHAR(30) NOT NULL,
  employerUid VARCHAR(128) NOT NULL,
  employerPwd VARCHAR(128) NOT NULL,
  Company     VARCHAR(128) ,
  Contact     VARCHAR(128),
  Description TEXT,
  Eligibility TEXT,
  Salary      VARCHAR(30),
  JobTitle    VARCHAR(128)
);


CREATE TABLE EMPLOYER(
EmpID       INT UNSIGNED  NOT NULL AUTO_INCREMENT,
Name        VARCHAR(30) NOT NULL,
Company     VARCHAR(30) ,
Contact     VARCHAR(30),
Description TEXT,
Eligibility TEXT,
Salary      VARCHAR(30),
JobTitle    VARCHAR(30) NOT NULL,
PRIMARY KEY(EmpID));
*/
