<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "DELETE FROM siswa WHERE id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $koneksi->close();
        header("Location: list.php?delete_success=true");
        exit;
    } else {
        echo "Error deleting record: " . $koneksi->error;
    }
} else {
    header("Location: list.php");
    exit;
}
