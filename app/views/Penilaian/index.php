<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade - ILABS</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
</head>
<body class="bg-gray-900 text-white font-sans">

<div id="overlay" class="fixed inset-0 w-full h-full bg-black bg-opacity-50 z-50 hidden"></div>

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
          <?php if(Session::get('role') == 'Admin'): ?>
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

    <!-- Task Activity Table -->
    <section class="mt-6">
      <table class="w-full mt-4 bg-gray-800 rounded-lg border border-white">
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4 border border-white">Judul Tugas</th>
            <th class="text-left p-4 border border-white">Deskripsi</th>
            <th class="text-left p-4 border border-white">Deadline</th>
            <th class="text-left p-4 border border-white">Nilai</th>
            <th class="text-left p-4 border border-white">Keterangan</th>
            <th class="text-left p-4 border border-white">Status</th>
            <th class="text-left p-4 border border-white">Aksi</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td class="p-4 border border-white">Buat File</td>
              <td class="p-4 border border-white">Buat File pakai CLI</td>
              <td class="p-4 border border-white">23 Desember 2024</td>
              <td class="p-4 border border-white">90</td>
              <td class="p-4 border border-white">Bagus</td>
              <td class="p-4 border border-white text-green-400">Selesai</td>
              <td class="p-4 border border-white text-white">
                <button class="py-2 px-4 w-full bg-blue-700 rounded-md" id="nilai-button">Nilai</button>
              </td>
            </tr>
            <tr>
              <td class="p-4 border border-white">Hapus Folder</td>
              <td class="p-4 border border-white">Hapus Folder pakai CLI</td>
              <td class="p-4 border border-white">20 Desember 2024</td>
              <td class="p-4 border border-white">90</td>
              <td class="p-4 border border-white">Bagus</td>
              <td class="p-4 border border-white text-green-400">Selesai</td>
              <td class="p-4 border border-white text-white">
                <button class="py-2 px-4 w-full bg-blue-700 rounded-md" id="nilai-button">Nilai</button>
              </td>
            </tr>
            <tr>
              <td class="p-4 border border-white">Hapus File</td>
              <td class="p-4 border border-white">Hapus File pakai CLI</td>
              <td class="p-4 border border-white">24 Desember 2024</td>
              <td class="p-4 border border-white">90</td>
              <td class="p-4 border border-white">Bagus</td>
              <td class="p-4 border border-white text-green-400">Selesai</td>
              <td class="p-4 border border-white text-white">
                <button class="py-2 px-4 w-full bg-blue-700 rounded-md" id="nilai-button">Nilai</button>
              </td>
            </tr>
          </tbody>
        </table>
    </section>

    <section class="z-[100] w-1/3 bg-gray-800 p-6 rounded-lg shadow fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden" id="nilai-container">
          <div class="grid grid-cols-1  gap-20">
            <form action="#" method="POST" class="mt-4">  

                <h1 class="text-2xl font-bold text-blue-500 text-center">Nilai Tugas</h1>  

                <label for="grade" class="block text-white">Nilai:</label>
                <input type="number" id="grade" grade="grade" class="w-full p-2 mt-2 border rounded text-black">

                <label for="praktikum" class="block text-white">Keterangan :</label>
                <input type="text" id="praktikum" name="praktikum" class="w-full p-2 mt-2 border rounded text-black">

              <button id="submit" name="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Tambah</button>
            </form>
          </div>
      </section>
  </main>
</div>

</body>
<script>
    const overlay = document.getElementById('overlay');
    const formNilai = document.getElementById('nilai-container');
    const tombolNilai = document.getElementById('nilai-button');
    

    function openPopup(popup) {
        popup.style.display = 'block';
        overlay.style.display = 'block';
    }

    function closePopup() {
        formNilai.style.display = 'none';
        overlay.style.display = 'none';
    }

    tombolNilai.addEventListener('click', (event) => {
        openPopup(formNilai);
        event.stopPropagation();
    });

    // Close popup and overlay when clicking on the overlay
    overlay.addEventListener('click', () => {
        closePopup();
    });

    // Prevent closing when clicking inside the popup
    formNilai.addEventListener('click', (event) => event.stopPropagation());
</script>
</html>