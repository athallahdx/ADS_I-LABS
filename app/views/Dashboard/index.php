
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        <h1 class="text-2xl font-bold py-5">Hello! How are you <?= $data['user']['username'] ?>?</h1>
        <a href=""><i class='bx bxs-user-circle text-5xl'></i></a>
      </header>

      <section class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-4">

          <h2 class="text-xl font-bold mb-5">Praktikum Tersedia</h2>
         
          <!-- data dummy -->
       
          <?php foreach($data['praktikum'] as $praktikum): ?>
            <p><?= $praktikum['nama_praktikum'] . " " . $praktikum['nama_shift']; ?></p>
          <?php endforeach; ?>
              <a href="<?= BASEURL ?>PraktikumList/index">
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg mt-4">Praktikum</button>
              </a>
          </div>

        <!-- Overall Information -->
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Tugas</h2>
          
          <div class="mt-4">
            <!-- data dummy -->
            <div class="text-gray-400 mb-5">Tugas Tersedia: <?= $data['total_tugas'] ?></div>
            <a href="<?= BASEURL ?>Tugas/index">
            <button class="mt-2 px-4 py-2 mt-5 bg-teal-500 text-white rounded-lg">Tugas</button>
            </a>
          </div>
        </div>

        <!-- Team Activity -->
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi</h2>
          <div class="mt-4">
            <div class="justify-between items-center">
              <!-- data dummy -->
              <div class="text-gray-400 mb-5">Materi Tersedia: <?= $data['total_materi']?></div>
              <a href="<?= BASEURL ?>Materi/index">
              <button class="mt-2 px-4 py-2 mt-5 bg-teal-500 text-white rounded-lg">Materi</button>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Task Activity Table -->
      <section class="mt-6">
        <h2 class="text-xl font-bold pt-7">Tugas Tersedia</h2>
        <table class="w-full mt-4 bg-gray-800 rounded-lg">
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4">Praktikum</th>
            <th class="text-left p-4">Deadline</th>
            <th class="text-left p-4">Task</th>
            <th class="text-left p-4">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($this->userData['tugas'] as $tugas): ?>
            <tr>
              <td class="p-4"><?php echo htmlspecialchars($tugas['nama_praktikum']); ?></td>
              <td class="p-4"><?php echo date('d F Y', strtotime($tugas['deadline_tugas'])); ?></td>
              <td class="p-4"><?php echo htmlspecialchars($tugas['judul_tugas']); ?></td>
              <td class="p-4 font-bold text-<?php echo $tugas['status_pengumpulan'] === 'BELUM SELESAI' ? 'yellow' : 'green'; ?>-400">
                <?php echo htmlspecialchars($tugas['status_pengumpulan'] ?: 'Belum Dikirim'); ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      </section>

      <section class="mt-6">
        <h2 class="text-xl font-bold pt-5">Kehadiran</h2>
        <table class="w-full mt-4 bg-gray-800 rounded-lg">
          <thead>
            <tr class="text-gray-400">
              <th class="text-left p-4">Praktikum</th>
              <th class="text-left p-4">Shift</th>
              <th class="text-left p-4">Pertemuan</th>
              <th class="text-left p-4">Tanggal</th>
              <th class="text-left p-4">Status</th>
            </tr>
          </thead>
          <tbody>
            <!-- dummy -->
            <tr>
              <td class="p-4">Sistem Operasi</td>
              <td class="p-4">Shift C</td>
              <td class="p-4">Pertemuan 4</td>
              <td class="p-4">20 November 2024</td>
              <td class="p-4 text-green-500">Hadir</td>
            </tr>
          </tbody>
        </table>
    </main>
  </div>
</body>
</html>