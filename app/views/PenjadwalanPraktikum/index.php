
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Shift</title>
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
    <header class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Daftar Praktikum dan Shift yang Tersedia Untuk Dipilih</h1>
    </header>

    <section class="mt-6">
      <table class="w-full mt-4 bg-gray-800 rounded-lg" border="1">
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4">Nomor</th>
            <th class="text-left p-4">Nama Praktikum</th>
            <th class="text-left p-4">Shift</th>
            <th class="text-left p-4">Dosen Pengampu</th>
            <th class="text-left p-4">Asisten Praktikum</th>
            <th class="text-left p-4">Jadwal</th>
            <th class="text-left p-4">Jumlah Peserta</th>
            <th class="text-left p-4">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td class="p-4">1</td>
              <td class="p-4">Algoritma dan Pemograman</td>
              <td class="p-4">A</td>
              <td class="p-4">Bangun Wijayanto</td>
              <td class="p-4">Baskara Putra</td>
              <td class="p-4">Senin | 14:00 - 16:00 <br>Laboratorium Baru</td>
              <td class="p-4">5/20</td>
              <td class="p-4"><button class="py-2 px-4 w-full bg-blue-700 rounded-md">Pilih</button></td>
            </tr>
            <tr>
              <td class="p-4">2</td>
              <td class="p-4">Basis Data</td>
              <td class="p-4">B</td>
              <td class="p-4">Yogiek Saputra</td>
              <td class="p-4">Baskara Putra</td>
              <td class="p-4">Selasa| 14:00 - 16:00 <br>Laboratorium Jaringan</td>
              <td class="p-4">5/20</td>
              <td class="p-4"><button class="py-2 px-4 w-full bg-blue-700 rounded-md">Pilih</button></td>
            </tr>
            <tr>
              <td class="p-4">3</td>
              <td class="p-4">Struktur Data</td>
              <td class="p-4">C</td>
              <td class="p-4">Bangun Wijayanto</td>
              <td class="p-4">Baskara Putra</td>
              <td class="p-4">Rabu | 14:00 - 16:00 <br>Laboratorium Pemograman</td>
              <td class="p-4">5/20</td>
              <td class="p-4"><button class="py-2 px-4 w-full bg-blue-700 rounded-md">Pilih</button></td>
            </tr>
            <tr>
              <td class="p-4">4</td>
              <td class="p-4">Sistem Operasi</td>
              <td class="p-4">D</td>
              <td class="p-4">Nana Chan</td>
              <td class="p-4">Baskara Putra</td>
              <td class="p-4">Kamis | 14:00 - 16:00 <br>Laboratorium Jaringan</td>
              <td class="p-4">5/20</td>
              <td class="p-4"><button class="py-2 px-4 w-full bg-blue-700 rounded-md">Pilih</button></td>
            </tr>
            <tr>
              <td class="p-4">5</td>
              <td class="p-4">Pemograman Web</td>
              <td class="p-4">E</td>
              <td class="p-4">Agus Darmawan</td>
              <td class="p-4">Baskara Putra</td>
              <td class="p-4">Jumat | 14:00 - 16:00 <br>Laboratorium Baru</td>
              <td class="p-4">5/20</td>
              <td class="p-4"><button class="py-2 px-4 w-full bg-blue-700 rounded-md">Pilih</button></td>
            </tr>
            <tr>
              <td class="p-4">6</td>
              <td class="p-4">Pemograman Berbasis Objek</td>
              <td class="p-4">F</td>
              <td class="p-4">Edy Maryanto</td>
              <td class="p-4">Baskara Putra</td>
              <td class="p-4">Senin | 14:00 - 16:00 <br>Laboratorium Baru</td>
              <td class="p-4">5/20</td>
              <td class="p-4"><button class="py-2 px-4 w-full bg-blue-700 rounded-md">Pilih</button></td>
            </tr>
            
          </tbody>
        </table>
    </section>

        </div>
    </main>
</div>

</body>
</html>
