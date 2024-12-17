
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="public/css/styles.css">
</head>
<body class="bg-gray-900 text-white font-sans">

  <div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="index.php"><div class="p-4 text-xl font-bold text-blue-400">ILABS</div></a>


    <nav class="space-y-2 mt-28">
          <a href="dashboard.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-teal-400 rounded-full mr-3"></span> Home
          </a>
          <a href="course.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-green-500 rounded-full mr-3"></span> Informasi Umum
          </a>
          <!-- <a href="tasks.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-blue-500 rounded-full mr-3"></span> Tugas
          </a>
          <a href="subject.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-red-500 rounded-full mr-3"></span> Materi
          </a>
          <a href="present.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-purple-500 rounded-full mr-3"></span> Presensi
          </a>
          <a href="discuss.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-yellow-500 rounded-full mr-3"></span> Diskusi
          </a> -->
        </nav>
    </div> 

    <div class="p-4">
        <a href="login.php">
        <button class="py-2 px-4 w-full bg-red-700 rounded-md">Login</button>
        </a>
    </div>
    </aside>
</div>
    <!-- Main Content -->
    <main class="flex-1 p-6 ml-64">
    <header class="relative w-full h-64">
    <div class="relative w-full h-full bg-cover bg-center" style="background-image: url('../public/img/bgrd.jpg');">
        <h1 class="absolute inset-0 flex items-center justify-center text-3xl font-bold text-white">
            Welcome to the 
        </h1>
    </div>
</header>


      <section class="mt-6 h-auto w-3/5 ">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-3xl font-bold mb-5">Apa itu<span class="text-blue-600 ml-2">Informatics Labs</span> ?</h2>   
          <!-- data dummy -->
          <p>Sistem Operasi Shift C</p>       
          <p>Struktur data Shift C</p>       
              <a href="course.php">
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg mt-4">Praktikum</button>
              </a>
          </div>

        <!-- Overall Information -->
        <!-- <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Tugas</h2>
          <div class="mt-4">
            data dummy 
            <div class="text-gray-400 mb-5">Tugas Tersedia: 5</div>
            <a href="tasks.php">
            <button class="mt-2 px-4 py-2 mt-5 bg-teal-500 text-white rounded-lg">Tugas</button>
            </a>
          </div>
        </div> -->

        <!-- Team Activity -->
        <!-- <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi</h2>
          <div class="mt-4">
            <div class="justify-between items-center">
              data dummy 
              <div class="text-gray-400 mb-5">Materi Tersedia: 10</div>
              <a href="subject.php">
              <button class="mt-2 px-4 py-2 mt-5 bg-teal-500 text-white rounded-lg">Materi</button>
              </a>
            </div>
          </div>
        </div> -->
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
            <!-- isi dari table itu data tugas  -->
            <!-- yg dibawah dummy -->
            <tr>
              <td class="p-4">Sistem Operasi</td>
              <td class="p-4">24 Desember 2024</td>
              <td class="p-4">Buat File</td>
              <td class="p-4 text-yellow-400">Belum Selesai</td>
            </tr>
            <tr>
              <td class="p-4">Struktur Data</td>
              <td class="p-4">20 November 2024</td>
              <td class="p-4">Buat Stack</td>
              <td class="p-4 text-yellow-400">Belum Selesai</td>
            </tr>
            <tr>
              <td class="p-4">Struktur Data</td>
              <td class="p-4">22 Desember 2024</td>
              <td class="p-4">Buat Queue</td>
              <td class="p-4 text-yellow-400">Belum Selesai</td>
            </tr>
            <!-- Repeat rows as needed -->
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