<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
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

    // buat query update
    $sql = "UPDATE msiswa SET nis='$nis', nama_siswa='$nama_siswa', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', alamat='$alamat', no_hp='$no_hp', foto='$foto', id_kelas='$id_kelas', asal_sekolah='$asal_sekolah', nama_ortu='$nama_ortu', pekerjaan_ortu='$pekerjaan_ortu' WHERE nis='$nis'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data_siswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>