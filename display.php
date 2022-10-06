<?php 
$Fname = $_POST['Fname'];
$MI = $_POST['MI'];
$Lname = $_POST['Lname'];
$status = $_POST['status'];
$Uname = $_POST['Uname'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Result</title>
	<script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
	<div class="text-center">
		<h1 class="mb-6 inline-block text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200 py-20 pb-1">Result</h1>
		<div class="mt-2 text-lg text-slate-700 dark:text-slate-400">
		<div id="content" >
		<label>Firstame:</label>
		<span><?php echo $Fname; ?></span><br>

		<label>Middle Initial:</label>
		<span><?php echo $MI; ?></span><br>

		<label>Lastname:</label>
		<span><?php echo $Lname; ?></span><br>

		<label>Gender:</label>
		<span><?php echo $status; ?></span><br>

		<label>Username:</label>
		<span><?php echo $Uname; ?></span><br>

		<label>Password:</label>
		<span><?php echo $pass; ?></span><br>

		<label>Confirm Password:</label>
		<span><?php echo $cpass; ?></span>
	</div>
	</div>
	</div>
</body>
</html>