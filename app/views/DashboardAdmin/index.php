
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
</head>
<body class="bg-gray-900 text-white font-sans">

<div id="overlay" class="fixed inset-0 w-full h-full bg-black bg-opacity-50 z-50 hidden"></div>

     <!-- Sidebar -->
<div class="flex h-screen fixed">
<aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="<?= BASEURL ?>LandingPage/index">
        <div class="p-4 text-xl font-bold text-blue-400">
          ILABS
        </div>
    </a>


    <nav class="space-y-2 mt-28">
    <a href="<?= BASEURL ?>Dashboard/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
          <span class="w-5 h-5 bg-teal-400 rounded-full mr-3"></span> Dashboard
          </a>
          <a href="<?= BASEURL ?>PraktikumList/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-green-500 rounded-full mr-3"></span> Praktikum
          </a>
          <a href="<?= BASEURL ?>Tugas/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-blue-500 rounded-full mr-3"></span> Tugas
          </a>
          <a href="<?= BASEURL ?>Materi/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-red-500 rounded-full mr-3"></span> Materi
          </a>
          <a href="<?= BASEURL ?>Presensi/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-purple-500 rounded-full mr-3"></span> Presensi
          </a>
          <a href="<?= BASEURL ?>ForumDiskusi/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
            <span class="w-5 h-5 bg-yellow-500 rounded-full mr-3"></span> Diskusi
          </a>
          <?php if(Session::get('role')=='Admin'): ?>
            <a href="<?= BASEURL ?>DashboardAdmin/index" class="py-2 px-4 hover:bg-gray-700 flex items-center">
              <span class="w-5 h-5 bg-pink-500 rounded-full mr-3"></span> Admin Dashboard
            </a>
          <?php endif; ?>
        </nav>
    </div>

    <div class="p-4">
          <a href="<?= BASEURL ?>Login/logout">
          <button class="py-2 px-4 w-full bg-red-700 rounded-md">Logout</button>
          </a>
      </div>
    </aside>
</div>

    <!-- Main Content -->
    <main class="flex-1 p-6 ml-64">
    <header class="flex items-center justify-between  ">
        <h1 class="text-2xl font-bold">Dashboard Admin</h1>
    </header>

    <section class="mt-6 h-auto w-full flex gap-5 m-auto">
        <!-- Project Card -->
        
        <div class="bg-gray-800 rounded-lg p-4 w-1/5 h-[250px] " >
          <img src="<?= UPLOADS ?>userprofile/<?= $data['profil_user']['foto_profil'] ?>" alt="" class="h-[220px] w-full">
        </div>

        <div class="bg-gray-800 rounded-lg p-4 w-[600px] h-[400px] ">
        <h1 class="text-2xl font-bold p-4">Biodata Admin</h1>
          <table>
            <tbody>
                <tr>
                <td class="p-2">Nama</td>
                <td>: Dimas Kendika</td>
                <!-- <td class="">Dimas Kendika </td> -->
                </tr>
                <tr>
                <td class="p-2">NIM</td>
                <td class="">: H1D023083</td>
                <!-- <td class="">H1D023083</td> -->
                </tr>
                <tr>
                <td class="p-2">Email</td>
                <td class="">: dkendika1@gmail.com</td>
                <!-- <td class="p-4 text-yellow-400">Belum Selesai</td> -->
                </tr>
                <tr>
                <td class="p-2">Semester</td>
                <td class="">: 2</td>
                <!-- <td class="p-4 text-yellow-400">Belum Selesai</td> -->
                </tr>
                <tr>
                <td class="p-2">Praktikum yang diampu</td>
                <td class="">: Sistem Operasi</td>
                <!-- <td class="p-4 text-yellow-400">Belum Selesai</td> -->
                </tr> 
                <tr>
                <td class="p-2">Motto</td>
                <td class="">: Semoga semua teraih</td>
                <!-- <td class="p-4 text-yellow-400">Belum Selesai</td> -->
                </tr> 
            </tbody>
          </table>
          </div>      
      </section>

      <section class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
  <!-- Daftar Praktikan -->
  <div class="bg-gray-800 rounded-lg p-4 flex flex-col justify-between">
    <div>
      <h2 class="text-2xl font-bold mb-5">Daftar Praktikan</h2>
      <p>Admin dapat mengubah role dari praktikan</p>
    </div>
    <a href="Praktikan/praktikan.php" class="self-end mt-6">
      <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Open</button>
    </a>
  </div>

  <!-- Penilaian -->
  <div class="bg-gray-800 rounded-lg p-4 flex flex-col justify-between">
    <div>
      <h2 class="text-2xl font-bold">Penilaian</h2>
      <p class="mt-4">Admin dapat menilai tugas praktikan</p>
    </div>
    <a href="Praktikan/grade.php" class="self-end mt-6">
      <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Open</button>
    </a>
  </div>

  <!-- Materi dan Tugas -->
  <div class="bg-gray-800 rounded-lg p-4 flex flex-col justify-between">
    <div>
      <h2 class="text-xl font-bold">Materi dan Tugas</h2>
      <p class="mt-4">Admin dapat menambahkan materi dan tugas kepada praktikan</p>
    </div>
    <a href="Praktikan/subtasks.php" class="self-end mt-6">
      <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Materi</button>
    </a>
  </div>
</section>
    </main>
</div>

</body>
</html>