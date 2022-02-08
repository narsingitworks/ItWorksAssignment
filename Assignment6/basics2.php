 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 	<title>Basics2 </title>
    <style type="text/css">
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: rgb(228, 195, 195);
            margin: auto;
            padding: 23px;
        }

    </style>
    
 </head>
 <body>
    <div class="container" >
         <h3>Basics</h3>
         <br>
         <?php 

         $g=10;
         echo "<h4>if else</h4>";

         $age=20;
         if($age>=18){
            echo "You can vote";
         }
         else{
            echo "You cannot Vote";
         }
         echo "<br><br>";

         echo "<h4>Array</h4>";
         $languages=["PHP","JavaScript","Jquery","python"];
         echo $languages[0]."<br>";
         echo "No of elements in array:".count($languages)."<br><br>";
         $length=count($languages);

         for ($i=0; $i <$length ; $i++) { 
             echo "The value of languages[$i]:".$languages[$i];
             echo "<br>";
         }
         echo "<br><br>";

         echo "<h4>Associative Array</h4>";
         $ass=["name" => "abc", "age" => "21", "city" => "pune"];
         echo "Name=".$ass['name'];
         echo "<br>";
         echo "age=".$ass['age'];
         echo "<br>";
         echo "city=".$ass['city'];
         echo "<br><br><br>";


         echo "<h4>Associative Array using loop</h4>";
         foreach($ass as $l => $l_value ){
            echo "key=".$l." and value=".$l_value;
            echo "<br>";
         }
         echo "<br><br>";

         echo "<h4>MultiDimensional Array</h4>";
         $cars=[ ["volvo",22,18],["BMW",15,13],["saab",5,2],["Land ROver",17,15]];

         for ($row=0; $row <4 ; $row++) { 
             echo "<p><b>Row number $row </b></p>";
             echo "<ul>";
             for ($col=0; $col <3 ; $col++) { 
                 echo "<li>".$cars[$row][$col]."</li>";
             }
             echo "</ul>";
         }

         echo "<br><br>";

         echo "<h4>Array sorting</h4>";
         echo "<b>sort()</b>-sort arrays in ascending order"."<br>";

         $cars1=["BMW","Audi","Mercedez"];
         sort($cars1);
         $length1=count($cars1);
        for ($i=0; $i <$length1 ; $i++) { 
            echo $cars1[$i];
            echo "<br>";
        }
        echo "<br><br>";
         
        echo "<b>rsort()</b>-sort arrays in descending order"."<br>";
        rsort($cars1);

        for ($i=0; $i <$length1 ; $i++) { 
            echo $cars1[$i];
            echo "<br>";
        }
        echo "<br><br>";
         
        echo "<b>asort()</b>-sort Associative arrays in ascending order,according to the value"."<br>";
        $age1=["xyz" => "22", "pqr" => "15", "abc" => "30"];
        $length2=count($age1);
        asort($age1);

        foreach($age1 as $x => $x_value){
            echo "key=".$x." ,value="."$x_value";
            echo "<br>";
        }
        echo "<br><br>";

        echo "<b>ksort()</b>-sort Associative arrays in ascending order,according to the key"."<br>";

        ksort($age1);

        foreach($age1 as $x => $x_value){
            echo "key=".$x." ,value="."$x_value";
            echo "<br>";
        }
        echo "<br><br>";

         echo "<b>arsort()</b>-sort Associative arrays in descending order,according to the value"."<br>";

         arsort($age1);
         foreach($age1 as $x => $x_value){
            echo "key=".$x." ,value="."$x_value";
            echo "<br>";
        }
        echo "<br><br>";

         echo "<b>krsort()</b>-sort Associative arrays in descending order,according to the key"."<br>";

         krsort($age1);
         foreach($age1 as $x => $x_value){
            echo "key=".$x." ,value="."$x_value";
            echo "<br>";
        }
        echo "<br><br>";


        echo "<h4>Merge two Arrays<h4>";
        echo "arr1=[laptop, computer,TV]"."<br>";
        echo "arr1=[mobile, tab]"."<br><br>";
        $arr1=["laptop", "computer","TV"];
        $arr2=["mobile","tab"];
        print_r(array_merge($arr1,$arr2));

         echo "<br><br>";

         echo "<h4>Array pop</h4>";
         echo array_pop($arr1);

         echo "<br><br>";

         echo "<h4>Array product</h4>";
         echo "array=[4,4]"."<br>";
         $ar2=[4,4];
         echo (array_product($ar2));

         echo "<br><br>";

         echo "<h4>Array push</h4>";
         echo "array=[4,4]"."<br>";
         array_push($ar2, 5,6);
         print_r($ar2);

         echo "<br><br>";
         echo "<h4>Array Reverse</h4>";
         print_r(array_reverse($arr1)) ;
         echo "<br><br>";

          echo "<h4>Array search</h4>";
          
         $ar3=["1" => "abc","2" => "pqr","3" => "xyz"];
         echo array_search("abc", $ar3);
         echo "<br><br>";


         echo "<h4>While Loop</h4>";
          $a = 0;
          while($a <= 10){
            echo "The value of a is:";
            echo $a."<br>";
            $a++;
          }
          echo "<br><br>";

          echo "<h4>do while loop</h4>";
           $b = 0;
            do{
                echo "The value of b is:";
                echo $b."<br>";
                $b++;
            }while($b < 10);          
            echo "<br> <br>";

            echo "<h4>For loop</h4>";
        
            for ($c=10; $c >0 ; $c--) { 
                echo "The value of c is:";
                echo $c."<br>";
            }
            echo "<br><br>";

             echo "<h4>For Each loop</h4>";
             foreach ($languages as $value) {
                 echo "The value is:";
                 echo $value."<br>";
             }
             echo "<br><br>";

             echo "<h4>Switch</h4>";
             $day=4;

              switch ($day) {
                  case '1':
                      echo "Monday";
                      break;

                  case '2':
                      echo "Tuesday";
                      break;    

                  case '3':
                      echo "Wednesday";
                      break;  

                   case '4':
                      echo "Thursday";
                      break;     
                    
                    case '5':
                      echo "Friday";
                      break;  

                    case '6':
                      echo "Saturday";
                      break;  
                      
                     case '7':
                      echo "Sunday";
                      break;     

                  default:
                      echo "please enter number from 1 to 7";
                      break;
              }

              echo "<br><br>";

             echo "<h4>Static</h4>";
             function myFunction()
             {
                static $s=0;
                $v=0;
                $s++;
                $v++;
                echo "value of s is:".$s;
                echo "<br>";
                echo "value of v is: ".$v;
                echo "<br>";
                echo "<br>";
             }
             myFunction();
             myFunction();
             myFunction();


             echo "<h4>GLobal</h4>";
             function functionGloabal(){
                global $g;
                echo "In global function value of g is:".$g;
             }
             functionGloabal();
         ?>
    </div>

 </body>
 </html>