<?php
include 'koneksi.php';

$sql = "SELECT * FROM siswa";
$result = $koneksi->query($sql);

$no = 1;
$totalSiswa = $result->num_rows;

if ($result->num_rows > 0) {
    $rows = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $rows = array();
}

$koneksi->close();
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pendaftar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    if (isset($_GET['delete_success']) && $_GET['delete_success'] === 'true') {
        echo '
        <div id="successAlerts" role="alert" class="absolute mt-4 left-1/3 shadow-xl rounded-xl border border-gray-100 bg-white p-4 shadow-xl">
            <div class="flex items-start gap-4">
                <span class="text-green-600">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>

                <div class="flex-1">
                    <strong class="block font-medium text-gray-900"> Changes saved </strong>

                    <p class="mt-1 text-sm text-gray-700">
                        Berhasil Menghapus Data Siswa
                    </p>
                </div>

                <button id="closeButton" class="text-gray-500 transition hover:text-gray-600">
                    <span class="sr-only">Dismiss popup</span>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
        ';
    }
    ?>
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
    <div class="container px-6 py-4 mx-auto">
        <section class="container px-4 mx-auto">
            <a href="daftar.php">
                <button class="w-fit text-white bg-indigo-500 mb-4 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded-lg text-lg">Tambah Data Siswa</button>
            </a>
            <div class="flex items-center gap-x-3">

                <h2 class="text-lg font-medium text-gray-800 dark:text-white">Data Siswa</h2>

                <span class="px-3 py-1 text-sm text-blue-600 bg-blue-100 rounded-full dark:bg-gray-800 dark:text-blue-400"><?php echo $totalSiswa ?> siswa</span>
            </div>

            <div class="flex flex-col mt-6">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            <div class="flex items-center gap-x-5">
                                                No
                                                <span>Nama</span>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Alamat
                                        </th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                            Jenis Kelamin
                                        </th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Agama</th>
                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Sekolah Asal</th>

                                        <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    <?php foreach ($rows as $row) { ?>
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-5">
                                                    <?php echo $no++ ?>
                                                    <div class="flex items-center gap-x-2">
                                                        <div>
                                                            <h2 class="font-medium text-gray-800 dark:text-white"><?php echo $row['nama']; ?></h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap"><?php echo $row['alamat']; ?></td>
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap"><?php echo $row['jenis_kelamin']; ?></td>
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap"><?php echo $row['agama']; ?></td>
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap"><?php echo $row['sekolah_asal']; ?></td>
                                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                                <div class="flex items-center gap-x-6">
                                                    <a href="edit.php?id=<?php echo $row['id']; ?>">
                                                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-yellow-500 dark:text-gray-300 hover:text-yellow-500 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                            </svg>
                                                        </button>
                                                    </a>
                                                    <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('apakah yakin ingin menghapus ?')">
                                                        <button class="text-gray-500 transition-colors duration-200 dark:hover:text-red-500 dark:text-gray-300 hover:text-red-500 focus:outline-none">
                                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                            </svg>
                                                        </button>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <div class="fixed inset-x-0 bottom-0">
        <div class="bg-indigo-600 px-4 py-3 text-white">
            <p class="text-center text-sm font-medium">
                Created By
                <a href="https://github.com/JunedSetiawan" class="inline-block underline">
                    Juned Setiawan S
                </a>
            </p>
        </div>
    </div>
    <script>
        // Ambil parameter status dari URL
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('delete_success');

        // Periksa apakah parameter status adalah 'success', jika ya, tampilkan pesan berhasil
        if (status === 'true') {
            // Hapus parameter status dari URL tanpa melakukan reload halaman
            history.replaceState(null, null, window.location.pathname);
        }
    </script>
</body>

</html>