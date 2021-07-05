<?php
include("koneksi.php");
// query untuk menampilkan data
$sql = 'SELECT * FROM tamu_hotel';
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Homepage</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>TUGAS 9 SISTEM BASIS DATA (CRUD)</h1>
        </header>
    <br>
            <fieldset>
        <h2>TABEL_TAMU_HOTEL</h2>
        <a href="add.php">TAMBAH TAMU HOTEL</a>
        <br><br>
            <div class="main">
            <table>
                <tr>
                    <th>ID PENGHUNI</th>
                    <th>NAMA PENGHUNI</th>
                    <th>TANGGAL LAHIR</th>
                    <th>STATUS PENGHUNI</th>
                </tr>
                <?php if($result): ?>
                <?php while($row = mysqli_fetch_array($result)): ?>
                <tr>
                    <td><?= $row['id_penghuni'];?></td>
                    <td><?= $row['nama_penghuni'];?></td>
                    <td><?= $row['tgl_lahir'];?></td>
                    <td><?= $row['status_penghuni'];?></td>
                    <td>
                        <a href="edit.php?id_penghuni=<?php echo $row['id_penghuni']; ?>">Edit</a>
                        <a href="delete.php?id_penghuni=<?php echo $row['id_penghuni']; ?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="7">Belum ada data</td>
                </tr>
                <?php endif; ?>
            </table>
            </div>
            </fieldset>
            </div>
</body>
</html>