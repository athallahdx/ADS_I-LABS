<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard - Materi</title>
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
    <header class="flex items-center justify-between">
      <h1 class="text-2xl font-bold">Materi</h1>
    </header>

    <section class="mt-6 space-y-6">
      <?php foreach ($groupedMateri as $praktikum): ?>
        <div>
          <!-- Praktikum Title -->
          <h2 class="text-xl font-bold text-blue-400"><?= htmlspecialchars($praktikum['praktikum']['nama_praktikum']) ?></h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4 mb-6">
            <?php foreach ($praktikum['materi'] as $materi): ?>
              <!-- Materi Card -->
              <div class="bg-gray-800 rounded-lg p-4">
                <h3 class="text-lg font-bold"><?= htmlspecialchars($materi['judul']) ?></h3>
                <p class="text-gray-400 text-sm mt-2"><?= htmlspecialchars($materi['deskripsi_materi'] ?? 'No description available') ?></p>
                <svg class="w-[130px] h-auto m-auto p-5" xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" style="fill: rgba(200, 0, 0, 1);"><path d="M8.267 14.68c-.184 0-.308.018-.372.036v1.178c.076.018.171.023.302.023.479 0 .774-.242.774-.651 0-.366-.254-.586-.704-.586zm3.487.012c-.2 0-.33.018-.407.036v2.61c.077.018.201.018.313.018.817.006 1.349-.444 1.349-1.396.006-.83-.479-1.268-1.255-1.268z"></path><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8l-6-6zM9.498 16.19c-.309.29-.765.42-1.296.42a2.23 2.23 0 0 1-.308-.018v1.426H7v-3.936A7.558 7.558 0 0 1 8.219 14c.557 0 .953.106 1.22.319.254.202.426.533.426.923-.001.392-.131.723-.367.948zm3.807 1.355c-.42.349-1.059.515-1.84.515-.468 0-.799-.03-1.024-.06v-3.917A7.947 7.947 0 0 1 11.66 14c.757 0 1.249.136 1.633.426.415.308.675.799.675 1.504 0 .763-.279 1.29-.663 1.615zM17 14.77h-1.532v.911H16.9v.734h-1.432v1.604h-.906V14.03H17v.74zM14 9h-1V4l5 5h-4z"></path></svg>
                <div class="flex justify-end">
                  <a href="<?= BASEURL ?>public/uploads/<?= htmlspecialchars($materi['file_materi']) ?>" target="_blank">
                    <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
                  </a>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      <?php endforeach; ?>
    </section>
  </main>
</body>
</html>
