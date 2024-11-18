
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
        <div class="p-4 text-xl font-bold text-blue-400">ILABS</div>
        <nav class="space-y-2 mt-28">
          <a href="course.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-green-500 rounded-full mr-3"></span> Courses
          </a>
          <a href="tasks.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-blue-500 rounded-full mr-3"></span> My Tasks
          </a>
          <a href="#" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-yellow-500 rounded-full mr-3"></span> Statistics
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
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400">Sistem Operasi</p>
          <div class="flex items-center justify-between mt-4">
            <div>
              <p class="text-gray-400 text-sm p-5"></p>
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button>
            </div>
          </div>
        </div>
      </section>

    <!-- Main Content -->
    <main class="flex-1 p-6 ml-64">
      <header class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Sistem Operasi</h1>
        <div class="flex items-center space-x-4">
          <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
        </div>
      </header>

      <section class="mt-6 grid grid-cols-1 md:grid-cols-6 gap-6">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400">Sistem Operasi</p>
          <div class="flex items-center justify-between mt-4">
            <div>
              <p class="text-gray-400 text-sm p-5"></p>
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button>
            </div>
          </div>
        </div>

        <!-- Overall Information -->
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400">Sistem Operasi</p>
          <div class="flex items-center justify-between mt-4">
            <div>
              <p class="text-gray-400 text-sm p-5"></p>
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button>
            </div>
          </div>
        </div>

        <!-- Team Activity -->
        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400">Sistem Operasi</p>
          <div class="flex items-center justify-between mt-4">
            <div>
              <p class="text-gray-400 text-sm p-5"></p>
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button>
            </div>
          </div>
        </div>

        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400">Sistem Operasi</p>
          <div class="flex items-center justify-between mt-4">
            <div>
              <p class="text-gray-400 text-sm p-5"></p>
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button>
            </div>
          </div>
        </div>

        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400">Sistem Operasi</p>
          <div class="flex items-center justify-between mt-4">
            <div>
              <p class="text-gray-400 text-sm p-5"></p>
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button>
            </div>
          </div>
        </div>

        <div class="bg-gray-800 rounded-lg p-4">
          <h2 class="text-xl font-bold">Materi 1</h2>
          <p class="text-gray-400">Sistem Operasi</p>
          <div class="flex items-center justify-between mt-4">
            <div>
              <p class="text-gray-400 text-sm p-5"></p>
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button>
            </div>
          </div>
        </div>
      </section>

      <!-- Task Activity Table -->
      <section class="mt-6">
        <h2 class="text-xl font-bold">Task Activity</h2>
        <table class="w-full mt-4 bg-gray-800 rounded-lg">
          <thead>
            <tr class="text-gray-400">
              <th class="text-left p-4">Praktikum</th>
              <th class="text-left p-4">Deadline</th>
              <th class="text-left p-4">Task</th>
              <th class="text-left p-4">Status</th>
              <th class="text-left p-4">Grade</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="p-4">Algoritma Pemograman</td>
              <td class="p-4">11 September 2001</td>
              <td class="p-4">Bikin Iterasi</td>
              <td class="p-4 text-yellow-400">Not Yet</td>
              <td class="p-4">-</td>
            </tr>
            <tr>
              <td class="p-4">Algoritma Pemograman</td>
              <td class="p-4">11 September 2001</td>
              <td class="p-4">Bikin Iterasi</td>
              <td class="p-4 text-yellow-400">Not Yet</td>
              <td class="p-4">-</td>
            </tr>
            <tr>
              <td class="p-4">Algoritma Pemograman</td>
              <td class="p-4">11 September 2001</td>
              <td class="p-4">Bikin Iterasi</td>
              <td class="p-4 text-yellow-400">Not Yet</td>
              <td class="p-4">-</td>
            </tr>
            <tr>
              <td class="p-4">Algoritma Pemograman</td>
              <td class="p-4">11 September 2001</td>
              <td class="p-4">Bikin Iterasi</td>
              <td class="p-4 text-yellow-400">Not Yet</td>
              <td class="p-4">-</td>
            </tr>
            <!-- Repeat rows as needed -->
          </tbody>
        </table>
      </section>

      <section class="mt-6">
        <h2 class="text-xl font-bold">Kehadiran</h2>
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
            <tr>
              <td class="p-4">Algoritma Pemograman</td>
              <td class="p-4">Shift C</td>
              <td class="p-4">Pertemuan 1</td>
              <td class="p-4">11 September 2001</td>
              <td class="p-4 text-green-500">Hadir</td>
            </tr>
          </tbody>
        </table>
    </main>
  </div>

</body>
</html>
