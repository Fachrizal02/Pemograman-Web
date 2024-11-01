<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata mahasiswa</title>
</head>
<body>
<h1>Biodata Mahasiswa</h1>
    <a href="form_tambah.php">Tambah Mahasiswa</a>
    <br>
    <table border="1">
    <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Prodi</th>
            <th>Action</th>
    </tr>

        <?php
        $query = "SELECT * FROM biodata order by npm ASC";
        $result = $mysqli->query($query);
        $no=0;
        while($row = $result->fetch_assoc()){
            $no++;
        ?>
        <tr>
            <td><?= $no;?></td>
            <td><?= $row['Npm'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['prodi'];?></td>
            <td>
                <a href="<?= 'form_edit.php?id='.$row['id'];?>">Edit</a>
                <a href="<?= 'hapus.php?id='.$row['id'];?>">Hapus</a>
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>