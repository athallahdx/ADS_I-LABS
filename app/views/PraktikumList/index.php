<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum List</title>
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
    <header class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Praktikum Tersedia</h1>
    </header>
    <section class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php foreach ($data['praktikum'] as $praktikum): ?>
            <div class="bg-gray-800 rounded-lg p-7">
                <h2 class="text-xl font-bold"><?= $praktikum['nama_praktikum']; ?></h2>
                <p class="text-gray-400"><?= $praktikum['nama_shift']; ?></p>
                <p class="text-gray-400"><?= $praktikum['hari'] . ", " . $praktikum['waktu_mulai'] . "-" . $praktikum['waktu_selesai'] ?></p>
                <img src="<?= UPLOADS . "praktikum/" .  $praktikum['image_path']; ?>" alt="<?= $praktikum['nama_praktikum']; ?>" class="w-[600px] h-[210px] object-cover mt-5">
                <div class="flex items-center justify-between mt-4">
                    <div>
                        <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Open</button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </section>

    
</main>
</body>
</html>
