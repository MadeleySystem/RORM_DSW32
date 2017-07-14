<?php
$variable;
$x=0;
$variable=23; // asignacion
echo $variable+3;//impreción
echo "<br>"; 
echo $variable++;//incremento
echo "<br>";
echo $variable--;//decremento
echo "<br>";
echo $variable+=5;//
echo "<br>";
echo $variable-=6;//echo ($variable-=6)."Kbr>"; para concatenar 
echo "<br>";
echo "<br>";
for($X=0; $x<$variable; $x++){
	echo $x;
	echo "<br>";
	}

echo "<ul>";
while($variable<23){
	echo"<li>";
	echo $variable;
	echo "<li>";
	$variable++;
}
echo"</ul>";
?>