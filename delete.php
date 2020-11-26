<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'localhost', 'panwit_panwit’, ’dsa;lk;lfdsa', 'panwit_itf', 3306);
if (mysqli_connect_errno($conn))
{
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$id = $_GET['id'];
$sql = "DELETE FROM guestbook WHERE id = $id";
if (mysqli_query($conn, $sql)) {
echo "Record deleted successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
