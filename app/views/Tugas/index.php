<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks - ILABS</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
</head>
<body class="bg-gray-900 text-white font-sans">

<!-- Sidebar -->
<div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
        <div>
            <a href="<?= BASEURL ?>LandingPage/index">
                <div class="p-4 text-xl font-bold text-blue-400">ILABS</div>
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
    <header class="flex items-center mb-6 justify-between">
      <h1 class="text-2xl font-bold">Tugas</h1>
    </header>
    <?php if (!empty($tasksByPraktikum)): ?>
        <?php foreach ($tasksByPraktikum as $praktikumName => $tasks): ?>
            <header class="flex items-center justify-between mt-8">
                <h1 class="text-2xl text-blue-400 font-bold"><?= htmlspecialchars($praktikumName) ?></h1>
            </header>

            <!-- Task Activity Table -->
            <section class="mt-3 mb-6">
                <table class="w-full mt-4 bg-gray-800 rounded-lg">
                    <thead>
                        <tr class="text-gray-400">
                            <th class="text-left p-4">Judul Tugas</th>
                            <th class="text-left p-4">Deskripsi</th>
                            <th class="text-left p-4">Deadline</th>
                            <th class="text-left p-4">Unggah</th>
                            <th class="text-left p-4">Submit</th>
                            <th class="text-left p-4">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($tasks as $task): ?>
                          <tr>
                              <td class="p-4"><?= htmlspecialchars($task['judul_tugas']) ?></td>
                              <td class="p-4"><?= htmlspecialchars($task['deskripsi_tugas']) ?></td>
                              <td class="p-4"><?= htmlspecialchars(date('d M Y', strtotime($task['deadline_tugas']))) ?></td>
                              <td class="p-4">
                                  <input type="file" name="file" id="file">
                              </td>
                              <td class="p-4">
                                  <button class="py-2 px-4 bg-blue-500 rounded-md">Submit</button>
                              </td>
                              <td class="p-4 <?= $task['status_pengumpulan'] === 'SELESAI' ? 'text-green-400' : 'text-yellow-400' ?>">
                                  <?= $task['status_pengumpulan'] ?>
                              </td>
                          </tr>
                      <?php endforeach; ?>
                  </tbody>

                </table>
            </section>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-gray-400">Belum ada tugas yang tersedia.</p>
    <?php endif; ?>
</main>
</body>
</html>
