<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Programs</title>
</head>
<body>
	<?php

	echo "<h4>Pallindrome</h4>"."<br>";
	echo "abba";
	echo "<br>";
	$str1="abba";
	$str2="";
	

	//using rev function
	/*$rev=strrev($str1);
	if($str1==$rev){
		echo "String is Pallindrome";
	}
	else{
		echo "String is not Pallindrome";
	}*/

	//without using rev function
	$len=strlen($str1);
	for ($i=$len-1; $i >=0 ; $i--) { 
		$s=$str1[$i];
		$str2=$str2.$s;
	}
	
	if($str1 == $str2){
		echo "String is Pallindrome";
	}
	else{
		echo "String is not Pallindrome";
	}
	echo "<br><br>";

	echo "<h4>Fibonaccy Series</h4>";

	$a=0;
	$b=0;
	$c=1;
	/*echo $a."<br>";
	echo $b."<br>";*/

	for ($i=0; $i < 10; $i++) { 
		$a=$b;
		$b=$c;
		$c=$a+$b;
		echo $a;
		echo "<br>";
	}
	echo "<br><br>";

	echo "<h4>Reverse a Number</h4>";
	echo "123";
	echo "<br>";
	$num=123;
    $rev=0;

	while ($num>1) {

		$rem=$num % 10;
		$rev=($rev * 10) + $rem;
		$num=($num/10);
	}
	echo $rev;
	echo "<br><br>";

	echo "<h4>Reverse String</h4>";
	$str="Hello";
	$rev="";

	for ($i=strlen($str)-1; $i >=0 ; $i--) { 
		$x=$str[$i];
		$rev=$rev.$x;
	}
	echo $rev;

	echo "<br><br>";


	echo "<h4>Swap two numbers</h4>";
	$x=4;
	$y=5;

	//without using third variable
	$x=$x+$y;
	$y=$x-$y;
	$x=$x-$y;

	echo "After Swap "."<br>";
	echo "x =".$x."<br>" ;
	echo "y =".$y;
	echo "<br><br>";

	//with using third variable
	$x1=10;
	$x2=20;

	$x3=$x1;
	$x1=$x2;
	$x2=$x3;

	echo "After Swapping:";
	echo "<br>";
	echo "x1=".$x1."<br>";
	echo "x2=".$x2."<br><br>";

	echo "<h4>Leap Year</h4>";
	echo "year=2016";
	$year=2016;
	echo "<br>";
	if($year % 4 == 0 && $year %100!=0){
		echo "Year is Leap Year";
	}
	else
	{
		echo "Year is not Leap Year";
	}
	echo "<br><br>";

	echo "<h4>Printing Array Elements</h4>";
	echo "3,4,5,1,2,6,7"."<br>";
	$arr=[3,4,5,1,2,6,7];
    print_r($arr);
    echo "<br>";

	for ($i=0; $i <count($arr) ; $i++) { 
		echo "arr[$i]=".$arr[$i];
		echo"<br>";
	}
	echo "<br><br>";

	echo "<h4>Asscending order</h4>"."<br>";

	for ($i=0; $i <count($arr) ; $i++) { 

		for($j=$i+1; $j < count($arr); $j++){
			if($arr[$i] > $arr[$j]){
				$temp=$arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$temp;
			}
		}
	}

	for ($i=0; $i <count($arr) ; $i++) { 
		echo $arr[$i];
		echo "<br>";
	}

	echo "<h4>Descending order</h4>"."<br>";

	for ($i=0; $i <count($arr) ; $i++) { 

		for($j=$i+1; $j < count($arr); $j++){
			if($arr[$i] < $arr[$j]){
				$temp=$arr[$i];
				$arr[$i]=$arr[$j];
				$arr[$j]=$temp;
			}
		}
	}

	for ($i=0; $i <count($arr) ; $i++) { 
		echo $arr[$i];
		echo "<br>";
	}
	echo "<br><br>";

	echo "<h4>Sum of Array elements</h4>"."<br>";
	$sum=0;
	for ($i=0; $i < count($arr); $i++) { 
		$sum=$sum+$arr[$i];
	}

	echo "Sum=".$sum;
	echo "<br><br>";

	echo "<h4>Remove Duplicate array elements</h4>"."<br>";
	echo "2,3,2,4,5,6,3"."<br>";

	$arr2=[2,3,2,4,5,6,3];
	$arr3=[];
	for ($i=0; $i <count($arr2) ; $i++) { 
		if(in_array($arr2[$i], $arr3)){
			continue;
		}
		else{
			array_push($arr3, $arr2[$i]);
		}
	}

	for ($i=0; $i <count($arr3) ; $i++) { 
		echo $arr3[$i];
		echo "<br>";
	}
	echo "<br><br>";

	echo "<h4>Factorial Number</h4>";
	echo "5"."<br>";

	$n=5;
	$fact=1;

	for ($i=1; $i <= $n ; $i++) { 
		$fact=$fact * $i;
		
	}
	echo $fact;

	echo "<br><br>";

	echo "<h4>Printing 5 to 15 </h4>";
	for ($i=5; $i <=15 ; $i++) { 
		echo $i."<br>";
	}

	echo "<br><br>";

	echo "<h4>Grade</h4><br>";
	$per = 65;

	if($per>=60 && $per<=100){
		echo "Congratulations you got First Grade";

	}
	else if($per>=45 && $per<=59){
		echo " you got Second Grade";
	}
	else if($per>=33 && $per<=44){
		echo " you got Third Grade";
	}
	else if($per >100) {
		echo "please enter valid marks";
	}
	else  {
		echo "Sorry You are Failed";
	}

	echo "<h4>Vote</h4><br>";
	$age=18;
	$voter="yes";
	if($age>=18 && $voter=="yes"){
		echo "You are eligible to vote";
	}
	else
	{
		echo "You are not eligible to vote";
	}

	echo "<br>";

	echo "<h4>no of array elements</h4><br>";
	$arr4=[1,2,3,4];
	echo count($arr4);

	/*$ar1=["a","b","c","d"];
	$i=0;
	$count=0;
	while($ar1[$i] != ""){
		$i++;
		$count++;
	}
	echo $count;*/
	?>

</body>
</html>