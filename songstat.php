#!/usr/bin/env php
<?php
error_reporting(E_ERROR | E_PARSE);
$ss = json_decode(file_get_contents("http://volumio.local/api/v1/getstate"), true);
$total = $ss['duration']."000";
$current = $ss['seek'];
$cursong = floor($current /  $total * 100);
$cursong = round($cursong /2);
echo gmdate("i:s",$current/1000)."  ";
echo $ss['artist'] . " - " . $ss['title']." ".gmdate("i:s",$ss['duration'])." | [";
for ($i = 0; $i<= 50;$i++)
{
	if ($i ==  $cursong )
	{
		echo "|";
	}
	else{
		echo ".";
	}	
}

echo "]";

?>
