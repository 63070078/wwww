<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'lastlab.mysql.database.azure.com', 'it63070078@lastlab', 'FOFcxd53', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "DELETE FROM guestbook WHERE id =1";

if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
