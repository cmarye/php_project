<?php
if(isset($_POST['submit'])){
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=employees', 'phpuser', 'p@$$w0rd');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
	$error = 'Unable to connect to the database server.';
	include 'error_pages/error.html.php';
	exit();
}

try
{
	$sql = "SELECT first_name, last_name FROM employees WHERE first_name like '%" . $fname . "%' and last_name like '%" . $lname . "%'";
	$result = $pdo->query($sql);
}
catch (PDOException $e)
{
	$error = 'Error fetching employee names: ' . $e->getMessage();
	include 'error_pages/error.html.php';
	exit();
}

while ($row = $result->fetch())
{
	$fname = array();
	$lname = array();
	$fname[] = $row['first_name'];
	$lname[] = $row['last_name'];
}}
include 'result.html.php';
?>
