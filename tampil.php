<?php 
include 'function/connection.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
</head>
<body>
    <table border="1" cellpadding="6" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>EMAIL</th>
        </tr>
        <!-- tampil data -->
        <?php 
        $result = mysqli_query($conn, "SELECT * FROM tbl_siswa");
        // tampilan hasil menggunakan looping while
        while ($tampil = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <td><?php echo $tampil['nim'];  ?></td>
            <td><?php echo $tampil['nama'];  ?></td>
            <td><?php echo $tampil['alamat'];  ?></td>
            <td><?php echo $tampil['email'];  ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>