<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $alamat = $_POST["alamat"];
    $gender = $_POST["gender"];
    $agama = $_POST["agama"];
    $sekolah = $_POST["sekolah"];

    $sql = "INSERT INTO siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES (?, ?, ?, ?, ?)";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssss", $name, $alamat, $gender, $agama, $sekolah);

    if ($stmt->execute()) {
        $koneksi->close();
        header("Location: index.php?success=true");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
