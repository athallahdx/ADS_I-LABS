
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

  <!-- Sidebar -->
  <div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
      <div>
      <a href="index.php"><div class="p-4 text-xl font-bold text-blue-400">ILABS</div></a>
        <nav class="space-y-2 mt-28">
          <a href="course.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-green-500 rounded-full mr-3"></span> Courses
          </a>
          <a href="tasks.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-blue-500 rounded-full mr-3"></span> My Tasks
          </a>
          <a href="#" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-yellow-500 rounded-full mr-3"></span> Discussion
          </a>
          <a href="#" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-purple-500 rounded-full mr-3"></span> Grades
          </a>
          <a href="#" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-red-500 rounded-full mr-3"></span>  Subject
          </a>
        </nav>

      <div class="p-4">
        <button class="py-2 px-4 w-full bg-gray-700 rounded-md">Light / Dark</button>
      </div>
    </aside>
</div>

      <header class="flex items-center justify-between ml-64 px-6 pt-6">
        <h1 class="text-2xl font-bold">Materi Tersedia</h1>
        <div class="flex items-center space-x-4">
          <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
        </div>
      </header>

      <section class="mt-6 grid grid-cols-1 md:grid-cols-1 gap-6 ml-64 px-6">
        <div class="bg-gray-800 rounded-lg p-4 flex justify-evenly">
          <div class="p-5 text-center">
            <h2 class="text-xl font-bold">Diunduh</h2>
            <p class="text-6xl text-green-500 p-5">10</p>
          </div>
          <div class="p-5 text-center">
            <h2 class="text-xl font-bold">Belum diunduh</h2>
            <p class=" text-red-500 text-6xl p-5">10</p>
          </div>
          <div class="p-5 text-center">
            <h2 class="text-xl font-bold">Total Materi</h2>
            <p class="text-white text-6xl p-5">20</p>
          </div>
          </div>
      </section>

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
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400 ">Sistem Operasi</p>
          <img src="../public/img/pdf.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400 ">Sistem Operasi</p>
          <img src="../public/img/pdf.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400 ">Sistem Operasi</p>
          <img src="../public/img/pdf.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
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
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400 ">Struktur Data</p>
          <img src="../public/img/docs.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400 ">Struktur Data</p>
          <img src="../public/img/docs.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400 ">Struktur Data</p>
          <img src="../public/img/docs.png" alt="" class="w-[130px] h-auto m-auto p-5">
          <div class="flex justify-end">
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Unduh</button>
          </div>
        </div>
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
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
