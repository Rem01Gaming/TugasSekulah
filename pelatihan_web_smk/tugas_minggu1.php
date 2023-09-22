<?php

// commited by Wisnu Gunawan, 22/09/2023.

//////////////////////////////////////
	
	echo "Nomor 1 <br>"; 
	
	$x=1;
	while($x<=10){
		echo $x." ";
		$x++;
	}
	
	echo "<br>";
	
	
//////////////////////////////////////
	
	echo "Nomor 2 <br>";
	
	$x=10;
	while($x>=1){
		
		if( ($x != 5) AND ($x != 2)){
			echo $x." ";
		}
		$x--;
	}
	
	echo "<br>";	
	
///////////////////////////////////// 
// Un = a+(n+1)b

echo "Nomor 3 <br>";

$x=3;
$n=3;
$i=1;

while($i<=7) {
	echo $x." ";
	$x=$x+$n;
	$i++;
	}
	
	echo "<br>";

///////////////////////////////////
// Un = U1 * r^(n-1)

echo "Nomor 4 <br>";

$x=2;
$n=2;
$i=1;

while($i<=6) {
	echo $x." ";
	$x=$x+$n;
	$n=$n+$n;
	$i++;
	}
	
	echo "<br>";
	
//////////////////////////////////
// Un = a+(n+1)b

echo "Nomor 5 <br>";

$x=1;
$n=2;
$i=1;

while($i<=7) {
	echo $x." ";
	$x=$x+$n;
	$i++;
	}
	
	echo "<br>";
	
///////////////////////////////

echo "Nomor 6 <br>";

$x=2;
$i=1;

while($i<=11) {
	echo $x." ";
	$i++;
	
	if($i==4 || $i==7 || $i==10) {
		$x=$x-1;
		} else {
			$x=$x+2;
			}
	}
	
	echo "<br>";
	
/////////////////////////////
		
echo "Nomor 7 <br>";

$x = 100;
$i = 1;

while($i<=6) {
	echo $x." ";
	$i=$i+1;
	
	if($i==2 || $i==5) {
		$x=$x/4;
		} else {
			$x=$x*2;
		}
	}
	
	echo "<br>";

/////////////////////////////
		
echo "Nomor 8 <br>";

$x=1;
$i=1;

while($i<=10) {
	echo $x." ";
	$i++;
	$x++;
	
	if($i==6) {
		$x=1;
		}
	}
	
	echo "<br>";

/////////////////////////////
		
echo "Nomor 9 <br>";

$x=22;
$i=1;

while($i<=9) {
	echo $x." ";
	
	if($i==2 || $i==5) {
		$x=$x+11;
		}
	$i++;
	}
	
	echo "<br>";
	
/////////////////////////////
		
echo "Nomor 10 <br>";

$x=1;
$i=1;
$n=2;

while($i<=10)  {
	echo $x." ";
	$i++;
	$x=$x+2;
	
	if($i==5 || $i==7 || $i==9) {
		$x=$x+2;
		}
	if($i==10) {
		$x=$x+4;
		}
	}
	
	echo "<br>";
	
/////////////////////////////
		
echo "Nomor 11 <br>";

$x=1;
$i=1;
$n=0;

while($i<=12) {
	$x=$x+$n;
	echo $x." ";
	$x++;
	$i++;
	
	if($i==5 || $i==9) {
		$x=1;
		$n++;
		}
	}
	
	echo "<br>";
	
/////////////////////////////
		
echo "Nomor 12 <br>";

$x=10;
$i=1;

while($i<=11) {
	echo $x." ";
	$i++;
	
	if($i>=7) {
		$x++;
		} else {
			$x--;
			}
	}
	
?>
