<html>
<title>Authentication</title>

<H3>Authentication of Data</h3>



<body >
<font type="Calibri">


<form name="form" action="Authentication.php" method="POST">
Message: &nbsp;&nbsp;&nbsp;&nbsp;<input size="47"type="text" name="data" id="subject" value="<?=isset($_POST['data'])?htmlspecialchars($_POST['data']):''?> "/></br></br>
Secret Key: <input size="47"type="text" name="key" id="subject" value="<?=isset($_POST['key'])?htmlspecialchars($_POST['key']):''?> "/></br></br>
Checksum: &nbsp;<input size="47"type="text" name="chk" id="subject" value="<?=isset($_POST['chk'])?htmlspecialchars($_POST['chk']):''?> "/></br></br>
<input type="submit">
<input type="reset">


</form>


</font>
</body>


<?php 


if(((isset($_POST['data'])) && !empty($_POST['data']))||((isset($_POST['key']))&&!empty($_POST['key']))||((isset($_POST['chk'])) && !empty($_POST['chk'])))
{
	$t9encrypt=(trim($_POST['data']));
	include 'T9encrypt.php';
	$data=$t9encrypt;
	$key=(trim($_POST['key']));
	echo $data."</br>";
	$calc=(trim(hash_hmac('sha256',$data,$key)));

	echo $calc;
	$chk=($_POST['chk']);
	echo "</br></br>";
	
	if($calc==$chk)
	{
	
		echo "Authentication Successfull";
		
	}
	else
	{
		echo "Authentication Failed";
	
	}
	


}







?>

</html>