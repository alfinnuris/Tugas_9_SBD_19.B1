<html>
<head>
	<title>Tambah Anggota</title>
</head>
<body>
	<a href="index.php">GO TO HOME</a>
	<br/><br/>
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>ID Penghuni</td>
				<td><input type="text" name="id_penghuni"></td>
			</tr>
			<tr> 
				<td>Nama Penghuni</td>
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
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
	<?php
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$id_penghuni = $_POST['id_penghuni'];
		$nama_penghuni = $_POST['nama_penghuni'];
		$tgl_lahir = $_POST['tgl_lahir'];
		$status_penghuni = $_POST['status_penghuni'];
		
		// include database connection file
		include_once("koneksi.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO tamu_hotel(id_penghuni,nama_penghuni,tgl_lahir,status_penghuni) VALUES('$id_penghuni','$nama_penghuni','$tgl_lahir','$status_penghuni')");
		
		// Show message when user added
		echo "User added successfully. <a href='index.php'>VIEW USERS</a>";
	}
	?>
</body>
</html>