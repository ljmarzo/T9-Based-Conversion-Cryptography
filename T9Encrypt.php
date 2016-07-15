<?php

	global $t9encrypt;//temporary usage of global scope of variable to avoid errors in loading this php file  
	//t9encrypt standard variable with its corresponding value
	global $secretKey;// temporary usage of global scope for internal and external declaration of secretKey Value
	
	global $key1;global $key2;global $key3;global $key4;global $key5;global $key6;global $key7;global $key8;global $key9;//global usage for keys values
	$key1=1;$key2=2;$key3=3;$key4=4;$key5=5;$key6=6;$key7=7;$key8=8;$key9=9;//key_values
	
	
	//Priority 1
	$t9encrypt=str_replace(" "," _",$t9encrypt);
	
	$t9encrypt=str_replace("-"," -",$t9encrypt);
	
	
	
	
	//Priority 2
	$t9encrypt=str_replace("1"," 1",$t9encrypt);
	
	$t9encrypt=str_replace("2"," 2",$t9encrypt);
	
	$t9encrypt=str_replace("3"," 3",$t9encrypt);
	
	$t9encrypt=str_replace("4"," 4",$t9encrypt);
	
	$t9encrypt=str_replace("5"," 5",$t9encrypt);
	
	$t9encrypt=str_replace("6"," 6",$t9encrypt);
	
	$t9encrypt=str_replace("7"," 7",$t9encrypt);
	
	$t9encrypt=str_replace("8"," 8",$t9encrypt);
	
	$t9encrypt=str_replace("9"," 9",$t9encrypt);
	
	$t9encrypt=str_replace("0"," 0",$t9encrypt);
	
	
	
	
	//Priority 3 
	
	//Special Characters 

	$t9encrypt=str_replace("!"," ".$key1."-1",$t9encrypt);
	
	$t9encrypt=str_replace('"'," ".$key1."-2",$t9encrypt);
	
	$t9encrypt=str_replace("#"," ".$key1."-3",$t9encrypt);
	
	$t9encrypt=str_replace("$"," ".$key1."-4",$t9encrypt);

	$t9encrypt=str_replace("%"," ".$key1."-5",$t9encrypt);
	
	$t9encrypt=str_replace("&"," ".$key1."-6",$t9encrypt);
	
	$t9encrypt=str_replace("'"," ".$key1."-7",$t9encrypt);
	
	$t9encrypt=str_replace("("," ".$key1."-8",$t9encrypt);
	
	$t9encrypt=str_replace(")"," ".$key1."-9",$t9encrypt);

	$t9encrypt=str_replace("*"," ".$key1."-10",$t9encrypt);
	
	$t9encrypt=str_replace("+"," ".$key1."-11",$t9encrypt);

	$t9encrypt=str_replace(","," ".$key1."-12",$t9encrypt);

	$t9encrypt=str_replace("."," ".$key1."-13",$t9encrypt);
	
	$t9encrypt=str_replace("/"," ".$key1."-14",$t9encrypt);

	$t9encrypt=str_replace(":"," ".$key1."-15",$t9encrypt);
	
	$t9encrypt=str_replace(";"," ".$key1."-16",$t9encrypt);
	
	$t9encrypt=str_replace("<"," ".$key1."-17",$t9encrypt);
	
	$t9encrypt=str_replace(">"," ".$key1."-18",$t9encrypt);
	
	$t9encrypt=str_replace("="," ".$key1."-19",$t9encrypt);
	
	$t9encrypt=str_replace("?"," ".$key1."-20",$t9encrypt);

	$t9encrypt=str_replace("]"," ".$key1."-21",$t9encrypt);
	
	$t9encrypt=str_replace("["," ".$key1."-22",$t9encrypt);
	
	$t9encrypt=str_replace("`"," ".$key1."-23",$t9encrypt);
	
	$t9encrypt=str_replace("}"," ".$key1."-24",$t9encrypt);
	
	$t9encrypt=str_replace("{"," ".$key1."-25",$t9encrypt);
	
	$t9encrypt=str_replace("~"," ".$key1."-26",$t9encrypt);
	
	$t9encrypt=str_replace("|"," ".$key1."-27",$t9encrypt);

	$t9encrypt=str_replace("^"," ".$key1."-28",$t9encrypt);
	
	$t9encrypt=str_replace(chr(92)," ".$key1."-29",$t9encrypt);// exception for  /forward slash
	
	$t9encrypt=str_replace("@"," ".$key1."-30",$t9encrypt);
	
	
	
	//EXTENDED KEY ASCII
	
	$t9encrypt=str_replace(chr(128)," ".$key1."-31",$t9encrypt);
	
	$t9encrypt=str_replace(chr(130)," ".$key1."-32",$t9encrypt);
	
	$t9encrypt=str_replace(chr(131)," ".$key1."-33",$t9encrypt);
	
	
	$t9encrypt=str_replace(chr(132)," ".$key1."-34",$t9encrypt);
	
	$t9encrypt=str_replace(chr(133)," ".$key1."-35",$t9encrypt);
	
	$t9encrypt=str_replace(chr(134)," ".$key1."-36",$t9encrypt);
	
	$t9encrypt=str_replace(chr(135)," ".$key1."-37",$t9encrypt);
	
	$t9encrypt=str_replace(chr(136)," ".$key1."-38",$t9encrypt);
	
	$t9encrypt=str_replace(chr(137)," ".$key1."-39",$t9encrypt);
	
	$t9encrypt=str_replace(chr(139)," ".$key1."-40",$t9encrypt);
	
	$t9encrypt=str_replace(chr(145)," ".$key1."-41",$t9encrypt);
	
	$t9encrypt=str_replace(chr(146)," ".$key1."-42",$t9encrypt);
	
	$t9encrypt=str_replace(chr(147)," ".$key1."-43",$t9encrypt);
	
	$t9encrypt=str_replace(chr(148)," ".$key1."-44",$t9encrypt);
	
	$t9encrypt=str_replace(chr(149)," ".$key1."-45",$t9encrypt);
	
	$t9encrypt=str_replace(chr(150)," ".$key1."-46",$t9encrypt);
	
	$t9encrypt=str_replace(chr(151)," ".$key1."-47",$t9encrypt);
	
	$t9encrypt=str_replace(chr(152)," ".$key1."-48",$t9encrypt);
	
	$t9encrypt=str_replace(chr(153)," ".$key1."-49",$t9encrypt);
	
	$t9encrypt=str_replace(chr(154)," ".$key1."-50",$t9encrypt);
	
	$t9encrypt=str_replace(chr(155)," ".$key1."-51",$t9encrypt);
	
	$t9encrypt=str_replace(chr(156)," ".$key1."-52",$t9encrypt);
	
	$t9encrypt=str_replace(chr(161)," ".$key1."-53",$t9encrypt);
	
	$t9encrypt=str_replace(chr(162)," ".$key1."-54",$t9encrypt);
	
	$t9encrypt=str_replace(chr(163)," ".$key1."-55",$t9encrypt);
	
	$t9encrypt=str_replace(chr(164)," ".$key1."-56",$t9encrypt);
	
	$t9encrypt=str_replace(chr(165)," ".$key1."-57",$t9encrypt);
	
	$t9encrypt=str_replace(chr(166)," ".$key1."-58",$t9encrypt);
	
	$t9encrypt=str_replace(chr(167)," ".$key1."-59",$t9encrypt);
	
	$t9encrypt=str_replace(chr(168)," ".$key1."-60",$t9encrypt);
	
	$t9encrypt=str_replace(chr(169)," ".$key1."-61",$t9encrypt);
	
	$t9encrypt=str_replace(chr(170)," ".$key1."-62",$t9encrypt);
	
	$t9encrypt=str_replace(chr(171)," ".$key1."-63",$t9encrypt);
	
	$t9encrypt=str_replace(chr(172)," ".$key1."-64",$t9encrypt);
	
	$t9encrypt=str_replace(chr(174)," ".$key1."-65",$t9encrypt);
	
	$t9encrypt=str_replace(chr(175)," ".$key1."-66",$t9encrypt);
	
	$t9encrypt=str_replace(chr(176)," ".$key1."-67",$t9encrypt);
	
	$t9encrypt=str_replace(chr(177)," ".$key1."-68",$t9encrypt);
	
	$t9encrypt=str_replace(chr(178)," ".$key1."-69",$t9encrypt);
	
	
	$t9encrypt=str_replace(chr(179)," ".$key1."-70",$t9encrypt);
	
	$t9encrypt=str_replace(chr(180)," ".$key1."-71",$t9encrypt);
	
	$t9encrypt=str_replace(chr(181)," ".$key1."-72",$t9encrypt);
	
	$t9encrypt=str_replace(chr(182)," ".$key1."-73",$t9encrypt);
	
	$t9encrypt=str_replace(chr(183)," ".$key1."-74",$t9encrypt);
	
	$t9encrypt=str_replace(chr(184)," ".$key1."-75",$t9encrypt);
	
	$t9encrypt=str_replace(chr(185)," ".$key1."-76",$t9encrypt);
	
	$t9encrypt=str_replace(chr(186)," ".$key1."-77",$t9encrypt);
	
	$t9encrypt=str_replace(chr(187)," ".$key1."-78",$t9encrypt);
	
	$t9encrypt=str_replace(chr(188)," ".$key1."-79",$t9encrypt);
	
	$t9encrypt=str_replace(chr(189)," ".$key1."-80",$t9encrypt);
	
	$t9encrypt=str_replace(chr(190)," ".$key1."-81",$t9encrypt);
	
	$t9encrypt=str_replace(chr(191)," ".$key1."-82",$t9encrypt);
	
	


 	

	
	
	
	
	
	
	
	//Priority 4
	
	//Key 2
	
	$t9encrypt=str_replace(chr(231)," ".$key2."-25",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(230)," ".$key2."-24",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(229)," ".$key2."-23",$t9encrypt);
	
	$t9encrypt=str_replace(chr(228)," ".$key2."-22",$t9encrypt);
	
	$t9encrypt=str_replace(chr(227)," ".$key2."-21",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(226)," ".$key2."-20",$t9encrypt);
	
	$t9encrypt=str_replace(chr(225)," ".$key2."-19",$t9encrypt);
	
	$t9encrypt=str_replace(chr(224)," ".$key2."-18",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(223)," ".$key2."-17",$t9encrypt);
	
	$t9encrypt=str_replace(chr(222)," ".$key2."-16",$t9encrypt);
	
	$t9encrypt=str_replace(chr(199)," ".$key2."-15",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(198)," ".$key2."-14",$t9encrypt);
	
	$t9encrypt=str_replace(chr(197)," ".$key2."-13",$t9encrypt);
	
	$t9encrypt=str_replace(chr(196)," ".$key2."-12",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(195)," ".$key2."-11",$t9encrypt);
	
	$t9encrypt=str_replace(chr(194)," ".$key2."-10",$t9encrypt);
	
	$t9encrypt=str_replace(chr(193)," ".$key2."-9",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(192)," ".$key2."-8",$t9encrypt);
	
	$t9encrypt=str_replace(chr(140)," ".$key2."-7",$t9encrypt);
	
	$t9encrypt=str_replace("a"," ".$key2."-6",$t9encrypt);
	
	$t9encrypt=str_replace("A"," ".$key2."-5",$t9encrypt);
	
	$t9encrypt=str_replace("b"," ".$key2."-4",$t9encrypt);
	
	$t9encrypt=str_replace("B"," ".$key2."-3",$t9encrypt);
	
	$t9encrypt=str_replace("c"," ".$key2."-2",$t9encrypt);
	
	$t9encrypt=str_replace("C"," ".$key2."-1",$t9encrypt);
	
	
	
	//Key 3
	
	$t9encrypt=str_replace(chr(235)," ".$key3."-15",$t9encrypt);
	
	$t9encrypt=str_replace(chr(234)," ".$key3."-14",$t9encrypt);

	$t9encrypt=str_replace(chr(233)," ".$key3."-13",$t9encrypt);
	
	$t9encrypt=str_replace(chr(232)," ".$key3."-12",$t9encrypt);
	
	$t9encrypt=str_replace(chr(208)," ".$key3."-11",$t9encrypt);

	$t9encrypt=str_replace(chr(203)," ".$key3."-10",$t9encrypt);
	
	$t9encrypt=str_replace(chr(202)," ".$key3."-9",$t9encrypt);
	
	$t9encrypt=str_replace(chr(201)," ".$key3."-8",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(200)," ".$key3."-7",$t9encrypt);
	
	$t9encrypt=str_replace("d"," ".$key3."-6",$t9encrypt);
	
	$t9encrypt=str_replace("D"," ".$key3."-5",$t9encrypt);
	
	$t9encrypt=str_replace("e"," ".$key3."-4",$t9encrypt);
	
	$t9encrypt=str_replace("E"," ".$key3."-3",$t9encrypt);
		
	$t9encrypt=str_replace("f"," ".$key3."-2",$t9encrypt);
	
	$t9encrypt=str_replace("F"," ".$key3."-1",$t9encrypt);
	
	
	
	// Key 4
	
	$t9encrypt=str_replace(chr(239)," ".$key4."-14",$t9encrypt);
	
	$t9encrypt=str_replace(chr(238)," ".$key4."-13",$t9encrypt);
	
	$t9encrypt=str_replace(chr(237)," ".$key4."-12",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(236)," ".$key4."-11",$t9encrypt);
	
	$t9encrypt=str_replace(chr(207)," ".$key4."-10",$t9encrypt);
	
	$t9encrypt=str_replace(chr(206)," ".$key4."-9",$t9encrypt);
	
	$t9encrypt=str_replace(chr(205)," ".$key4."-8",$t9encrypt);	
	
	$t9encrypt=str_replace(chr(204)," ".$key4."-7",$t9encrypt);
	
	$t9encrypt=str_replace("g"," ".$key4."-6",$t9encrypt);
	
	$t9encrypt=str_replace("G"," ".$key4."-5",$t9encrypt);
		
	$t9encrypt=str_replace("h"," ".$key4."-4",$t9encrypt);
	
	$t9encrypt=str_replace("H"," ".$key4."-3",$t9encrypt);
		
	$t9encrypt=str_replace("i"," ".$key4."-2",$t9encrypt);
	
	$t9encrypt=str_replace("I"," ".$key4."-1",$t9encrypt);
	
	
	
	//Key 5
	
	$t9encrypt=str_replace("j"," ".$key5."-6",$t9encrypt);
	
	$t9encrypt=str_replace("J"," ".$key5."-5",$t9encrypt);
	
	$t9encrypt=str_replace("k"," ".$key5."-4",$t9encrypt);
	
	$t9encrypt=str_replace("K"," ".$key5."-3",$t9encrypt);
	
	$t9encrypt=str_replace("l"," ".$key5."-2",$t9encrypt);
	
	$t9encrypt=str_replace("L"," ".$key5."-1",$t9encrypt);
	
	
	
	// Key 6
	$t9encrypt=str_replace(chr(248)," ".$key6."-23",$t9encrypt);
	
	$t9encrypt=str_replace(chr(247)," ".$key6."-22",$t9encrypt);
	
	$t9encrypt=str_replace(chr(246)," ".$key6."-21",$t9encrypt);
	
	$t9encrypt=str_replace(chr(245)," ".$key6."-20",$t9encrypt);
	
	$t9encrypt=str_replace(chr(244)," ".$key6."-19",$t9encrypt);
	
	$t9encrypt=str_replace(chr(243)," ".$key6."-18",$t9encrypt);
	
	$t9encrypt=str_replace(chr(242)," ".$key6."-17",$t9encrypt);
	
	$t9encrypt=str_replace(chr(241)," ".$key6."-16",$t9encrypt);
	
	$t9encrypt=str_replace(chr(240)," ".$key6."-15",$t9encrypt);
	
	$t9encrypt=str_replace(chr(216)," ".$key6."-14",$t9encrypt);
	
	$t9encrypt=str_replace(chr(215)," ".$key6."-13",$t9encrypt);
	
	$t9encrypt=str_replace(chr(214)," ".$key6."-12",$t9encrypt);
	
	$t9encrypt=str_replace(chr(213)," ".$key6."-11",$t9encrypt);
	
	$t9encrypt=str_replace(chr(212)," ".$key6."-10",$t9encrypt);
	
	$t9encrypt=str_replace(chr(211)," ".$key6."-9",$t9encrypt);
	
	$t9encrypt=str_replace(chr(210)," ".$key6."-8",$t9encrypt);
	
	$t9encrypt=str_replace(chr(209)," ".$key6."-7",$t9encrypt);
	
	$t9encrypt=str_replace("m"," ".$key6."-6",$t9encrypt);
	
	$t9encrypt=str_replace("M"," ".$key6."-5",$t9encrypt);
	
	$t9encrypt=str_replace("n"," ".$key6."-4",$t9encrypt);
	
	$t9encrypt=str_replace("N"," ".$key6."-3",$t9encrypt);

	$t9encrypt=str_replace("o"," ".$key6."-2",$t9encrypt);
	
	$t9encrypt=str_replace("O"," ".$key6."-1",$t9encrypt);
	
	
	
	// Key 7
	
	$t9encrypt=str_replace(chr(138)," ".$key7."-9",$t9encrypt);
	
	$t9encrypt=str_replace("p"," ".$key7."-8",$t9encrypt);
	
	$t9encrypt=str_replace("P"," ".$key7."-7",$t9encrypt);
	
	$t9encrypt=str_replace("q"," ".$key7."-6",$t9encrypt);
	
	$t9encrypt=str_replace("Q"," ".$key7."-5",$t9encrypt);
	
	$t9encrypt=str_replace("r"," ".$key7."-4",$t9encrypt);
	
	$t9encrypt=str_replace("R"," ".$key7."-3",$t9encrypt);

	$t9encrypt=str_replace("s"," ".$key7."-2",$t9encrypt);
	
	$t9encrypt=str_replace("S"," ".$key7."-1",$t9encrypt);
	
	
	
	//Key 8
	
	$t9encrypt=str_replace(chr(252)," ".$key8."-14",$t9encrypt);
	
	$t9encrypt=str_replace(chr(251)," ".$key8."-13",$t9encrypt);
	
	$t9encrypt=str_replace(chr(250)," ".$key8."-12",$t9encrypt);
	
	$t9encrypt=str_replace(chr(249)," ".$key8."-11",$t9encrypt);
	
	$t9encrypt=str_replace(chr(220)," ".$key8."-10",$t9encrypt);
	
	$t9encrypt=str_replace(chr(219)," ".$key8."-9",$t9encrypt);
	
	$t9encrypt=str_replace(chr(218)," ".$key8."-8",$t9encrypt);
	
	$t9encrypt=str_replace(chr(217)," ".$key8."-7",$t9encrypt);
	
	$t9encrypt=str_replace("t"," ".$key8."-6",$t9encrypt);
	
	$t9encrypt=str_replace("T"," ".$key8."-5",$t9encrypt);
	
	$t9encrypt=str_replace("u"," ".$key8."-4",$t9encrypt);
	
	$t9encrypt=str_replace("U"," ".$key8."-3",$t9encrypt);
	
	$t9encrypt=str_replace("v"," ".$key8."-2",$t9encrypt);
	
	$t9encrypt=str_replace("V"," ".$key8."-1",$t9encrypt);
	
	
	
	// Key 9
	
	$t9encrypt=str_replace(chr(255)," ".$key9."-15",$t9encrypt);
	
	$t9encrypt=str_replace(chr(254)," ".$key9."-14",$t9encrypt);

	$t9encrypt=str_replace(chr(253)," ".$key9."-13",$t9encrypt);
	
	$t9encrypt=str_replace(chr(221)," ".$key9."-12",$t9encrypt);
	
	$t9encrypt=str_replace(chr(159)," ".$key9."-11",$t9encrypt);

	$t9encrypt=str_replace(chr(158)," ".$key9."-10",$t9encrypt);
	
	$t9encrypt=str_replace(chr(142)," ".$key9."-9",$t9encrypt);

	$t9encrypt=str_replace("w"," ".$key9."-8",$t9encrypt);
	
	$t9encrypt=str_replace("W"," ".$key9."-7",$t9encrypt);
	
	$t9encrypt=str_replace("x"," ".$key9."-6",$t9encrypt);
	
	$t9encrypt=str_replace("X"," ".$key9."-5",$t9encrypt);
		
	$t9encrypt=str_replace("y"," ".$key9."-4",$t9encrypt);
	
	$t9encrypt=str_replace("Y"," ".$key9."-3",$t9encrypt);

	$t9encrypt=str_replace("z"," ".$key9."-2",$t9encrypt);
	
	$t9encrypt=str_replace("Z"," ".$key9."-1",$t9encrypt);
	
	
	// sample secret key
	$secretKey="Better living with the codes";
	// sample hash hmac
	$checksum= hash_hmac('sha256',$t9encrypt,$secretKey);
	
	
	

?>