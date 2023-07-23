<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
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
                    <h1 class="title-font font-medium text-3xl text-gray-900">Formulir Pendaftaran Siswa Digital Talent</h1>

                </div>
                <div class="lg:w-1/2 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
                    <h2 class="text-gray-900 text-lg font-medium title-font mb-3">Daftar</h2>
                    <form action="simpan.php" method="post">
                        <div class="relative mb-2">
                            <label for="name" class="leading-7 text-sm text-gray-600">Nama</label>
                            <input type="text" id="name" name="name" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-2">
                            <label for="alamat" class="leading-7 text-sm text-gray-600">Alamat</label>
                            <textarea id="alamat" name="alamat" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                        <div class="relative mb-2 space-x-2">
                            <p>Jenis Kelamin</p>
                            <label for="l" class="leading-7 text-sm text-gray-600">Laki-Laki</label>
                            <input type="radio" id="l" name="gender" value="laki-laki" class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            <label for="m" class="leading-7 text-sm text-gray-600">Perempuan</label>
                            <input type="radio" id="m" name="gender" value="perempuan" class="bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative mb-2">
                            <label for="agama" class="leading-7 text-sm text-gray-600">Agama</label>
                            <select id="agama" name="agama" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                <option value="">Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Lainnya">Lainnya</option>
                            </select>
                        </div>
                        <div class="relative mb-2">
                            <label for="sekolah" class="leading-7 text-sm text-gray-600">Sekolah Asal</label>
                            <input type="text" id="sekolah" name="sekolah" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <button type="submit" class="w-full text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Daftar</button>
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