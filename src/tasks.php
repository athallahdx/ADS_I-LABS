<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasks - ILABS</title>
    <link rel="stylesheet" href="public/css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

<!-- Sidebar -->
<div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="index.php"><div class="p-4 text-xl font-bold text-blue-400">ILABS</div></a>

    <nav class="space-y-2 mt-28">
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
        <button class="py-2 px-4 w-full bg-gray-700 rounded-md">Light / Dark</button>
    </div>
    </aside>
</div>

  <!-- Main Content -->
  <main class="flex-1 p-6 ml-64">
    <header class="flex items-center justify-between">
      <h1 class="text-2xl font-bold">Sistem Operasi</h1>
      <div class="flex items-center space-x-4">
        <div class="w-10 h-10 bg-gray-600 rounded-full"></div>
      </div>
    </header>

    <!-- Task Activity Table -->
    <section class="mt-6">
      <table class="w-full mt-4 bg-gray-800 rounded-lg">
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4">Judul Tugas</th>
            <th class="text-left p-4">Deskripsi</th>
            <th class="text-left p-4">Deadline</th>
            <th class="text-left p-4">Status</th>
            <th class="text-left p-4">Submit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-4">Algoritma Pemograman</td>
            <td class="p-4">11 September 2001</td>
            <td class="p-4">Bikin Iterasi</td>
            <td class="p-4 text-yellow-400">Not Yet</td>
            <td><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button></td>
          </tr>
          <tr>
            <td class="p-4">Algoritma Pemograman</td>
            <td class="p-4">11 September 2001</td>
            <td class="p-4">Bikin Iterasi</td>
            <td class="p-4 text-yellow-400">Not Yet</td>
            <td><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button></td>
          </tr>
          <tr>
            <td class="p-4">Algoritma Pemograman</td>
            <td class="p-4">11 September 2001</td>
            <td class="p-4">Bikin Iterasi</td>
            <td class="p-4 text-yellow-400">Not Yet</td>
            <td><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button></td>
          </tr>
          <tr>
            <td class="p-4">Algoritma Pemograman</td>
            <td class="p-4">11 September 2001</td>
            <td class="p-4">Bikin Iterasi</td>
            <td class="p-4 text-yellow-400">Not Yet</td>
            <td><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button></td>
          </tr>
          <!-- Repeat rows as needed -->
        </tbody>
      </table>
    </section>
    <header class="flex items-center justify-between">
      <h1 class="text-2xl font-bold mt-5">Struktur Data</h1>
    </header>

    <!-- Task Activity Table -->
    <section class="mt-6">
      <table class="w-full mt-4 bg-gray-800 rounded-lg">
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4">Judul Tugas</th>
            <th class="text-left p-4">Deskripsi</th>
            <th class="text-left p-4">Deadline</th>
            <th class="text-left p-4">Status</th>
            <th class="text-left p-4">Submit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-4">Algoritma Pemograman</td>
            <td class="p-4">11 September 2001</td>
            <td class="p-4">Bikin Iterasi</td>
            <td class="p-4 text-yellow-400">Not Yet</td>
            <td><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button></td>
          </tr>
          <tr>
            <td class="p-4">Algoritma Pemograman</td>
            <td class="p-4">11 September 2001</td>
            <td class="p-4">Bikin Iterasi</td>
            <td class="p-4 text-yellow-400">Not Yet</td>
            <td><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button></td>
          </tr>
          <tr>
            <td class="p-4">Algoritma Pemograman</td>
            <td class="p-4">11 September 2001</td>
            <td class="p-4">Bikin Iterasi</td>
            <td class="p-4 text-yellow-400">Not Yet</td>
            <td><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button></td>
          </tr>
          <tr>
            <td class="p-4">Algoritma Pemograman</td>
            <td class="p-4">11 September 2001</td>
            <td class="p-4">Bikin Iterasi</td>
            <td class="p-4 text-yellow-400">Not Yet</td>
            <td><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Go To Course</button></td>
          </tr>
          <!-- Repeat rows as needed -->
        </tbody>
      </table>
    </section>
  </main>
</div>

</body>
</html>