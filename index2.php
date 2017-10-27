<?php
$wildth=10;
$heigt=5;
$arr=[];
for($i=0;$i<$heigt;$i++){
	$line=[];
	for($j=0;$j<$wildth;$j++){
	$line[]=rand(0,100);
	}
	$arr[]=$line;
}

echo "<table border=1>";
echo"<tr>";
foreach($arr as $line){
	foreach($line as $element){
		echo "<td>$element<br></td>";
	}
	echo "</tr>";
}
echo "</table>";
?>