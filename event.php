<?php
	include_once 'header.php';
?>

<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body id="eventbackground">

<section class="main-container">
	<div class="main-wrapper">
		<form class="signup-form" action="includes/signup.inc.php" method="POST">
			<input type="text" name="first" placeholder= "Name of event">
			<input type="text" name="last" placeholder="Location">
			<input type="text" name="email" placeholder="Time">
			<input type="text" name="uid" placeholder="Description">
			<button type="submit" name="submit">Create Event</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
</body>
</html>
