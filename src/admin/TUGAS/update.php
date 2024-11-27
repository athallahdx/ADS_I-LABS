<!-- <?php
include("koneksi.php");

$id = $_GET['id'];

// Ambil data berdasarkan ID
$query = "SELECT * FROM tugas WHERE ID_tugas = '$id'";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_array($result);

if (!$data) {
    echo "Data tidak ditemukan.";
    exit;
    
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
        <h1 class="text-4xl font-bold p-4">Update Tugas</h1>
    </header>

    <section class=" bg-gray-800 p-6 rounded-lg shadow">
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-20">

            <form action="tugas.php?id=<?php echo $data['ID_tugas']; ?>" method="POST" class="mt-4">

                <label for="id" class="block text-gray-500">ID:</label>
                <input type="text" id="id" name="id" class="w-full p-2 mt-2 border rounded text-black" value="<?php echo $data['ID_tugas']; ?>"  readonly>

                <label for="name" class="block text-gray-500">Nama Tugas:</label>
                <input type="text" id="name" name="name" class="w-full p-2 mt-2 border rounded text-black" value="<?php echo $data['Nama_tugas']; ?>">

                <label for="deadline" class="block text-gray-500">Deadline:</label>
                <input type="text" id="deadline" name="deadline" class="w-full p-2 mt-2 border rounded text-black" value="<?php echo $data['Deadline']; ?>">

                <label for="status" class="block text-gray-500">Status:</label>
                <select name="status" id="status" class="w-full p-2 mt-2 border rounded text-black">
                    <option value="Belum Selesai" <?php echo $data['Status'] == 'Belum Selesai' ? 'selected' : ''; ?>>Belum Selesai</option>
                    <option value="Selesai" <?php echo $data['Status'] == 'Selesai' ? 'selected' : ''; ?>>Selesai</option>
                </select>


                <label for="praktikum" class="block text-gray-500">Praktikum:</label>
                <input type="text" id="praktikum" name="praktikum" class="w-full p-2 mt-2 border rounded text-black" value="<?php echo $data['ID_praktikum']; ?>">

              <button name="update" id="update" class="mt-4 px-4 py-2 bg-green-500 text-white rounded">Update</button>
            </form>

            <?php
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $deadline = $_POST['deadline'];
                $status = $_POST['status'];
                $praktikum = $_POST['praktikum'];

                $updateQuery = "UPDATE tugas 
                SET Nama_tugas = '$name', 
                    Deadline = '$deadline', 
                    Status = '$status', 
                    ID_praktikum = '$praktikum' 
                WHERE ID_tugas = '$id'";

                $updateResult = mysqli_query($conn, $updateQuery);

                if ($updateResult) {
                    header("Location: update.php");
                    exit();
                }else{
                    echo "Error: " . mysqli_error($conn);
                }
                }
                ?>
          </div>
        </div>
      </section>
      </main>

</body>
</html> -->
