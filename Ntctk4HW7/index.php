<!DOCTYPE html>

<html>

	<head>

		<title>Assignment 7</title>	
		<style>
			h1, #pics
			{
				text-align: center;
			}

			#pics > img
			{
				height: 150px;
			}
		</style>
	</head>
	<body>
		<h1>Animal Photos<h1>

		<div id="pics">
			<?php


			foreach(glob("*.jpg") as $filename)
			{
				print'<img src="' . $filename . '" alt="wallaby pic">';	
			}

			?>
		</div>
	</body>
</html>
