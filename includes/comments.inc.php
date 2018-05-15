<?php

/*Comment-function: Skapar funktionen för att kunna skicka kommentarer till databasen*/
function setComments($conn) {
  if (isset($_POST['commentSubmit'])) {
    $user_uid = $_POST['user_uid'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    /*Inserts into database*/
    $sql = "INSERT INTO comments (user_uid, date, message)
    VALUES ('$user_uid', '$date', '$message')";
    $result = mysqli_query($conn, $sql);
  }
}

function getComments($conn) {
  $sql = "SELECT * FROM comments";
  $result = mysqli_query($conn, $sql);
/*Creates a while-loop inorder to echo out all comments*/
  while($row = $result ->fetch_assoc()){
    $user_uid = $row['user_uid'];

    $sql2 = "SELECT * FROM users WHERE user_id='".$user_uid."'";
    $result2 = mysqli_query($conn, $sql2);

    if ($row2 = $result2 -> fetch_assoc()) {
      echo "<div class = 'comment-box'><p>";
      echo "<div class = 'boldid'>";
      echo $row2['user_uid']."<br></div>";
      echo $row['date']."<br>";
      echo nl2br($row['message']); /*nl2br bryter rader*/
      echo "</p></div>";
      }
    }
  }
