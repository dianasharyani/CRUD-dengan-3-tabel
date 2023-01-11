<?php
include("koneksi.php");

if(isset($_POST['tambah'])){
    $nama=$_POST['no'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
    $tahun=$_POST['tahun'];
    $nominal=$_POST['nominal'];

    $sql  = "INSERT INTO tb_siswa (nama, kelas)
    VALUES ('$nama', '$kelas')";
     $query = mysqli_query($conn,$sql);
     
     $sql = "INSERT INTO tb_jurusan (nama_jurusan)
     VALUES ('$nama_jurusan')";
      $query = mysqli_query($conn,$sql);
     
     $sql = "INSERT INTO tb_spp (tahun, nominal)
     VALUES ('$tahun', '$nominal')";

     $query = mysqli_query($conn,$sql);

    if($query){
        header('Location:join_table.php?status=sukses');
    }else{
        header('Location:join_table.php?status=gagal');
    }
    }
    ?>