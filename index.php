<html>
  <head>
    <!-- 	Meta Data	 -->
		<meta charset="UTF-8">
		<meta name="Van" content="My website in PHP">
		<meta name="keywords" content="immaculata, ics2o">
		<meta name="DESCRIPTION" content="Website for calculating volume of triangular pyramid">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png" />
    <link rel="manifest" href="./fav_index/site.webmanifest" />
    <title>My PHP website calculating Volume of a triangular pyramid</title>
    <!-- Links to style.css file -->
		<link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
		<!-- Heading and paragraph -->
    <?php
			echo '<center><h1>Volume of a triangular pyramid in PHP</h1></center><br>';
			echo "<p>This website allows you to calculate the Volume of a Triangular Pyramid! <br> Enter the following below:</p>";
		?>
		<!-- Text field and button (Takes Input) -->
		<form method = "post">
			Height of Pyramid (cm): <input type="float" name="height">   
			<br><br>   
			Length of Base (cm): <input type="float" name="length-of-base">
			<br><br>
      Height of Base (cm): <input type="float" name="height-of-base"> <br>
			<br><br>
			<input type = "submit" name = "submit" value="Calculate Volume">
		<!-- Calculations for area (With User Input) -->
		<?php
			if(isset($_POST['submit'])) {
				$height = $_POST['height']; // Input for Height
				$lengthOfBase = $_POST['length-of-base']; // Input for the Length of the Base
        $heightOfBase = $_POST['height-of-base']; // Input for the Height of the Base
				$volume = 1 / 6 * $lengthOfBase * $heightOfBase * $height; // Calculations for Volume
				$volume = number_format($volume, 2); // Rounds to nearest hundredth 
				echo "<br><br><h4>The Volume of this Triangular Pyramid is " . $volume . "cm<sup>3</sup></h4><br>"; // Outputs Volume
			}
		?>
  </body>
</html>