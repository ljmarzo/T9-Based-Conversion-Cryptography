<html>
<title>Chaelgutierrez's Note</title>
<h3>= = = = = = = = = = = = = = = = = = =</br>=  Proper Usage of T9Encrypt.php&nbsp; =</br>= = = = = = = = = = = = = = = = = = =</h3>
<body>
<pre>
1. Use method either $_POST or $_REQUEST or any other basta hindi maeexpire ang session ng passing ng values

   Don't use $_GET kasi di mo maipapasa ng ayos ang value one time lang sya pwede gamitin 
   
2. Standard Usage:
	Example:
	
	$t9encrypt- ito yung standard variable code na isinet ko sa T9Encrypt.php a.k.a. library values
	$t9decrypt- ito yung standard variable code na isinet ko sa T9Decrypt.php a.k.a. library values
	ok ito na yung right format
	Exaplanation: This part is kung saan ang value obtain from any form using method ay ipapasa sa standard variable na "$t9encrypt"
	
	$t9encrypt   =     $_POST['sample method name'];
	$t9decrypt   =     $_POST['sample method name'];
	
	STANDARD VARIABLE  NAME VALUE
3. Call the library values 'T9Encrypt.php'
   Call the library values 'T9Decrypt.php'

   include 'T9Encrypt.php'; 
   include 'T9Decrypt.php'; 
   After na macall to automatic na ang laman ng $t9encrypt variable ay T9conversion na

4. Next is $samplevar=$t9encrypt
   Next is $samplevar=$t9decrypt

	Exaplanation: gumawa ng bagong variable kung san ipapasa ang value ng $t9encrypt at$t9decrypt
	Para magamit ulit ang Php file
	
5. $samplevar now can be used to saved to database if necessary or used to another process


Note:
Wala ng Exchange values na magaganap kasi sinama ko na yung ibang Extended Key Ascii Alpabet with accent sa original key

Reminders to be observed:
These two values play big roles in T9 Encryption and Decryption
values _ none
values - value nya space+-

\n
\t
how to enable new line in php inputbox




T9Decryption currently building



Chaelgutierrez
Leeez711
</pre>

</body>

</html>