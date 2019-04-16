

<!DOCTYPE html>
<html>
<head>
	<title>PHP CONSTANT</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div  class="phpcoding">
		<section class="header">
			<h2>بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ </h2>
			
		</section>
		<section class="maincontent">

			<?php

			/*define("value", "i'm a imtiaj",true);declare a constant, it's a case senitive control by using true or false. it's also a global acess.
			echo VALUE;*/

			define("value","i'm a imtiaj");

			function PHP()
			{
				return value;//if use return then must be use in echo in function
			}

			echo PHP();


	        ?>

	    </section>   
	    <section class="header">
			<h2>May Allah see the right Path</h2>
			
		</section>
	</div>



</body>
</html>