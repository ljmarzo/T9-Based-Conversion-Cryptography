<?php



	if((isset($_POST['username']))&&(isset($_POST['password']))&&(isset($_POST['data'])))
	{
		$t9encrypt=$_POST['username'];
		include 'T9Encrypt.php';
		$username=$checksum;

		$t9encrypt=$_POST['password'];
		include 'T9Encrypt.php';
		$password=$checksum;
		
		
	
		$t9encrypt=$_POST['data'];
		include 'T9Encrypt.php';
		$data=$t9encrypt;
		
	
	
	
	
	$host="localhost";
	$user="root";
	$pass="";
	$db="test";
	mysql_connect($host,$user,$pass);
	mysql_select_db($db);
	$sql="INSERT INTO  `test`.`dbthesis` (`id` ,`dbuser` ,`dbpass` ,`dbdata`)VALUES (NULL , '$username',  '$password',  '$data');";
	mysql_query($sql);


	}




?>









<html>
<title>Registration Simulation</title>

<h3>T9-Based Conversion for Data Encryption/Decryption</h3>
<h3>Registration Simulation</h3>

<body>

<Form method="post" action="Registration.php">
Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="username" size="50"></br></br>
Password: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="password" size="50"></br></br>
Protected Data:&nbsp;
<input type="text" name="data" size="50" maxlength="100000">
</br>
</br>
<input type="submit" value="Sign Up">


</form>


</body>
</html>