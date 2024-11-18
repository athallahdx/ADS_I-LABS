<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kehadiran Praktikum</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">
  <!-- Container -->
  <div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="index.php"><div class="p-4 text-xl font-bold text-blue-400">ILABS</div></a>


    <nav class="space-y-2 mt-28">
          <a href="dashboard.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-teal-400 rounded-full mr-3"></span> Dashboard
          </a>
          <a href="course.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-green-500 rounded-full mr-3"></span> Praktikum
          </a>
          <a href="tasks.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
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
          </a>
        </nav>
    </div>

    <div class="p-4">
        <a href="index.php">
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
        <div class="flex items-center space-x-4">
          <span>Presensi Tersedia</span>
          <div class="text-blue-500 font-bold">1</div>
        </div>
      </header>

      <!-- Kehadiran Section -->
      <section class="mt-6 bg-gray-800 p-6 rounded-lg shadow">
        <div class="flex justify-between">
          <div>
            <h3 class="text-xl font-bold">Sistem Operasi - Shift C</h3>
            <p class="text-gray-500">Pertemuan 4</p>
          </div>
          <div class="text-right">
            <p class="text-gray-500">Waktu Pertemuan</p>
            <p>20 November 2024 | 08.00 - 10.00 WIB</p>
            <span class="inline-block bg-green-500 text-white text-xs px-2 py-1 rounded">Sedang Berlangsung</span>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 mt-6">
          <!-- Form Kehadiran -->
          <div>
            <form action="#" method="POST" class="mt-4">
              <label for="status" class="block text-gray-500">Status Kehadiran:</label>
              <select id="status" name="status" class="w-1/2 p-2 mt-2 border rounded text-black">
                <option value="Hadir">Hadir</option>
                <option value="Tidak Hadir">Tidak Hadir</option>
                <option value="Izin">Izin</option>
              </select>
              <button type="submit" class="mt-4 px-4 py-2 bg-green-500 text-white rounded">Submit</button>
            </form>
          </div>
        </div>
      </section>
    </main>
  </div>
</body>
</html>
