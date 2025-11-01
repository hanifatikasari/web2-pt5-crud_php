<?php 
include 'database.php';
$db = new Database();

// var_dump($_GET['aksi']); //uji coba klik tombol simpan
//membuat variable aksi, digunakan untuk menagkap aktifitas yang dilakukan oleh user
$aksi = $_GET['aksi'];

if ($aksi == "tambah"){
    // pengujian kirim data
    //var_dump($_POST['nama']);

    // ----tambah data ke database
    $db->tambahData($_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    //mengarahkan tampilan ke index.php
    header("location:index.php");
    
} elseif ($aksi == "update"){
    //---- update data ke database
    $db->updateData($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    //mengarahkan tampilan ke index.php
    header("location:index.php");
} elseif ($aksi == "hapus") {
    $db->hapusData($_GET['id']);
    header("location:index.php");
}

