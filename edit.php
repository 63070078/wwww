<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'lastlab.mysql.database.azure.com', 'it63070078@lastlab', 'FOFcxd53', 'ITFLab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL PLEASE TRY AGAIN: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];


$sql = "UPDATE guestbook SET Comment ='$comment' WHERE Name='$name' ";


if (mysqli_query($conn, $sql)) {
    echo "Edited successfully!";
    echo '<a href="https://tanat.azurewebsites.net/show.php"> click here to open first page </a>';
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
