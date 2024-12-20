
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
</head>
<body class="bg-gray-900 text-white font-sans">

<div class="flex h-screen fixed">
<aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="<?= BASEURL ?>LandingPage/index">
        <div class="p-4 text-xl font-bold text-blue-400">
          ILABS
        </div>
    </a>


        <nav class="space-y-2 mt-28">
            <a href="<?= BASEURL ?>Dashboard/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
                <span class="w-5 h-5 bg-teal-400 rounded-full mr-3"></span> Dashboard
            </a>
            <a href="<?= BASEURL ?>PraktikumList/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
                <span class="w-5 h-5 bg-green-500 rounded-full mr-3"></span> Praktikum
            </a>
            <a href="<?= BASEURL ?>Tugas/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
                <span class="w-5 h-5 bg-blue-500 rounded-full mr-3"></span> Tugas
            </a>
            <a href="<?= BASEURL ?>Materi/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
                <span class="w-5 h-5 bg-red-500 rounded-full mr-3"></span> Materi
            </a>
            <a href="<?= BASEURL ?>Presensi/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
                <span class="w-5 h-5 bg-purple-500 rounded-full mr-3"></span> Presensi
            </a>
            <a href="<?= BASEURL ?>ForumDiskusi/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
                <span class="w-5 h-5 bg-yellow-500 rounded-full mr-3"></span> Diskusi
            </a>
            <?php if(Session::get('role')=='Admin'): ?>
                <a href="<?= BASEURL ?>DashboardAdmin/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
                <span class="w-5 h-5 bg-pink-500 rounded-full mr-3"></span> Admin Dashboard
                </a>
            <?php endif; ?>
            </nav>
        </div>

          <div class="p-4">
            <a href="<?= BASEURL ?>Login/logout">
            <button class="py-2 px-4 w-full bg-red-700 rounded-md">Logout</button>
            </a>
          </div>
      </aside>
</div>

    <!-- Main Content -->
    <main class="flex-1 p-6 ml-64">
    <header class="relative w-full h-20">
    <div class="relative w-full h-full bg-cover bg-center">
        <!-- <p><?= var_dump($data) ?></p> -->
        <h1 class="absolute inset-0 flex items-center justify-center text-4xl font-bold text-white bg-black bg-opacity-50">
            <?= $data['praktikumDetails']['nama_praktikum'] ?>
            <?= $data['praktikumDetails']['nama_shift'] ?>
        </h1>
    </div>
</header>


        <section class="mt-6 h-auto w-full flex gap-5 ">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[300px] m-auto ">
            <h2 class="text-3xl font-bold mb-5 mt-5">Deskripsi Praktikum</h2> 
            <table>
            <tr>
                <td class="w-1/2">Nama Praktikum</td>
                <td class="w-1/2">: <?= $data['praktikumDetails']['nama_praktikum'] ?></td>
            </tr>
            <tr>
                <td class="w-1/2">Shift</td>
                <td class="w-1/2">: <?= $data['praktikumDetails']['nama_shift'] ?></td>
            </tr>
            <tr>
                <td class="w-1/2">Dosen Pengampu</td>
                <td class="w-1/2">: <?= $data['praktikumDetails']['dosen_pengampu'] ?></td>
            </tr>
            <tr>
                <td class="w-1/2">Asisten Praktikum</td>
                <td class="w-1/2">: <?= $data['praktikumDetails']['fullname'] ?></td>
            </tr>
            <tr>
                <td class="w-1/2">Ruangan</td>
                <td class="w-1/2">: <?= $data['praktikumDetails']['ruangan'] ?></td>
            </tr>
            <tr>
                <td class="w-1/2">Jadwal</td>
                <td class="w-1/2">: <?= $data['praktikumDetails']['hari'] . ' | ' . $data['praktikumDetails']['waktu_mulai'] . ' - '. $data['praktikumDetails']['waktu_selesai'] ?></td>
            </tr>
            </table>
        </div>      
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 1</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 2</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 3</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 4</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        
        <h1 class="text-3xl font-bold mt-10">Pertemuan 5</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 6</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 7</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 8</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 9</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 10</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 11</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 12</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 13</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 14</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 15</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <h1 class="text-3xl font-bold mt-10">Pertemuan 16</h1>
        <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
            <h2 class="text-3xl font-bold mb-5">Materi</h2>
            <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Materi 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto">Unduh</button>
            </div>
            </div>
            <div class="bg-gray-800 rounded-lg p-4 w-full h-[400px] m-auto">
                <h2 class="text-3xl font-bold mb-5">Tugas</h2>
                <div class="w-full h-10 flex justify-between m-auto items-center p-5" style="border-bottom: 1px solid #6b7280; padding-bottom: 30px;">
                <h3 class="text-xl font-bold">Tugas 1</h3>
                <button class="px-3 py-2 bg-teal-500 text-white rounded-lg ml-auto tugas-button">Details</button>
            </div>
            </div>
        </section>

        <div class="bg-gray-800 fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 shadow-lg rounded-lg p-7 w-1/2 z-10 hidden tugas-container">
            <p class="text-right text-red-700 text-xl cursor-pointer close-button">&times;</p>
            <h2 class="text-3xl font-bold mb-5">Deskripsi Tugas 1</h2>
            <p class="">Tugas ini untuk membuat anu menggunakan anuan</p>
            <div class="flex justify-end mt-20">
                <input type="file">
                <button class="px-4 py-2 bg-teal-500 text-white rounded-lg">Submit</button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
            const tugasContainer = document.querySelector('.tugas-container'); // Ambil elemen popup
            const tugasButtons = document.querySelectorAll('.tugas-button'); // Semua tombol "Details"
            const closeButton = document.querySelector('.close-button'); // Tombol "Close"

            // Tambahkan event listener untuk setiap tombol "Details"
            tugasButtons.forEach(button => {
                button.addEventListener('click', () => {
                    tugasContainer.classList.remove('hidden'); // Tampilkan popup
                });
            });

            // Tambahkan event listener untuk tombol "Close"
            closeButton.addEventListener('click', () => {
                tugasContainer.classList.add('hidden'); // Sembunyikan popup
            });
        });
        </script>
    </main>
    </div>
</body>
</html>