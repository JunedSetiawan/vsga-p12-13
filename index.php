<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Digital Talent</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    // Cek apakah ada parameter "success" pada URL
    if (isset($_GET['success']) && $_GET['success'] === 'true') {
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
                        Berhasil Menambahkan Data Siswa
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
                <a href="#">
                    <p class="text-3xl font-semibold text-gray-600 dark:text-white">VSGA</p>
                </a>

                <a class="my-1 text-lg font-medium text-gray-500 rtl:-scale-x-100 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 lg:mx-4 lg:my-0" href="#">
                    P-12
                </a>
            </div>
        </nav>
        <div class="container px-6 py-16 mx-auto">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <section class="bg-white dark:bg-gray-900">
                            <div class="container flex flex-col items-center px-4 py-12 mx-auto text-center">
                                <h2 class="text-2xl font-bold tracking-tight text-gray-800 xl:text-3xl dark:text-white">
                                    Pendaftaran Siswa Baru
                                    <p>Digital Talent</p>
                                </h2>

                                <p class="block max-w-4xl mt-4 text-gray-500 dark:text-gray-300">
                                    Menu
                                </p>

                                <div class="mt-6">
                                    <a href="daftar.php" class="inline-flex items-center justify-center w-full px-4 py-2.5 overflow-hidden text-sm text-white transition-colors duration-300 bg-gray-900 rounded-lg shadow sm:w-auto sm:mx-2 hover:bg-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80">
                                        <span class="mx-2">
                                            Daftar Baru
                                        </span>
                                    </a>

                                    <a href="list.php" class="inline-flex items-center justify-center w-full px-4 py-2.5 mt-4 overflow-hidden text-sm text-white transition-colors duration-300 bg-blue-600 rounded-lg shadow sm:w-auto sm:mx-2 sm:mt-0 hover:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">

                                        <span class="mx-2">
                                            Lihat Pendaftar
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                    <img class="w-full h-full max-w-md" src="https://merakiui.com/images/components/Email-campaign-bro.svg" alt="email illustration vector art">
                </div>
            </div>
        </div>
    </header>
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
        const status = urlParams.get('success');

        // Periksa apakah parameter status adalah 'success', jika ya, tampilkan pesan berhasil
        if (status === 'true') {
            // Hapus parameter status dari URL tanpa melakukan reload halaman
            history.replaceState(null, null, window.location.pathname);
        }
    </script>
</body>

</html>