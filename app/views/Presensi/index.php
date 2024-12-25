<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kehadiran Praktikum</title>
  <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
</head>
<body class="bg-gray-900 text-white font-sans">
  <!-- Container -->
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
          <?php if(Session::get('role')=='Admin' || Session::get('role')=='Super Admin'): ?>
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
  <main class="flex-1 bg-gray-900 p-6 ml-64">
    <!-- Header -->
    <header class="flex items-center justify-between bg-gray-800 p-4 rounded-lg shadow">
      <div>
        <h2 class="text-xl font-bold">Hi, Jangan Lupa Isi Presensi Yaa! 👋</h2>
      </div>
    </header>

    <!-- Kehadiran Section -->
    <section class="mt-6 bg-gray-800 p-6 rounded-lg shadow">
      <?php foreach ($data['presensi'] as $item): ?>

        <?php
          // Ensure timezone is set correctly
          date_default_timezone_set('Asia/Jakarta'); 

          // Current datetime
          $currentDateTime = date('Y-m-d H:i:s'); 

          // Combine date and time for shift start and end
          $shiftStartDateTime = date('Y-m-d H:i:s', strtotime($item['tanggal_presensi'] . ' ' . $item['waktu_mulai']));
          $shiftEndDateTime = date('Y-m-d H:i:s', strtotime($item['tanggal_presensi'] . ' ' . $item['waktu_selesai']));

          // Determine display condition
          $isBeforeTimeRange = $currentDateTime < $shiftStartDateTime; // Before the time range
          $isInTimeRange = $currentDateTime >= $shiftStartDateTime && $currentDateTime <= $shiftEndDateTime; // During the time range
          $isAfterTimeRange = $currentDateTime > $shiftEndDateTime; // After the time range
          $status = $item['status_presensi'];
        ?>

        <!-- Display only if not before the time range -->
        <?php if (!$isBeforeTimeRange): ?>
          <!-- Start of each item box -->
          <div class="bg-gray-700 p-4 mb-6 rounded-lg shadow-md">
            <div class="flex justify-between">
              <div>
                <h3 class="text-xl font-bold text-white">
                  <?= $item['nama_praktikum'] . " " . $item['nama_shift'] ?>
                </h3>
              </div>
              <div class="text-right">
                <p class="text-gray-500">Waktu Pertemuan</p>
                <p>
                  <?= $item['hari'] . ", " ?>
                  <?= date('d-m-Y', strtotime($item['tanggal_presensi'])) ?>
                </p>
                <p><?= $item['waktu_mulai'] . ' - ' . $item['waktu_selesai'] ?></p>
              </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
              <div>
                <!-- During the time range: Show the form -->
                <?php if ($isInTimeRange && $status=='Alpa'): ?>
                  <form action="<?= BASEURL ?>Presensi/handlePresensi" method="POST" class="mt-4">
                    <input type="hidden" name="id_presensi" value="<?= $item['id_presensi'] ?>">
                    <label for="status" class="block text-gray-500">Status Kehadiran:</label>
                    <select id="status" name="status" class="w-1/2 p-2 mt-2 border rounded text-black">
                      <option value="Hadir">Hadir</option>
                      <option value="Izin">Izin</option>
                      <option value="Sakit">Sakit</option>
                    </select>
                    <button type="submit" class="mt-4 px-4 py-2 bg-green-500 text-white rounded">Submit</button>
                  </form>
                <!-- After the time range: Show history -->
                <?php else: ?>
                  <p class="text-gray-200">Status Kehadiran</p>
                  <?php if ($status === 'Hadir'): ?>
                    <p class="mb-2 text-2xl font-bold text-green-400"> <?= $status ?> </p>
                  <?php elseif ($status === 'Alpa'): ?>
                    <p class="mb-2 text-2xl font-bold text-red-400"> <?= $status ?> </p>
                  <?php else: ?>
                    <p class="mb-2 text-2xl font-bold text-yellow-400"> <?= $status ?> </p>
                  <?php endif; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endif; ?>

      <?php endforeach; ?>
    </section>
  </main>


</body>
</html>
