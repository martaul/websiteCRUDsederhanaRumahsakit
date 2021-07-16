<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $nis = $_POST['nis'];
    $nama_siswa = $_POST['nama_siswa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $foto = $_POST['foto'];
    $id_kelas = $_POST['id_kelas'];
    $asal_sekolah = $_POST['asal_sekolah'];
    $nama_ortu = $_POST['nama_ortu'];
    $pekerjaan_ortu = $_POST['pekerjaan_ortu'];
   

    // buat query
    $sql = "INSERT INTO msiswa (nis, nama_siswa, jenis_kelamin, tempat_lahir, tgl_lahir, alamat, no_hp, foto, id_kelas, asal_sekolah, nama_ortu, pekerjaan_ortu) VALUES ('$nis', '$nama_siswa', '$jenis_kelamin', '$tempat_lahir', '$tgl_lahir', '$alamat', '$no_hp', '$foto', '$id_kelas', '$asal_sekolah', '$nama_ortu', '$pekerjaan_ortu')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman data_guru.php dengan status=sukses
        header('Location: data_siswa.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman data_guru.php dengan status=gagal
        header('Location: data_siswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>