<!DOCTYPE html>
<html>
<head>
	<title>PHP Array</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div  class="phpcoding">
		<section class="header">
			<h2>بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ </h2>
			
		</section>
		<section class="maincontent">


			<hr>
			ARRAY
			<hr>
			<?php 
/*An array is a special variable, which can hold more than one value at a time.
In PHP, there are three types of arrays:

Indexed arrays - Arrays with a numeric index
Associative arrays - Arrays with named keys
Multidimensional arrays - Arrays containing one or more arrays*/
				//index array

				$x = array(0,1,2,3,4,5);
				echo "array length is ". count($x);//find out array length
				echo "<br>";
				$length = count($x);
				for ($i=0; $i <$length ; $i++) { 
					echo "show all array ". $x[$i];
					echo "<br>";
				}
				/*$x[0] = 0;
				$x[1] = 1;
				$x[2] = 2;
				$x[3] = 3;
				$x[4] = 4;
				$x[5] = 5;*/
				


			 ?>
			 <hr>
			 Associative Arrays
			 <hr>
			 <?php 

			 		$arr = array("imtiaj"=>"22","wali"=>"23","shunno"=>"20");

			 	

			 		foreach ($arr as $Name => $age) {
			 			echo "Name  = ". $Name. ", age = ". $age;
			 			echo "<br>";
			 		}


			  ?>
			 <hr>
			 Multidimensional Arrays
			 <hr>
				<?php
						$data = array(
									array(
										'id' 	=> 1,
										'class' => 2,
										'name'  => "rohim",
										'section'=> "a"
									),
									array(
										'id' 	=> 1,
										'class' => 3,
										'name'  => "korim",
										'section'=> "a"
									),
									array(
										'id' 	=> 1,
										'class' => 4,
										'name'  => "abed",
										'section'=> "a"
									),
									array(
										'id' 	=> 1,
										'class' => 5,
										'name'  => "rohim2",
										'section'=> "a"
									)
								);

						echo "for individual check ". $data[1]["class"];
						echo "<br>";
							
						foreach($data as $newData){
							echo "id is : ".$newData['id']." class is ".$newData['class']." name is ".$newData['name']." section is ".$newData['section']."<br>";
							
						}

				?>
			
	    </section>   
	    <section class="footer">
			<h2>May Allah see the right Path</h2>
			
		</section>
	</div>



</body>
</html>