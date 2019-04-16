<?php
//$fonts = "arial";
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Conditional Statement</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div  class="phpcoding">
		<section class="header">
			<h2>بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ </h2>
			
		</section>
		<section class="maincontent">
			<hr>
if statement - executes some code if one condition is true<br>
if...else statement - executes some code if a condition is true and another code if that condition is false<br>
if...elseif...else statement - executes different codes for more than two conditions<br>
switch statement - selects one of many blocks of code to be executed
			<hr>
			if statement
			<hr>			
			<?php
				$x = 10;
				if ($x>5) {
					echo "ok";
				}
	       
	        ?>
			<hr>
			if...else statement
			<hr>			
			<?php
				$x = 15;
				if ($x>20) {
					echo "ok";
				}else{
					echo "not ok";
				}
	       
	        ?>
	        <hr>
			if...elseif...else  statement
			<hr>			
			<?php
				$x = 15;
				if ($x>20) {
					echo "x is greater than 20";
				}elseif ($x>18) {
					echo "x is greater than 20";
				}
				elseif ($x>22) {
					echo "x is greater than 22";
				}
				else{
					echo "pleae enter the value less than 15";
				}
	       
	        ?>	
	        <hr>
	        switch statement
	        <hr>
	        <?php
	        	$x = "php";
	        	switch ($x) {
	        		case "html":
	        			echo "hello";
	        		break;
	        		case "css":
	        			echo "hi";
	        		break;
	        		case "php":
	        			echo "hurrah i got it";
	        		break;	        			        		
	        		
	        		default:
	        			echo "oops";
	        			break;
	        	}


	        ?>        

	    </section>   
	    <section class="footer">
			<h2>May Allah see the right Path</h2>
			
		</section>
	</div>



</body>
</html>