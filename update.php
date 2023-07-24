<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $alamat = $_POST["alamat"];
    $gender = $_POST["gender"];
    $agama = $_POST["agama"];
    $sekolah = $_POST["sekolah"];

    $sql = "UPDATE siswa SET nama=?, alamat=?, jenis_kelamin=?, agama=?, sekolah_asal=?  WHERE id=?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("sssssi", $name, $alamat, $gender, $agama, $sekolah, $id);

    if ($stmt->execute()) {
        $koneksi->close();
        header("Location: list.php?update_success=true");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }

    $koneksi->close();
}
