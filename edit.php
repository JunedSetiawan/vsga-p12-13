<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM siswa WHERE id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        $name = $row['nama'];
        $alamat = $row['alamat'];
        $gender = $row['jenis_kelamin'];
        $agama = $row['agama'];
        $sekolah = $row['sekolah_asal'];
    } else {
        echo "Student not found.";
        exit;
    }

    $stmt->close();
    $result->free();
} else {
    header("Location: list.php");
    exit;
}
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="bg-white dark:bg-gray-900">
        <nav class="border-t-4 border-blue-500">
            <div class="container flex items-center justify-between px-6 py-3 mx-auto">
                <a href="index.php">
                    <p class="text-3xl font-semibold text-gray-600 dark:text-white">VSGA</p>
                </a>

                <a class="my-1 text-lg font-medium text-gray-500 rtl:-scale-x-100 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 lg:mx-4 lg:my-0" href="#">
                    P-12
                </a>
            </div>
        </nav>
    </header>
    <div class="container px-6 mx-auto">
        <section class="text-gray-600 body-font">
            <div class="container px-5 mx-auto flex flex-wrap items-center">
                <div class="lg:w-1/2 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
                    <h1 class="title-font font-medium text-3xl text-gray-900">Edit Siswa Digital Talent</h1>

                </div>
                <div class="lg:w-1/2 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                    <h2 class="text-gray-900 text-lg font-medium title-font mb-3">Edit</h2>
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <div class="relative mb-2">
                            <label for="name" class="leading-7 text-sm text-gray-600">Nama</label>
                            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $name; ?>">
                        </div>
                        <div class="relative mb-2">
                            <label for="alamat" class="leading-7 text-sm text-gray-600">Alamat</label>
                            <textarea id="alamat" name="alamat" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"><?php echo $alamat; ?></textarea>
                        </div>
                        <div class="relative mb-2 space-x-2">
                            <p>Jenis Kelamin</p>
                            <label for="l" class="leading-7 text-sm text-gray-600">Laki-Laki</label>
                            <input type="radio" id="l" name="gender" value="laki-laki" class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" <?php if ($gender === 'laki-laki') echo 'checked'; ?>>
                            <label for="m" class="leading-7 text-sm text-gray-600">Perempuan</label>
                            <input type="radio" id="m" name="gender" value="perempuan" class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" <?php if ($gender === 'perempuan') echo 'checked'; ?>>
                        </div>
                        <div class="relative mb-2">
                            <label for="agama" class="leading-7 text-sm text-gray-600">Agama</label>
                            <select id="agama" name="agama" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="">Pilih Agama</option>
                                <option value="Islam" <?php if ($agama === 'Islam') echo 'selected'; ?>>Islam</option>
                                <option value="Kristen" <?php if ($agama === 'Kristen') echo 'selected'; ?>>Kristen</option>
                                <option value="Hindu" <?php if ($agama === 'Hindu') echo 'selected'; ?>>Hindu</option>
                                <option value="Buddha" <?php if ($agama === 'Buddha') echo 'selected'; ?>>Buddha</option>
                                <option value="Lainnya" <?php if ($agama === 'Lainnya') echo 'selected'; ?>>Lainnya</option>
                            </select>
                        </div>
                        <div class="relative mb-2">
                            <label for="sekolah" class="leading-7 text-sm text-gray-600">Sekolah Asal</label>
                            <input type="text" id="sekolah" name="sekolah" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" value="<?php echo $sekolah; ?>">
                        </div>
                        <button type="submit" class="w-full text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Simpan Edit</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <div class="inset-x-0 bottom-0">
        <div class="bg-indigo-600 px-4 py-3 text-white">
            <p class="text-center text-sm font-medium">
                Created By
                <a href="https://github.com/JunedSetiawan" class="inline-block underline">
                    Juned Setiawan S
                </a>
            </p>
        </div>
    </div>
</body>

</html>