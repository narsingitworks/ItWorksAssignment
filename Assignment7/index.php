<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	
	<?php
	echo "Date Difference"."<br>";
	$date1=strtotime("04-02-2022");
	$date2=strtotime("14-02-2022");
	$diff=$date2-$date1;
	echo abs(round($diff/86400));


	/*$start=20;
	$end=3;
	$day=0;

	if($end>$start)
	{

	}
	else
	{
		while($start<=30){
			
			$day++;
			$start++;
		}
		if($start>30){
			$start=1;
			while($start<$end){
				$day++;
				$start++;
			}
		}
	}
	echo $day;*/

	echo "<br>";

	echo "<h4>Occurence of a word in String<h4>";
	echo "string=Hello world Hello php"."<br>";
	/*$str="occurence";
	$count=0;
	for ($i=0; $i <strlen($str) ; $i++) { 
	 	if($str[$i]=="c"){
	 		$count++;
	 	}
	 }
	 echo $count; */

	 $st="Hello world Hello php";
	 $array=explode(" ", $st);
	 $cnt=0;
   for ($i=0; $i < count($array); $i++) { 
   	if($array[$i]=="Hello"){
   		$cnt++;
   	}
   }
   echo $cnt;
	 echo "<br><br>";


	 echo "Question 3"."<br>";
	 $x = true and false;
     echo var_dump($x);
     echo "<br><br>";

     echo "Question 4"."<br>";
     echo "Increment"."<br>";
     $y = 5;
     
     echo "<br />";
     echo $y++ + $y++;
     echo $y;
     echo "<br><br>";

     echo "Decrement"."<br>";
     $z=5;
     
     echo "<br/>";
     echo $z-- - $z--;
     echo $z;
     echo "<br><br>";

     echo "Pattern1"."<br><br>";
     for ($i=0; $i <5 ; $i++) { 
     	for ($j=0; $j <5 ; $j++) { 
     		if($i<=$j){
     			echo "* ";
     		}
     	}
     	echo "<br>";
     }
      echo "<br><br>";

      echo "Pattern2"."<br><br>";
      for ($i=0; $i < 8 ; $i++) {
        $n=1; 
      	for ($j=0; $j < 8 ; $j++) { 
      		if($i>=$j){
      			echo $n." ";
      			$n++;
      		}
      	}
      	echo "<br>";
      }
      echo "<br><br>";

      echo "Biggest Element in the array"."<br>";
      echo "array=[2,3,4,8,5,7,1]"."<br>";
      $arr=[2,3,4,8,5,7,1];
      $max=$arr[0];
      for ($i=1; $i < count($arr); $i++) { 
      	if($max<$arr[$i]){
      		$max=$arr[$i];
      	}
      }
      echo $max;

      echo "<br><br>";

      echo "smallest Element in the array"."<br>";
      $min=$arr[0];
      for ($i=1; $i < count($arr); $i++) { 
      	if($min>$arr[$i]){
      		$min=$arr[$i];
      	}
      }
      echo $min;
      echo "<br><br>";

      echo "Second Highest Element in the array"."<br>";
      for ($i=0; $i <count($arr) ; $i++) { 
      		for ($j=$i+1; $j <count($arr) ; $j++) { 
      			if($arr[$i]>$arr[$j]){
      				$temp=$arr[$i];
      				$arr[$i]=$arr[$j];
      				$arr[$j]=$temp;
      			}
      		}
      }
      echo $arr[count($arr)-2];
      echo "<br><br>";

      echo "concatenating two strings"."<br>";
      $str1="INFOTECH";
      $str2="ITWORKS";
      echo $str1.$str2;
	?>	

</body>
</html>