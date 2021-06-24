<?php

// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'id14895387_root', 'BhT%Voe!/jydq2se','id14895387_db_cekk');

// get the post records

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];

// database insert SQL code
$sql = "INSERT INTO `tbl_form` (`Id`, `fldName`, `fldEmail`) VALUES ('0', '$txtName', '$txtEmail')";

// insert in database 
$rs = mysqli_query($con, $sql);

}
else
{
	echo "Error";
	
}
?>
