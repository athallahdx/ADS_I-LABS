<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade - ILABS</title>
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
  <main class="flex-1 p-6 ml-64">
    <header class="flex items-center justify-between mb-5">
      <h1 class="text-2xl font-bold">Daftar Praktikan</h1>

</header>

    <!-- Task Activity Table -->
    <section class="mt-6">
      <table class="w-full mt-4 bg-gray-800 rounded-lg">
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4">ID User</th>
            <th class="text-left p-4">Username</th>
            <th class="text-left p-4">Fullname</th>
            <th class="text-left p-4">NIM</th>
            <th class="text-left p-4">Email</th>
            <th class="text-left p-4">Upgrade</th>
          </tr>
        </thead>
        <tbody>
            <tr>
              <td class="px-4">1</td>
              <td class="px-4">Dimas</td>
              <td class="px-4">Dimas Kendika Fazrulfalah</td>
              <td class="px-4">H1D023083</td>
              <td class="px-4">dkendika1@gmail</td>
              <td class="px-4">
                <button class="py-2 px-4 bg-green-500 rounded-md">
                Upgrade Role
                </button>
            </td>
            </tr>
            <tr>
              <td class="px-4">1</td>
              <td class="px-4">Dimas</td>
              <td class="px-4">Dimas Kendika Fazrulfalah</td>
              <td class="px-4">H1D023083</td>
              <td class="px-4">dkendika1@gmail</td>
              <td class="px-4">
                <button class="py-2 px-4 bg-green-500 rounded-md">
                Upgrade Role
                </button>
            </td>
            </tr>
            <tr>
              <td class="px-4">1</td>
              <td class="px-4">Dimas</td>
              <td class="px-4">Dimas Kendika Fazrulfalah</td>
              <td class="px-4">H1D023083</td>
              <td class="px-4">dkendika1@gmail</td>
              <td class="px-4">
                <button class="py-2 px-4 bg-green-500 rounded-md">
                Upgrade Role
                </button>
            </td>
            </tr>      
          </tbody>
        </table>
    </section>
  </main>
</div>

</body>
</html>