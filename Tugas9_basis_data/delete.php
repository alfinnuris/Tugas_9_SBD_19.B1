<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$id_penghuni = $_GET['id_penghuni'];
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM tamu_hotel WHERE id_penghuni=$id_penghuni");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>