
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
    <header class="flex items-center justify-between  ">
        <h1 class="text-2xl font-bold p-4">Daftar Praktikan</h1>
    </header>

      <div class="bg-gray-800 rounded-lg p-4 w-full h-auto " >
        
          <!-- <h1 class="text-2xl font-bold p-4">Daftar Nilai</h1> -->
          
          <table class="border border-white">
            <thead>
                <th class=" text-left p-2 border border-white">ID</th>
                <th class=" text-left p-2 border border-white">Username Praktikan</th>
                <th class="text-left p-2 border border-white">Nama Lengkap Praktikan</th>
                <th class="text-left p-2 border border-white">NIM</th>
                <th class="text-left p-2 border border-white">Email</th>
                <th class="text-left p-2 border border-white">Ganti Role</th>
                <th class="text-left p-2 border border-white">Praktikum Diampu</th>
                <th class="text-left p-2 border border-white">Aksi</th>

            </thead>
            <tbody>
                <tr>
                <td class="p-2 border border-white">1</td>
                <td class="p-2 border border-white">athalahahkhdakhdks</td>
                <td class="p-2 border border-white">jdwahawhdadhuawdhauw</td>
                <td class="p-2 border border-white">h1d023083</td>
                <td class="p-2 border border-white">JAWHDHDWU@GMAIL.com</td>
                <td class="p-2 border border-white">
                    <select class="w-full p-2 mt-2 border rounded text-black">
                        <option value="Admin">Asprak</option>
                        <option value="User">Praktikan</option>
                    </select>
                </td>
                <td class="p-2 border border-white">
                <select class="w-full p-2 mt-2 border rounded text-black">
                        <option value="Algoritma dan Pemrograman">Algoritma dan Pemrograman</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Struktur Data">Struktur Data</option>
                        <option value="Sistem Operasi">Sistem Operasi</option>
                        <option value="Pemrograman Berbasis Objek">Pemrograman Berbasis Objek</option>
                        <option value="Pemrograman Web I">Pemgrograman Web I</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <!-- <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option> -->
                    </select>
                </td>
                <td class="p-2 border border-white">
                    <button class="py-2 px-4 w-full bg-blue-500 rounded-md">Update Role</button>
                </td>
                </tr>
                <tr>
                <td class="p-2 border border-white">1</td>
                <td class="p-2 border border-white">athalahahkhdakhdks</td>
                <td class="p-2 border border-white">jdwahawhdadhuawdhauw</td>
                <td class="p-2 border border-white">h1d023083</td>
                <td class="p-2 border border-white">JAWHDHDWU@GMAIL.com</td>
                <td class="p-2 border border-white">
                    <select class="w-full p-2 mt-2 border rounded text-black">
                        <option value="Admin">Asprak</option>
                        <option value="User">Praktikan</option>
                    </select>
                </td>
                <td class="p-2 border border-white">
                <select class="w-full p-2 mt-2 border rounded text-black">
                        <option value="Algoritma dan Pemrograman">Algoritma dan Pemrograman</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Struktur Data">Struktur Data</option>
                        <option value="Sistem Operasi">Sistem Operasi</option>
                        <option value="Pemrograman Berbasis Objek">Pemrograman Berbasis Objek</option>
                        <option value="Pemrograman Web I">Pemgrograman Web I</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <!-- <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option> -->
                    </select>
                </td>
                <td class="p-2 border border-white">
                    <button class="py-2 px-4 w-full bg-blue-500 rounded-md">Update Role</button>
                </td>
                </tr>
            </tbody>
          </table>

        </div>
    <header class="flex items-center justify-between  ">
        <h1 class="text-2xl font-bold p-4">Daftar Admin (Asprak)</h1>
    </header>

      <div class="bg-gray-800 rounded-lg p-4 w-full h-auto " >
        
          <!-- <h1 class="text-2xl font-bold p-4">Daftar Nilai</h1> -->
          
          <table class="border border-white">
            <thead>
                <th class=" text-left p-2 border border-white">ID</th>
                <th class=" text-left p-2 border border-white">Username Asprak</th>
                <th class="text-left p-2 border border-white">Nama Lengkap Asprak</th>
                <th class="text-left p-2 border border-white">NIM</th>
                <th class="text-left p-2 border border-white">Email</th>
                <th class="text-left p-2 border border-white">Ganti Role</th>
                <th class="text-left p-2 border border-white">Praktikum Diampu</th>
                <th class="text-left p-2 border border-white">Aksi</th>

            </thead>
            <tbody>
                <tr>
                <td class="p-2 border border-white">1</td>
                <td class="p-2 border border-white">athalahahkhdakhdks</td>
                <td class="p-2 border border-white">jdwahawhdadhuawdhauw</td>
                <td class="p-2 border border-white">h1d023083</td>
                <td class="p-2 border border-white">JAWHDHDWU@GMAIL.com</td>
                <td class="p-2 border border-white">
                    <select class="w-full p-2 mt-2 border rounded text-black">
                        <option value="Admin">Asprak</option>
                        <option value="User">Praktikan</option>
                    </select>
                </td>
                <td class="p-2 border border-white">
                <select class="w-full p-2 mt-2 border rounded text-black">
                        <option value="Algoritma dan Pemrograman">Algoritma dan Pemrograman</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Struktur Data">Struktur Data</option>
                        <option value="Sistem Operasi">Sistem Operasi</option>
                        <option value="Pemrograman Berbasis Objek">Pemrograman Berbasis Objek</option>
                        <option value="Pemrograman Web I">Pemgrograman Web I</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <!-- <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option> -->
                    </select>
                </td>
                <td class="p-2 border border-white">
                    <button class="py-2 px-4 w-full bg-blue-500 rounded-md">Update Role</button>
                </td>
                </tr>
                <tr>
                <td class="p-2 border border-white">1</td>
                <td class="p-2 border border-white">athalahahkhdakhdks</td>
                <td class="p-2 border border-white">jdwahawhdadhuawdhauw</td>
                <td class="p-2 border border-white">h1d023083</td>
                <td class="p-2 border border-white">JAWHDHDWU@GMAIL.com</td>
                <td class="p-2 border border-white">
                    <select class="w-full p-2 mt-2 border rounded text-black">
                        <option value="Admin">Asprak</option>
                        <option value="User">Praktikan</option>
                    </select>
                </td>
                <td class="p-2 border border-white">
                <select class="w-full p-2 mt-2 border rounded text-black">
                        <option value="Algoritma dan Pemrograman">Algoritma dan Pemrograman</option>
                        <option value="Basis Data">Basis Data</option>
                        <option value="Struktur Data">Struktur Data</option>
                        <option value="Sistem Operasi">Sistem Operasi</option>
                        <option value="Pemrograman Berbasis Objek">Pemrograman Berbasis Objek</option>
                        <option value="Pemrograman Web I">Pemgrograman Web I</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <!-- <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option> -->
                    </select>
                </td>
                <td class="p-2 border border-white">
                    <button class="py-2 px-4 w-full bg-blue-500 rounded-md">Update Role</button>
                </td>
                </tr>
            </tbody>
          </table>

        </div>
    </main>
</div>

</body>
</html>
