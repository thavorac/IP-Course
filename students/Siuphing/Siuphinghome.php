<?php

  $visitor = 200;
  $like = 20;
  $dislike = 10;
  $visitorHistory = array(
                          array("Time" => "Yesterday 3pm", "VisitingPage" => "Homepage", "Impression" => "good", "VisitingDevice"=> "Chrome"),
                          array("Time" => "Yesterday 5pm", "VisitingPage" => "Post 1", "Impression" => "good", "VisitingDevice"=> "iPad"),
                          array("Time" => "Today 7am", "VisitingPage" => "Post 2", "Impression" => " ", "VisitingDevice"=> "Firefox"),
                        );
echo "
  <!DOCTYPE html>
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
					<br><br>$visitor Visitors
				</td>
				<td colspan='1' style='width: 5%'></td>
				<td style='border: 3px solid black; text-align: center; width: 20%; height: 150px'>
					<i style='font-size: 50px' class='fas'>&#xf164;</i>
					<br><br>$like Likes
				</td>
				<td colspan='1' style='width: 5%'></td>
				<td style='border: 3px solid black; text-align: center; width: 20%; height: 150px'>
					<i style='font-size: 50px' class='fas'>&#xf165;</i>
					<br><br>$dislike Dislikes
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
				<td style='padding-bottom: 10px; background-color: lightgrey'>$visitorHistory[0][Time]</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>$visitorHistory[0][VisitingPage]</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>$visitorHistory[0][Impression]</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>$visitorHistory[0][VisitingDevice]</td>
			</tr>
			<tr>
				<td style='padding-bottom: 10px'>$visitorHistory[1][Time]</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px'>$visitorHistory[1][VisitingPage]</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px'>$visitorHistory[1][Impression]</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px'>$visitorHistory[1][VisitingDevice]</td>
			</tr>
			<tr>
				<td style='padding-bottom: 10px; background-color: lightgrey'>$visitorHistory[2][Time]</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>$visitorHistory[2][VisitingPage]</td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'></td>
				<td style='border-left: 3px solid black; padding-bottom: 10px; background-color: lightgrey'>$visitorHistory[2][Firefox]</td>
			</tr>
		</table>
	</div>
</body>
</html>";
 ?>
