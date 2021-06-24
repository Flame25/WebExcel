<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_web');

// get the post records

$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['phone'];
$txtMessage = $_POST['message'];
$txtSubject = $_POST['subject']; 

// database insert SQL code
$sql = "INSERT INTO `tbl_form` (`Id`, `fldName`, `fldPhone`, `fldEmail`, `fldSubject`, `fldMessage`) VALUES ('0', '$txtName', '$txtPhone', '$txtEmail', '$txtSubject', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
