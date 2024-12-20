<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade - ILABS</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
</head>
<body class="bg-gray-900 text-white font-sans">

<!-- Sidebar -->
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
    <header class="flex items-center justify-between mb-5">
      <h1 class="text-2xl font-bold">Daftar Nilai</h1>

    </header>
    <header class="flex items-center justify-between">
      <h1 class="text-2xl font-bold">Sistem Operasi</h1>

    </header>

    <!-- Task Activity Table -->
    <section class="mt-6">
      <table class="w-full mt-4 bg-gray-800 rounded-lg">
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4">Judul Tugas</th>
            <th class="text-left p-4">Deskripsi</th>
            <th class="text-left p-4">Deadline</th>
            <th class="text-left p-4">Nilai</th>
            <th class="text-left p-4">Keterangan</th>
            <th class="text-left p-4">Status</th>

          </tr>
        </thead>
        <tbody>
            <tr>
              <td class="p-4">Buat File</td>
              <td class="p-4">Buat File pakai CLI</td>
              <td class="p-4">23 Desember 2024</td>
              <td class="p-4">90</td>
              <td class="p-4">Bagus</td>
              <td class="p-4 text-green-400">Selesai</td>
            </tr>
            <tr>
              <td class="p-4">Hapus Folder</td>
              <td class="p-4">Hapus Folder pakai CLI</td>
              <td class="p-4">20 Desember 2024</td>
              <td class="p-4">90</td>
              <td class="p-4">Bagus</td>
              <td class="p-4 text-green-400">Selesai</td>
            </tr>
            <tr>
              <td class="p-4">Hapus File</td>
              <td class="p-4">Hapus File pakai CLI</td>
              <td class="p-4">24 Desember 2024</td>
              <td class="p-4">90</td>
              <td class="p-4">Bagus</td>
              <td class="p-4 text-green-400">Selesai</td>
            </tr>
          </tbody>
        </table>
    </section>
    <header class="flex items-center justify-between">
      <h1 class="text-2xl font-bold mt-5">Struktur Data</h1>
    </header>

    <!-- Task Activity Table -->
    <section class="mt-6">
      <table class="w-full mt-4 bg-gray-800 rounded-lg">
        <thead>
          <tr class="text-gray-400">
          <th class="text-left p-4">Judul Tugas</th>
            <th class="text-left p-4">Deskripsi</th>
            <th class="text-left p-4">Deadline</th>
            <th class="text-left p-4">Nilai</th>
            <th class="text-left p-4">Keterangan</th>
            <th class="text-left p-4">Status</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td class="p-4">Buat Stack</td>
            <td class="p-4">Tanpa menggunakan bantuan AI</td>
            <td class="p-4">20 November 2024</td>
            <td class="p-4">90</td>
            <td class="p-4">Bagus</td>
            <td class="p-4 text-green-400">Selesai</td>
        </tr>
        <tr>
            <td class="p-4">Buat Queue</td>
            <td class="p-4">Tanpa menggunakan bantuan AI</td>
            <td class="p-4">22 Desember 2024</td>
            <td class="p-4">90</td>
            <td class="p-4">Bagus</td>
            <td class="p-4 text-green-400">Selesai</td>
        </tr>
        <tr>
            <td class="p-4">Buat Linked List</td>
            <td class="p-4">Tanpa menggunakan bantuan AI</td>
            <td class="p-4">20 Desember 2024</td>
            <td class="p-4">90</td>
            <td class="p-4">Bagus</td>
            <td class="p-4 text-green-400">Selesai</td>
        </tr>
        <tr>
            <td class="p-4">Buat BTree</td>
            <td class="p-4">Tanpa menggunakan bantuan AI</td>
            <td class="p-4">24 Desember 2024</td>
            <td class="p-4">90</td>
            <td class="p-4">Bagus</td>
            <td class="p-4 text-green-400">Selesai</td>
        </tr>
          <!-- Repeat rows as needed -->
        </tbody>
      </table>
    </section>
  </main>
</div>

</body>
</html>