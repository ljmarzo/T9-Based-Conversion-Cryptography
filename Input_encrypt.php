<html>
<title>Input Encryption</title>

<H3>T9-Based Conversion for Data Encryption/Decryption</h3>



<body >
<font type="Calibri">


<form name="form" action="" method="POST">Encrypt:
  <input  size="47" type="text" name="encrypt" id="subject" value="<?=isset($_POST['encrypt'])?htmlspecialchars($_POST['encrypt']):''?> "/>

</form>



</font>
</body>


<?php 
	
if((isset($_POST['encrypt'])) && !empty($_POST['encrypt']))// Value checker error reduction
{
	
    $t9encrypt = (trim($_POST['encrypt'])); // method is value now passed to standart variable t9encrypt
	$message=$t9encrypt;
	
	//sample print out using standard variable for t9encrypt var from method to var
/*  echo "Variable: ",$t9encrypt;
	echo "</br>";
	echo "</br>";
	echo "Method : ",$_POST['encrypt']; // print from POST method
	echo "</br>";
	echo "</br>";
*/
	include 'T9Encrypt.php'; // call the library
	echo "T9 Conversion:</br>".$t9encrypt;
	
	echo "</br></br>Hashed MAC:</br>".$checksum;
	
	echo "</br></br>Message/Data:</br>".$message;
	
	echo "</br></br>Secret Key:</br>".$secretKey;


}

?>

</html>