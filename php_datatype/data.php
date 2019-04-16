

<!DOCTYPE html>
<html>
<head>
	<title>PHP DATA_TYPE</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div  class="phpcoding">
		<section class="header">
			<h2>بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ </h2>
			
		</section>
		<section class="maincontent">
						data type 
						<hr/>
			1.string
			2.integer
			3.float
			4.boolean
			5.array
			6.object
			7.null
			8.resource
			<br/>
			<hr/>

			1.String

			<br/>
		
			<?php

			$x = 'PHP is nice';
			echo strlen($x); //how many characters or string length
			echo "<br/>";
			echo str_word_count($x);//word count in string
			echo "<br/>";
			echo strrev($x);
			echo "<br/>";
			echo strpos($x, "nice");//find out word position
			echo str_replace("PHP", "JAVA", $x);
	        ?>
	        <br/>
	        <hr/>
	        2.Integer
	        <br/>
	        <?php

	        $x = '2';
	        echo $x;

	        ?>
	    </section>   
	    <section class="footer">
			<h2>May Allah see the right Path</h2>
			
		</section>
	</div>



</body>
</html>