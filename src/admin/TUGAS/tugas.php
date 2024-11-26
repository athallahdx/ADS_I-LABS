<?php

include 'koneksi.php';

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $deadline = $_POST['deadline'];
  $status = $_POST['status'];
  $praktikum = $_POST['praktikum'];
  include 'koneksi.php';

  $query = "INSERT INTO tugas (ID_tugas, Nama_tugas, Deadline, Status, ID_praktikum) VALUES ('$id', '$name', '$deadline', '$status', '$praktikum')";
  $result = mysqli_query($conn, $query);

  if ($result) {
    header("Location: tugas.php");
    exit();
  } else {
    echo "Error: " . mysqli_error($conn);
  }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <script src="https://cdn.tailwindcss.com"></script>  
</head>
<body class="bg-gray-900 text-white font-sans">

 <div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="index.php"><div class="p-4 text-xl font-bold text-blue-400">ILABS</div></a>


    <nav class="space-y-2 mt-28">
          <a href="../dashboard.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-teal-400 rounded-full mr-3"></span> Dashboard
          </a>
          <a href="../course.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-green-500 rounded-full mr-3"></span> Deadline
          </a>
          <a href="../tasks.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-blue-500 rounded-full mr-3"></span> Tugas
          </a>
          <a href="../subject.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-red-500 rounded-full mr-3"></span> Materi
          </a>
          <a href="../present.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-purple-500 rounded-full mr-3"></span> Presensi
          </a>
          <a href="../discuss.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
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

<main class="flex-1 p-6 ml-64">
<header class="flex items-center justify-between">
        <h1 class="text-4xl font-bold p-4">Tambah Tugas</h1>
    </header>

    <section class=" bg-gray-800 p-6 rounded-lg shadow">
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-20">

            <form action="tugas.php" method="POST" class="mt-4">

                <label for="id" class="block text-gray-500">ID:</label>
                <input type="text" id="id" name="id" class="w-full p-2 mt-2 border rounded text-black">

                <label for="name" class="block text-gray-500">Nama Tugas:</label>
                <input type="text" id="name" name="name" class="w-full p-2 mt-2 border rounded text-black">

                <label for="deadline" class="block text-gray-500">Deadline:</label>
                <input type="text" id="deadline" name="deadline" class="w-full p-2 mt-2 border rounded text-black">

                <label for="status" class="block text-gray-500">Status:</label>
                <select name="status" id="status" class="w-full p-2 mt-2 border rounded text-black">
                    <option value="Belum Selesai">Belum Selesai</option>
                    <option value="Selesai">Selesai</option>
                </select>

                <label for="praktikum" class="block text-gray-500">Praktikum:</label>
                <input type="text" id="praktikum" name="praktikum" class="w-full p-2 mt-2 border rounded text-black">

              <button id="submit" name="submit" class="mt-4 px-4 py-2 bg-green-500 text-white rounded">Tambah</button>
            </form>
          </div>
        </div>
      </section>


      <header class="flex items-center justify-between">
      <h1 class="text-2xl font-bold">Sistem Operasi</h1>
    </header>

    <!-- Task Activity Table -->
    <section class="mt-6">
      <table class="w-full mt-4 bg-gray-800 rounded-lg">
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4">ID</th>
            <th class="text-left p-4">Judul Tugas</th>
            <th class="text-left p-4">Deadline</th>
            <th class="text-left p-4">Status</th>
            <th class="text-left p-4">Submit</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        
        include("koneksi.php");
        $read = mysqli_query($conn, "SELECT * FROM tugas WHERE ID_praktikum = '1' ORDER BY ID_tugas DESC");
        
        while ($data = mysqli_fetch_array($read)) 
        {
            echo "<tr>";
            echo "<td>" .$data['ID_tugas']."</td>";
            echo "<td>" .$data['Nama_tugas']."</td>";
            echo "<td>" .$data['Deadline']."</td>";
            echo "<td>" .$data['Status']."</td>";
            echo "<td> <a href='update.php?id=$data[ID_tugas]'>EDIT</a>
            | <a href='delete.php?id=$data[ID_tugas]'>HAPUS</a></td></tr>";
        }
        ?>
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
            <th class="text-left p-4">Deadline</th>
            <th class="text-left p-4">Status</th>
            <th class="text-left p-4">Submit</th>
          </tr>
        </thead>
        <tbody>
        <tr>
              <td class="p-4">Struktur Data</td>
              <td class="p-4">20 November 2024</td>
              <td class="p-4">Buat Stack</td>
              <td class="p-4 text-yellow-400">Belum Selesai</td>
              <td><button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg">Submit</button></td>
            </tr>
        </tbody>
      </table>
    </section>
      </main>

</body>
</html>
