<?php
  echo "<!DOCTYPE html>
<html>
<head>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
	<div>
		<table>
			<tr>
				<th style='padding: 10px'>Home</th>
				<th style='border-left: 3px solid black; padding-left: 10px'><a href=http://127.0.0.1/Practice/mypost.php>My posts</a></th>.
			</tr>
		</table>
		<h1>Welcome to my blog!</h1>
		<table style='width: 100%'>
			<tr>
				<th><h2>Total Impression</h2></th>
				<th></th>
				<th></th>
				<th></th>

				<th style='text-align: right'>
					<label for='month'></label>
					<select id='month'>
						<option value='This month'>This month</option>
						<option value='Last month'>Last month</option>
						<option value='This year'>This year</option>
						<option value='Last year'>Last year</option>
					</select>
				</th>
			</tr>
			<tr>
				<td style='border: 3px solid black; text-align: center; width: 20%; height: 150px'>
					<i style='font-size: 50px' class='fas'>&#xf0c0;</i>
					<br><br>390 Visitors
				</td>
				<td colspan='1' style='width: 5%'></td>
				<td style='border: 3px solid black; text-align: center; width: 20%; height: 150px'>
					<i style='font-size: 50px' class='fas'>&#xf164;</i>
					<br><br>28 Likes
				</td>
				<td colspan='1' style='width: 5%'></td>
				<td style='border: 3px solid black; text-align: center; width: 20%; height: 150px'>
					<i style='font-size: 50px' class='fas'>&#xf165;</i>
					<br><br>12 Dislikes
				</td>
			</tr>
			<tr>
				<br><br>
				<th>
					<h2>Visitor's history</h2>
				</th>
			</tr>
		</table>
		</div>
		<div style='border: 3px solid black; text-align: center; margin: auto'>
		<table style='width: 100%; border-collapse: collapse'>
			<tr>
				<th style='padding-bottom: 10px; background-color: darkgrey'>Time</th>
				<th style='border-left: 3px solid black; padding-bottom: 10px; background-color: darkgrey'>Visiting page</th>
				<th style='border-left: 3px solid black; padding-bottom: 10px; background-color: darkgrey'>Impression</th>
				<th style='border-left: 3px solid black; padding-bottom: 10px; background-color: darkgrey'>Visiting device</th>
			</tr>
			<tr>
				<td style='padding-bottom: 10px; background-color: lightgrey'>Yesterday 3pm</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>Homepage</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>good</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>Chrome</td>
			</tr>
			<tr>
				<td style='padding-bottom: 10px'>Yesterday 5pm</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px'>Post 1</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px'>good</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px'>iPad</td>
			</tr>
			<tr>
				<td style='padding-bottom: 10px; background-color: lightgrey'>Today 7am</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>Post 2</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'></td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>Firefox</td>
			</tr>
		</table>
	</div>
</body>
</html>";
 ?>
