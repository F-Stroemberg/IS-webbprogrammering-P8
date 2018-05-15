<?php
  date_default_timezone_Set('Europe/Stockholm');
  include_once 'header.php';
  include 'includes\dbh.inc.php';
  include 'includes\comments.inc.php';
  //session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body id="index-comment">

<!--    <img src="dator.png" alt="Mountain View">-->

<div class="comment-post">
<?php
  if (isset($_SESSION['u_id'])) {
  echo "<form method='POST' action='".setComments($conn)."'>
      <input type='hidden' name='user_uid' value='".$_SESSION['u_id']."'>
      <textarea name='message'></textarea>
      <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
      <button type ='commentsubmit' name='commentSubmit'>Comment</button>
    </form>";
  } else{
    echo '<div class="loginerror">'."You need to be logged in to comment!".'</div>';

  }
    getComments($conn);
    ?>
  </div>




  </body>
</html>
