<?php

include("config.php");

// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id_nilai_siswa = $_POST['id_nilai_siswa'];
    $nis = $_POST['nis'];
    $id_matpel = $_POST['id_matpel'];
    $id_kelas = $_POST['id_kelas'];
    $id_guru = $_POST['id_guru'];
    $id_tahun_ajaran = $_POST['id_tahun_ajaran'];
    $id_semester = $_POST['id_semester'];
    $nilai_harian1 = $_POST['nilai_harian1'];
    $nilaiharian2 = $_POST['nilaiharian2'];
    $nilaiharian3 = $_POST['nilaiharian3'];
    $nilai_tugas1 = $_POST['nilai_tugas1'];
    $nilai_tugas2 = $_POST['nilai_tugas2'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
   

    // buat query update
    $sql = "UPDATE tnilai_siswa SET id_nilai_siswa='$id_nilai_siswa', nis='$nis', id_matpel='$id_matpel', id_kelas='$id_kelas', id_guru='$id_guru', id_tahun_ajaran='$id_tahun_ajaran', id_semester='$id_semester', nilai_harian1='$nilai_harian1', nilaiharian2='$nilaiharian2', nilaiharian3='$nilaiharian3', nilai_tugas1='$nilai_tugas1', nilai_tugas2='$nilai_tugas2', nilai_uts='$nilai_uts', nilai_uas='$nilai_uas' WHERE id_nilai_siswa='$id_nilai_siswa'";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: nilaisiswa.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>