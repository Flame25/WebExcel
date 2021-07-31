<?php

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'excg1483', 'eTTc3ic1TFDT73','excg1483_excelsior');

// get the post records

$txtName = $_POST['name'];
// database insert SQL code
$sql = "INSERT INTO `tb_form` (`Id`, `fldName`) VALUES ('0', '$txtName')";

// insert in database 
$rs = mysqli_query($con, $sql);


if($rs)
{
	echo "Contact Records Inserted";
}
else
{
	echo "Error";
	
}
?>
