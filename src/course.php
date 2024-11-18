<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body class="bg-gray-900 text-white font-sans">

     <!-- Sidebar -->
<div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="index.php"><div class="p-4 text-xl font-bold text-blue-400">ILABS</div></a>


    <nav class="space-y-2 mt-28">
          <a href="dashboard.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-teal-400 rounded-full mr-3"></span> Dashboard
          </a>
          <a href="course.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-green-500 rounded-full mr-3"></span> Praktikum
          </a>
          <a href="tasks.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-blue-500 rounded-full mr-3"></span> Tugas
          </a>
          <a href="subject.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-red-500 rounded-full mr-3"></span> Materi
          </a>
          <a href="present.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-purple-500 rounded-full mr-3"></span> Presensi
          </a>
          <a href="discuss.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-yellow-500 rounded-full mr-3"></span> Diskusi
          </a>
        </nav>
    </div>

    <div class="p-4">
        <a href="index.php">
        <button class="py-2 px-4 w-full bg-red-700 rounded-md">Logout</button>
        </a>
    </div>
    </aside>
</div>

    <!-- Main Content -->
    <main class="flex-1 p-6 ml-64">
    <header class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Praktikum Tersedia</h1>
        <div class="flex items-center space-x-4">
        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
        </div>
    </header>

    <section class="mt-6 grid grid-cols-1 md:grid-cols-2  gap-6">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-7">
        <h2 class="text-xl font-bold">Sistem Operasi</h2>
        <p class="text-gray-400">Semester 2 </p>
        <img src="../public/img/sistem operasi.webp" alt="" class="w-[600px] h-[210px] object-cover mt-5">
        <div class="flex items-center justify-between mt-4">
            <div>
            <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Details</button>
            </div>
        </div>
        </div>

        <div class="bg-gray-800 rounded-lg p-7">
        <h2 class="text-xl font-bold">Struktur Data</h2>
        <p class="text-gray-400">Semester 2 </p>
        <img src="../public/img/strukdat.jpg" alt="" class="w-[600px] h-[210px] object-center object-cover mt-5">
        <div class="flex items-center justify-between mt-4">
            <div>
            <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Details</button>
            </div>
        </div>
        </div>

    </section>

    <header class="flex items-center justify-between" >
        <h1 class="text-2xl font-bold mt-5">Praktikum yang Telah Diikuti</h1>
    </header>

    <section class="mt-6 grid grid-cols-1 md:grid-cols-2  gap-6">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-7">
        <h2 class="text-xl font-bold">Algoritma Pemrograman</h2>
        <p class="text-gray-400">Shift C</p>
        <img src="../public/img/alpro.jpg" alt="" class="w-[600px] h-[210px] object-cover mt-5">
        <div class="flex items-center justify-between mt-4">
            <div>
            <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Detail</button>
            </div>
        </div>
        </div>

        <div class="bg-gray-800 rounded-lg p-7">
        <h2 class="text-xl font-bold">Basis Data</h2>
        <p class="text-gray-400">Shift C</p>
        <img src="../public/img/basis data.jpg" alt="" class="w-[600px] h-[210px] object-center object-cover mt-5">
        <div class="flex items-center justify-between mt-4">
            <div>
            <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Detail</button>
            </div>
        </div>
        </div>

    </section>

    <section class="mt-6">
        <h2 class="text-xl font-bold">Progress</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <h3 class="text-lg font-bold mt-2">Tugas</h3>
            <h3 class="text-lg font-bold mt-2">Materi</h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <table class="w-full mt-4 bg-gray-800 rounded-lg">
            <thead>
                <tr class="text-gray-400">
                <th class="text-left p-4">Praktikum</th>
                <th class="text-left p-4">Tugas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="p-4">Algoritma Pemograman</td>
                <td class="p-4">Bikin robot</td>
                </tr>
            </tbody>
            </table>

            
            <table class="w-full mt-4 bg-gray-800 rounded-lg">
            <thead>
                <tr class="text-gray-400">
                <th class="text-left p-4">Praktikum</th>
                <th class="text-left p-4">Materi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="p-4">Algoritma Pemograman</td>
                <td class="p-4">Looping</td>
                </tr>
            </tbody>
            </table>
        </div>
    </main>
</div>

</body>
</html>