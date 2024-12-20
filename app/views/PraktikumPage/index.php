
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

        <!-- Assuming $data['materitugas'] contains the result set -->
        <div class="container mx-auto p-6">
            <h2 class="text-2xl font-bold mb-4">Materi and Tugas Details</h2>
            
            <?php foreach ($data['materitugas'] as $item): ?>
                <div class="mb-6 p-4 bg-white border border-gray-300 rounded-lg shadow-lg">
                    <!-- Materi Section -->
                    <div class="mb-4">
                        <h3 class="text-xl font-semibold"><?= htmlspecialchars($item['judul_materi']) ?></h3>
                        <p class="text-gray-600"><?= nl2br(htmlspecialchars($item['deskripsi_materi'])) ?></p>
                        <?php if ($item['file_materi']): ?>
                            <a href="<?= BASEURL . 'uploads/materi/' . $item['file_materi'] ?>" class="text-blue-500 underline" target="_blank">Download Materi</a>
                        <?php endif; ?>
                        <p class="text-gray-500 mt-2">Uploaded on: <?= date('d M Y', strtotime($item['tanggal_upload_materi'])) ?></p>
                    </div>

                    <!-- Tugas Section -->
                    <div class="mb-4">
                        <h4 class="text-lg font-semibold"><?= htmlspecialchars($item['judul_tugas']) ?></h4>
                        <p class="text-gray-600"><?= nl2br(htmlspecialchars($item['deskripsi_tugas'])) ?></p>
                        <?php if ($item['file_tugas']): ?>
                            <a href="<?= BASEURL . 'uploads/tugas/' . $item['file_tugas'] ?>" class="text-blue-500 underline" target="_blank">Download Tugas</a>
                        <?php endif; ?>
                        <p class="text-gray-500 mt-2">Deadline: <?= date('d M Y', strtotime($item['deadline_tugas'])) ?></p>
                    </div>

                    <!-- Pengumpulan Section -->
                    <div class="mb-4">
                        <?php if ($item['id_pengumpulan']): ?>
                            <h5 class="font-semibold">Pengumpulan Details:</h5>
                            <p class="text-gray-600">
                                Status: 
                                <span class="<?= $item['status_pengumpulan'] === 'SELESAI' ? 'text-green-400' : 'text-yellow-400' ?>">
                                    <?= htmlspecialchars($item['status_pengumpulan']) ?>
                                </span>
                            </p>
                            <p class="text-gray-600">
                            <?php 
                                // Check if 'waktu_pengumpulan' is null or equals Unix epoch (01 Jan 1970 01:00)
                                if (is_null($item['waktu_pengumpulan']) || $item['waktu_pengumpulan'] == '1970-01-01 01:00:00') {
                                    echo "Waktu Pengumpulan: Belum Mengumpulkan";
                                } else {
                                    echo "Waktu Pengumpulan: " . date('d M Y H:i', strtotime($item['waktu_pengumpulan']));
                                }
                            ?>
                            </p>
                            <?php if ($item['file_pengumpulan']): ?>
                                <a href="<?= BASEURL . 'uploads/pengumpulan_tugas/' . $item['file_pengumpulan'] ?>" class="text-blue-500 underline" target="_blank">Download Pengumpulan</a>
                            <?php endif; ?>
                            <p class="text-gray-600 mt-2">Nilai: <?= htmlspecialchars($item['nilai']) ?></p>
                        <?php else: ?>
                            <p class="text-red-500">Belum mengumpulkan tugas</p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
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