<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id_penghuni = $_POST['id_penghuni'];
	
	$id_penghuni=$_POST['id_penghuni'];
	$nama_penghuni=$_POST['nama_penghuni'];
	$tgl_lahir=$_POST['tgl_lahir'];
    $status_penghuni=$_POST['status_penghuni'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE tamu_hotel SET nama_penghuni='$nama_penghuni',tgl_lahir='$tgl_lahir',status_penghuni='$status_penghuni' WHERE id_penghuni=$id_penghuni");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_penghuni = $_GET['id_penghuni'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM tamu_hotel WHERE id_penghuni=$id_penghuni");
 
while($user_data = mysqli_fetch_array($result))
{
	$id_penghuni = $user_data['id_penghuni'];
	$nama_penghuni = $user_data['nama_penghuni'];
	$tgl_lahir = $user_data['tgl_lahir'];
	$status_penghuni = $user_data['status_penghuni'];
}
?>
<html>
<head>	
	<title>EDIT USER DATA</title>
</head>
 
<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>ID penghuni</td>
				<td><input type="text" name="id_penghuni"></td>
			</tr>
			<tr> 
				<td>Nama penghuni</td>
				<td><input type="text" name="nama_penghuni"></td>
			</tr>
			<tr> 
				<td>Tanggal Lahir</td>
				<td><input type="text" name="tgl_lahir"></td>
			</tr>
			<tr> 
				<td>Status</td>
				<td><input type="text" name="status_penghuni"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id_penghuni" value=<?php echo $_GET['id_penghuni'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>