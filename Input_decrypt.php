<html>
<title>Input Decryption</title>

<H3>T9-Based Conversion for Data Encryption/Decryption</h3>



<body >
<font type="Calibri">


<form name="form" action="" method="POST">Decrypt:
  <input size="47"type="text" name="decrypt" id="subject" value="<?=isset($_POST['decrypt'])?htmlspecialchars($_POST['decrypt']):''?> "/>
</form>


</font>
</body>


<?php 
	
if((isset($_POST['decrypt'])) && !empty($_POST['decrypt']))// Value checker error reduction
{
	
    $t9decrypt = $_POST['decrypt']; // method is value now passed to standart variable t9decrypt
	
	$t9decrypt=$t9decrypt;
	//sample print out using standard variable for t9decrypt var from method to var
    echo "Variable : ",$t9decrypt;
	echo "</br>";
	echo "</br>";
	echo "Method : ",$_POST['decrypt']; // print from POST method
	echo "</br>";
	echo "</br>";

	include 'T9decrypt.php'; // call the library
	echo "T9 Plain Text : </br>";
	echo $t9decrypt;
	

}

?>

</html>