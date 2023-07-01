<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Mendapatkan data dari form
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $nilai3 = $_POST['nilai3'];

    // Validasi form
    if (empty($nama) || empty($email) || empty($nilai1) || empty($nilai2) || empty($nilai3)) {
        header("Location: index.php?error=Semua form harus diisi");
        exit;
    }

    if (!is_numeric($nilai1) || !is_numeric($nilai2) || !is_numeric($nilai3)) {
        header("Location: index.php?error=Nilai harus berupa angka");
        exit;
    }

    // Menghitung rata-rata
    $rata_rata = ($nilai1 + $nilai2 + $nilai3) / 3;

    // Mengirim hasil kembali ke halaman index.php
    header("Location: index.php?rata_rata=$rata_rata&nama=$nama&email=$email");
    exit;
}
?>
