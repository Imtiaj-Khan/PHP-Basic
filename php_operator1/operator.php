<?php
//$fonts = "arial";
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Operator</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div  class="phpcoding">
		<section class="header">
			<h2>سْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ </h2>
			
		</section>
		<section class="maincontent">
			Operator
			<hr>
			1.Arethimatic
			2.Assignment
			3.comparison
			4.Increment/Decrement
			5.Logical
			6.String
			7.Array
			<br>
			<hr>
			1.Arithmetic
			<hr>
			
			<?php 

				$x = 15;
				$y = 2;
				$a = $x + $y;
				$b = $x - $y;
				$c = $x * $y;
				$d = $x / $y;
				$e = $x % $y;
				echo "addition value = ".  $a;
				echo "<br/>";
				echo "Subtraction value = ".  $b;
				echo "<br/>";
				echo "Multiplication value = ".  $c;
				echo "<br/>";
				echo "Division value = ".  $d;
				echo "<br/>";
				echo "Modulas value = ".  $e;
				echo "<br/>";																


			 ?>
			 <hr>
			 2.Assignment
			 <hr>
			 <?php
			     $a = 30;
				 $b = 20;
				 $c = 15;
				 $d = 22;
				 $e = 14;
				 $a += 30;
				 $b -= 15;
				 $c *= 10;
				 $d /= 2;
				 $e %= 3;
				echo "addition value = ".  $a;
				echo "<br/>";
				echo "Subtraction value = ".  $b;
				echo "<br/>";
				echo "Multiplication value = ".  $c;
				echo "<br/>";
				echo "Division value = ".  $d;
				echo "<br/>";
				echo "Modulas value = ".  $e;
				echo "<br/>";					 							 		

			 ?>
			 <hr>
			 3.comparison
			 <hr>
			 <?php
			 	$x = 100;
			 	$y = 100;
			 	echo "check value" .var_dump($x == $y) ; //== use for check the value(	Equal)
			 	echo "<br/>";
			 	$a = 100;
			 	$b = "100";
			 	echo "check data type" .var_dump($a === $b) ; //=== use for check data type if the data type are same then true otherwise false(Identical)
			 	echo "<br/>";
			 	$x = 5;
			 	$y = 10;
			 	echo "$x is less than $y thats value is = "  . ($x <=> $y) ; // returns -1 because $x is less than $y(Spaceship)
			 	echo "<br/>";
			 	$x = 10;
			 	$y = 10;
			 	echo "$x = $y thats value is = " . ($x <=> $y) ; // returns 0 because because values are equal
			 	echo "<br/>";
			 	$x = 15;
			 	$y = 10;
			 	echo "$x is greater than $y thats value is = "  . ($x <=> $y) ; // returns +1 because $x is greater than $y(Spaceship)
			 	echo "<br/>";			 				 				 	

			 ?>
			 <hr>
			 4.Increment/Decrement
			 <hr>
			 <?php
			 	$x = 5;
			 	/*echo ++$x;//pre-increment
				echo "<br>";
				echo $x++;//post-increment
				echo "<br>";
				echo $x;*/
			 	echo --$x;//pre-increment
				echo "<br>";
				echo $x--;//post-increment
				echo "<br>";
				echo $x;				


			 ?>
			 <hr>
			 5.Logical	
			 <hr>
			 <?php
			 	//and(both are true) for this operator
			 	$a = 20;
			 	$b = 30;
			 	if ($a==20 && $b == 30) {
			 		echo "and operation is ok";
			 	}else{
			 		echo "Wrong";
			 	}
			 	echo "<br>";
			 	//or(one of them are true) for this operator
			 	$a = 20;
			 	$b = 30;
			 	if ($a==20 || $b == 30) {
			 		echo "or operation is ok";
			 	}else{
			 		echo "Wrong";
			 	}	
			 	echo "<br>";
			 	//xor(one of them must true & another must be false) for this operator	
			 	$a = 20;
			 	$b = 30;
			 	if ($a==20 xor $b == 40) {
			 		echo "xor operation is ok";
			 	}else{
			 		echo "Wrong";
			 	}
			 	//not(True if $x is not true) for this operator	
			 	echo "<br>";
			 	$a = 20;
			 	$b = 30;
			 	if ($a!==30) {
			 		echo "not operation is ok";
			 	}else{
			 		echo "Wrong";
			 	}				 				 		

			 ?>
			 <hr>
			 6.String
			 <hr>
			 <?php
				$a = "welcome to";
				$b = " mad world";
				$c = $a. $b;
				echo $c;
				echo "<br>";	
					//Concatenation assignment
				$a = "welcome to";
				$b = " mad world";
				$a .= $b;	
				echo $a;	

			 ?>
			 <hr>
			 7.Array
			 <hr>
			 <?php
			 //Union
			 	$x = array(
			 		"a" =>"dhaka",
			 		"b" =>"pabna",

			 	);
			 	$y = array(
			 		"c" =>"natore",
			 		"d" =>"rajsahi",

			 	);	
			 	var_dump($x+$y);



			 ?>	
			 <hr>




	    </section>   
	    <section class="footer">
			<h2>May Allah see the right Path</h2>
			
		</section>
	</div>



</body>
</html>