<?php
	
	
	$host="localhost";// localhost name
	$user="root";//user
	$pass="";//password
	$db="test";// database name
	mysql_connect($host,$user,$pass);// establish connection
	mysql_select_db($db);//selecting database
	
	if(isset($_POST['username'])){
		$t9encrypt=$_POST['username'];// converting input into t9 then to hmac for username
		include 'T9Encrypt.php';
		$username=$checksum;
		
		
		$t9encrypt=$_POST['password'];// converting input into t9 then to hmac password
		include 'T9Encrypt.php';
		$password=$checksum;
		
		$sql="SELECT * FROM dbthesis WHERE dbuser='".$username."' AND dbpass='".$password."' LIMIT 1";// select from the database from input
		$res=mysql_query($sql);// query
		if($row=mysql_num_rows($res)==1)
		{
			echo 'Successfully Login</br>';
			$row = mysql_fetch_row($res);
			$t9decrypt=$row[3];
			include 'T9Decrypt.php';
			$display=$t9decrypt;
			echo 'Protected Data: ' . $row[3];
			echo '</br>Decrypted Data: '.$display;

		}
		else
		{
			
			echo 'Error Log In';
			
			
		
		}
	
	
	
	
	}



?>