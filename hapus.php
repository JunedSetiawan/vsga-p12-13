<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];

    // Prepare the DELETE statement
    $sql = "DELETE FROM siswa WHERE id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id);

    // Execute the DELETE statement
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
?>