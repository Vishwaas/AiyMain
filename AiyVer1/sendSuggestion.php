<?php

$sub=$_REQUEST["subject"];
$to="info@adityaiyengaryoga.com";
$txt=$_POST["body"];
$txtlen = strlen($txt);
$sendTxt="";
$i=0;
$j=0;
while($i<$txtlen)
{
	if(($i%70 == 0)&&($i!=0))
		$sendTxt[$j++]="\n";
	
	$sendTxt[$j++]=$txt[$i++];
}

$mailBody =  implode("",$sendTxt);
mail($to,$sub,$mailBody);
echo "1";
?>