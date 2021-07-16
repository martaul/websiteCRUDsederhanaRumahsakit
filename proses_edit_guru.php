<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_guru = $_POST['id_guru'];
    $nip = $_POST['nip'];
    $nama_guru = $_POST['nama_guru'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $status_keluarga = $_POST['status_keluarga'];
    $id_jabatan = $_POST['id_jabatan'];
    $foto = $_POST['foto'];
    $status_pegawai = $_POST['status_pegawai'];
   

    // buat query update
    $sql = "UPDATE mguru SET id_guru='$id_guru', nip='$nip', nama_guru='$nama_guru', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', no_ktp='$no_ktp', status_keluarga='$status_keluarga', id_jabatan='$id_jabatan', foto='$foto', status_pegawai='$status_pegawai' WHERE id_guru='$id_guru'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data_guru.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>