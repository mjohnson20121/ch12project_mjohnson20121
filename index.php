<!-- Michael Johnson
     04/24/2026
     Project: Searching a Databse with PHP and MySQL
     index.php
 -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Email Lookup</title>
		<link rel="stylesheet" type="text/css" href="styles/main.css">
	</head>
	<body>
		<div class="container">
			<h1>Project: Searching a Database with PHP and MySQL</h1> 
			<p>Michael Johnson</p>
			<p>04/24/2026</p>

			<div id='email_input'>
				<form action='results.php' method="post">
					<label for="s_email">Student Email:</label>
					<input type="email" required id="s_email" name="s_email" /><br><br>
					<input type="submit" value="Submit" />
				</form>	
			</div>
		</div> 
		
	</body>
</html>