<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi</title>
    <script src="https://cdn.tailwindcss.com"></script>  
</head>
<body class="bg-gray-900 text-white font-sans">

<div id="overlay" class="fixed inset-0 w-full h-full bg-black bg-opacity-50 z-50 hidden"></div>


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
        <h1 class="text-4xl font-bold p-4">Tambah Materi dan Tugas</h1>
</header>

<div class="p-4">
    <button class="mt-2 px-4 py-2 bg-blue-500 text-white rounded-lg" id="tambah-materi">Tambah Materi</button>
    <button class="mt-2 ml-4 px-4 py-2 bg-blue-500 text-white rounded-lg" id="tambah-tugas">Tambah Tugas</button>
</div>

    <section class="z-[100] w-1/3 bg-gray-800 p-6 rounded-lg shadow fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden" id="materi-container">
          <div class="grid grid-cols-1  gap-20">
            <form action="#" method="POST" class="mt-4">   
              
                <h1 class="text-2xl font-bold text-blue-500 text-center">Tambah Materi</h1>

                <label for="name" class="block text-white">Judul Materi:</label>
                <input type="text" id="name" name="name" class="w-full p-2 mt-2 border rounded text-white">

                <label for="praktikum" class="block text-white">Deskripsi Materi:</label>
                <input type="text" id="praktikum" name="praktikum" class="w-full p-2 mt-2 border rounded text-white">

                <label for="file" class="block text-white">File Materi :</label>
                <input type="file" id="file" name="file" class="w-full p-2 mt-2 border rounded text-white ">
                
                <label for="date" class="block text-white">Tanggal Upload :</label>
                <input type="date" id="date" name="date" class="w-full p-2 mt-2 border rounded text-white">

                <div class="mt-4 flex justify-end">
              <button id="submit" name="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded">Tambah</button>
              </div>
            </form>
          </div>
      </section>

    <section class="z-[100] w-1/3 bg-gray-800 p-6 rounded-lg shadow fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden" id="tugas-container">
          <div class="grid grid-cols-1  gap-20">
            <form action="#" method="POST" class="mt-4">  

                <h1 class="text-2xl font-bold text-blue-500 text-center">Tambah Tugas</h1>  

                <label for="name" class="block text-white">Judul Tugas :</label>
                <input type="text" id="name" name="name" class="w-full p-2 mt-2 border rounded text-black">

                <label for="praktikum" class="block text-white">Deskripsi Tugas :</label>
                <input type="text" id="praktikum" name="praktikum" class="w-full p-2 mt-2 border rounded text-black">

                <label for="file" class="block text-white">File :</label>
                <input type="file" id="file" name="file" class="w-full p-2 mt-2 border rounded text-white">
                
                <label for="date" class="block text-white">Deadline :</label>
                <input type="date" id="date" name="date" class="w-full p-2 mt-2 border rounded text-black">

                <div class="mt-4 flex justify-end">
              <button id="submit" name="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded flex justify-end">Tambah</button>
              </div>
            </form>
          </div>
      </section>

      <header class="flex items-center ml-4 mt-10 justify-between">
      <h1 class="text-2xl font-bold">Daftar Materi</h1>
    </header>

    <!-- Task Activity Table -->
    <section class="mt-4">
      <table class="w-[95%] mt-4 ml-4 bg-gray-800 rounded-lg border border-white" > 
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4 border border-white">ID</th>
            <th class="text-left p-4 border border-white">Praktikum</th>
            <th class="text-left p-4 border border-white">Judul Materi</th>
            <th class="text-left p-4 border border-white">Deskripsi Materi</th>
            <th class="text-left p-4 border border-white">File Materi</th>
            <th class="text-left p-4 border border-white">Tanggal Upload</th>
          </tr>
        </thead>
        <tbody>
        <tr>
          <td class="p-4 border border-white">1</td>
          <td class="p-4 border border-white">Sistem Operasi</td>
          <td class="p-4 border border-white">Panduan Menggunakan CMD</td>  
          <td class="p-4 border border-white">Memuat mengenai anuan</td> 
          <td class="p-4 border border-white">anu</td> 
          <td class="p-4 border border-white">15 des 2024</td>  
        </tr>
        <tr>
          <td class="p-4 border border-white">2</td>
          <td class="p-4 border border-white">Sistem Operasi</td>
          <td class="p-4 border border-white">Panduan Memahami Command Prompt</td>
          <td class="p-4 border border-white">Memuat mengenai anuan</td>
          <td class="p-4 border border-white">anu</td>
          <td class="p-4 border border-white">13 des 2024</td>
        </tr>
          </tbody>
        </table>
    </section>
    <header class="flex items-center ml-4 mt-10 justify-between">
      <h1 class="text-2xl font-bold mt-5">Daftar Tugas</h1>
    </header>

    <!-- Task Activity Table -->
    <section class="mt-6">
      <table class="w-[95%] mt-4 ml-4 bg-gray-800 rounded-lg">
        <thead>
          <tr class="text-gray-400">
            <th class="text-left p-4 border border-white">ID</th>
            <th class="text-left p-4 border border-white">Praktikum</th>
            <th class="text-left p-4 border border-white">Judul Tugas</th>
            <th class="text-left p-4 border border-white">Deskripsi Tugas</th>
            <th class="text-left p-4 border border-white">File Tugas</th>
            <th class="text-left p-4 border border-white">Deadline</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-4 border border-white">1</td>
            <td class="p-4 border border-white">Sistem Operasi</td>
            <td class="p-4 border border-white">Buat File</td>
            <td class="p-4 border border-white">Gaboleh pake ai</td>
            <td class="p-4 border border-white">anu</td>
            <td class="p-4 border border-white">15 des 2024</td>
          </tr>
          <tr>
            <td class="p-4 border border-white">2</td>
            <td class="p-4 border border-white">Sistem Operasi</td> 
            <td class="p-4 border border-white">Hapus File</td>
            <td class="p-4 border border-white">Gaboleh pake ai</td>
            <td class="p-4 border border-white">anu</td>
            <td class="p-4 border border-white">13 des 2024</td>
        </tbody>
      </table>
    </section>

      </main>

</body>
<script>
  const overlay = document.getElementById('overlay');
    const formMateri = document.getElementById('materi-container');
    const formTugas = document.getElementById('tugas-container');
    const tambahMateri = document.getElementById('tambah-materi');
    const tambahTugas = document.getElementById('tambah-tugas');

    function openPopup(popup) {
        popup.style.display = 'block';
        overlay.style.display = 'block';
    }

    function closePopup() {
        formMateri.style.display = 'none';
        formTugas.style.display = 'none';
        overlay.style.display = 'none';
    }

    tambahMateri.addEventListener('click', (event) => {
        openPopup(formMateri);
        event.stopPropagation();
    });

    tambahTugas.addEventListener('click', (event) => {
        openPopup(formTugas);
        event.stopPropagation();
    });

    // Close popup and overlay when clicking on the overlay
    overlay.addEventListener('click', () => {
        closePopup();
    });

    // Prevent closing when clicking inside the popup
    formMateri.addEventListener('click', (event) => event.stopPropagation());
    formTugas.addEventListener('click', (event) => event.stopPropagation());
</script>

</html>