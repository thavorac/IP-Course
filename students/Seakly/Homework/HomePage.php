<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>

	.center{
		text-align: center;
		border: 1px solid;
		padding: 10px;
		margin: 20px;
		
		
	}
	table{
		border: 1px solid ;
	}
	.t1{
		background-color: darkgray;
	}
	.t2{
		background-color: #DFDFDF;
	}
	.sum{
		font-size: 30px;
		display: block;
	}
	ul{
		list-style-type: none;
		width: 90%;
		margin: 0 auto;
		display: inline-block;
		
	}
	li {
		float: left;
		width: 20%;
		height: 60px;
		border: 2px solid;
		margin: 20px;
		text-align: center;
		
	
	}

	</style>
<body>

	<P>Home | <a href="My_Posts.php">My Posts</a></P>
	<h1>Welcome to my blog!</h1>
	
	<select style="float: right; margin-top: 12px">
		<option>This Month</option>
		<option>Last Month</option>
	</select>
	<p style="font-weight: 1000; font-size: 25px">Total Impression</p>
		<ul>
			<li><i class="fa fa-users sum"></i>
		   90 Visitor</li>
			<li><i class="fa fa-thumbs-up sum"></i>30 Likes</li>
			<li><i class="fa fa-thumbs-down sum"></i>10 Dislikes</li>
		</ul>
<div class="head">
	
	<h3>Visitor's history</h3>
	<table border="1px" cellspacing="0" width="100%" cellpadding="4px" >
		<tr class="t1">
			<td>Time</td>
			<td>Visiting page</td>
			<td>Impression</td>
			<td>visiting device</td>
		</tr>
		<tr class="t2">
			<td>Yesterday 3pm</td>
			<td>Homepage</td>
			<td>good</td>
			<td>Chrome</td>
		</tr>
		<tr>
			<td>Yesterday 5pm</td>
			<td>Post 1</td>
			<td>good</td>
			<td>iPad</td>
		</tr>
		<tr class="t2">
			<td>Today 7am</td>
			<td>Post 2</td>
			<td></td>
			<td>Firefox</td>
		</tr>
	</table>
	
</div>
</body>
</html>