<?php 
include 'connection.php';
if (isset($_POST['save'])) {
    $txt_nim= $_POST['nim'];
    $txt_nama = $_POST['nama'];
    $txt_alamat = $_POST['alamat'];
    $txt_email = $_POST['mail'];

    $sql_simpan = "INSERT INTO  tbl_siswa values ('','$txt_nim','$txt_nama','$txt_alamat','$txt_email')";
    $simpan = mysqli_query($conn, $sql_simpan);
            if ($simpan){
                echo "
                    <script>
                    alert('Data Tersimpan');
                    document.location.href = '../add.php'
                    </script>";

            } else {
                echo "
                    <script>
                    alert('Data Tidak Tersimpan');
                    document.location.href = '../add.php'
                    </script>";
            }
}