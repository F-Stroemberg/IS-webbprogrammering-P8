
<?php
  date_default_timezone_Set('Europe/Stockholm');
	include_once 'header.php';
	include 'includes/dbh.inc.php';
 ?>

<section class="main-container">
	<div class="main-wrapper">

    <!DOCTYPE html>
    <html>
    <head>
    	<title></title>
    	<link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
      <!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="latch">
        <a href="signup.php"><button class="btn"><i class="fa fa-user"></i></i> Create Profile</button></a>
        <a href="event.php"><button class="btn"><i class="fa fa-calendar"></i> Create Event</button></a>
        <button class="bcs"><i class="fa fa-search"></i> Search Event</button>
      </div>




			<?php
				//Here we display a message if we are logged in!
				if (isset($_SESSION['u_id'])) {
          header("Location:indexcomment.php");
    			exit();
				}
			?>


</div>
</section>

<?php
	include_once 'footer.php';
?>
