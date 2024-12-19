
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Sidebar -->
  <div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="index.php"><div class="p-4 text-xl font-bold text-blue-400">ILABS</div></a>


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
        <h1 class="text-2xl font-bold">Sistem Operasi</h1>
      </header>

      <section class="mt-6 grid grid-cols-1 md:grid-cols-5 gap-6">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400 ">Sistem Operasi</p>
          <img src="../public/img/pdf.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 2</h2>
          <p class="text-gray-400 ">Sistem Operasi</p>
          <img src="../public/img/pdf.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 3</h2>
          <p class="text-gray-400 ">Sistem Operasi</p>
          <img src="../public/img/pdf.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 4</h2>
          <p class="text-gray-400 ">Sistem Operasi</p>
          <img src="../public/img/pdf.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 5</h2>
          <p class="text-gray-400 ">Sistem Operasi</p>
          <img src="../public/img/pdf.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <!-- Overall Information -->
        
      </section>

      <header class="flex items-center justify-between mt-10">
        <h1 class="text-2xl font-bold">Struktur Data</h1>
      </header>

      <section class="mt-6 grid grid-cols-1 md:grid-cols-5 gap-6">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400 ">Struktur Data</p>
          <img src="../public/img/docs.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 2</h2>
          <p class="text-gray-400 ">Struktur Data</p>
          <img src="../public/img/docs.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 3</h2>
          <p class="text-gray-400 ">Struktur Data</p>
          <img src="../public/img/docs.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 4</h2>
          <p class="text-gray-400 ">Struktur Data</p>
          <img src="../public/img/docs.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 5</h2>
          <p class="text-gray-400 ">Struktur Data</p>
          <img src="../public/img/docs.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <!-- Overall Information -->
        
      </section>
    </main>
  </div>

</body>
</html>