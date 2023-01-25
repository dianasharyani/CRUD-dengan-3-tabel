<?php
include("koneksi.php");
if(isset($_POST['kirim_bayar'])){
    $Nama=$_POST['nama'];
    $Kelas=$_POST['kelas'];
    $Nama_Jurusan=$_POST['nama_jurusan'];
    $Tahun=$_POST['tahun'];
    $Nominal=$_POST['nominal'];

    $sql = "UPDATE tb_siswa SET nama='$Nama', kelas='$Kelas' WHERE id_siswa='$id'";
    $query = mysqli_query($koneksi, $sql);

    $sql = "UPDATE tb_jurusan SET nama_jurusan='$Nama_Jurusan' WHERE id_siswa='$id'";
    $query = mysqli_query($koneksi, $sql);

    $sql = "UPDATE tb_spp SET tahun='$Tahun', nominal='$Nominal' WHERE id_siswa='$id'";
    $query = mysqli_query($koneksi, $sql);

    if($query){
        header('location:join-tabel.php');
    } else{
        die ("gagal memuat");
    } }
    else{
        die ("akses dilarang");
    }
    ?>