<?php
  include 'koneksi.php';

  if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['name'];
    $shift = $_POST['shift'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $asprak = $_POST['asprak'];

    $query = "INSERT INTO praktikum (ID_praktikum, Nama_praktikum,Shift,Hari, Jam, Asprak) VALUES ('$id','$nama', '$shift', '$hari', '$jam', '$asprak')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      header("Location: praktikum.php");
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
    <title>Praktikum</title>
    <script src="https://cdn.tailwindcss.com"></script>  
</head>
<body class="bg-gray-900 text-white font-sans">

 <div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="index.php"><div class="p-4 text-xl font-bold text-blue-400">ILABS</div></a>


    <nav class="space-y-2 mt-28">
          <a href="../praktikum/praktikum.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-green-500 rounded-full mr-3"></span> Praktikum
          </a>
          <a href="../TUGAS/tugas.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-blue-500 rounded-full mr-3"></span> Tugas
          </a>
          <a href="../MATERI/materi.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-red-500 rounded-full mr-3"></span> Materi
          </a>
          
        </nav>
    </div>

    <div class="p-4">
        <a href="../../index.php">
        <button class="py-2 px-4 w-full bg-red-700 rounded-md">Logout</button>
        </a>
    </div>
    </aside>
</div>

<main class="flex-1 p-6 ml-64">
<header class="flex items-center justify-between">
        <h1 class="text-4xl font-bold p-4">Tambah Praktikum</h1>
    </header>

    <section class=" bg-gray-800 p-6 rounded-lg shadow">
          <!-- Form Kehadiran -->
          <div class="grid grid-cols-1 md:grid-cols-2 gap-20">
            <form action="#" method="POST" class="mt-4">   
                <label for="id" class="block text-gray-500">ID:</label>
                <input type="text" name="id" id="id" class="w-full p-2 mt-2 border rounded text-black">  
            
                <label for="name" class="block text-gray-500">Nama Praktikum:</label>
                <input type="text" id="name" name="name" class="w-full p-2 mt-2 border rounded text-black">

                <label for="nim" class="block text-gray-500">Shift:</label>
                <input type="text" id="nim" name="nim" class="w-full p-2 mt-2 border rounded text-black">

                <label for="hari" class="block text-gray-500">Hari:</label>
                <input type="text" id="hari" name="hari" class="w-full p-2 mt-2 border rounded text-black">

                <label for="jam" class="block text-gray-500">Jam:</label>
                <input type="text" id="jam" name="jam" class="w-full p-2 mt-2 border rounded text-black">

                <label for="asprak" class="block text-gray-500">Asprak:</label>
                <input type="text" id="asprak" name="asprak" class="w-full p-2 mt-2 border rounded text-black">

              <button type="submit" name="submit" id="submit" class="mt-4 px-4 py-2 bg-green-500 text-white rounded">Tambah</button>
            </form>
          </div>
        </div>
      </section>

      <header class="flex items-center justify-between">
      <h1 class="text-2xl font-bold mt-5">DAFTAR PRAKTIKUM</h1>
    </header>

    <!-- Task Activity Table -->
    <section class="mt-6">
      <table class="w-full mt-4 bg-gray-800 rounded-lg">
        <thead>
        <tr class="text-gray-400">
            <th class="text-left p-4">ID</th>
            <th class="text-left p-4">Nama Praktikum</th>
            <th class="text-left p-4">Shift</th>
            <th class="text-left p-4">Hari</th>
            <th class="text-left p-4">Jam</th>
            <th class="text-left p-4">Asprak</th>
          </tr>
        </thead>
        <tbody>
        <?php 
        
        include("koneksi.php");
        $read = mysqli_query($conn, "SELECT * FROM praktikum");
        
        while ($data = mysqli_fetch_array($read)) 
        {
            echo "<tr>";
            echo "<td>" .$data['ID_praktikum']."</td>";
            echo "<td>" .$data['Nama_praktikum']."</td>";
            echo "<td>" .$data['Shift']."</td>";
            echo "<td>" .$data['Hari']."</td>";
            echo "<td>" .$data['Jam']."</td>";
            echo "<td>" .$data['Asprak']."</td>";
            echo "<td><a href='delete.php?id=$data[ID_praktikum]'>HAPUS</a></td></tr>";
        }
        ?>
        </tbody>
      </table>
    </section>

      </main>

</body>
</html>