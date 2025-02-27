
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
        <div class="p-4 text-4xl font-bold text-center text-blue-400">
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
                <td>: <?= $data['user']['fullname'] ?></td>
                </tr>

                <tr>
                <td class="p-2">NIM</td>
                <td class="">: <?= $data['user']['nim'] ?></td>
                </tr>

                <tr>
                <td class="p-2">Email</td>
                <td class="">: <?= $data['user']['email'] ?></td>
                </tr>

                <tr>
                <td class="p-2">Semester</td>
                <td class="">: <?= $data['profil_user']['semester'] ?></td>
                </tr>

                <tr>
                <td class="p-2">Praktikum yang diampu</td>
                <td class="ps-3">: 
                  <?php foreach($data['admin'] as $admin): ?>
                    <?= $admin['nama_praktikum'] . " " . $admin['nama_shift'] ?>
                  <?php endforeach; ?>
                </td>
                </tr>  
            </tbody>
          </table>
          </div>      
      </section>

      <section class="mt-6 grid grid-cols-1 md:grid-cols-3 gap-6">
  <?php if($data['user']['role']=='Super Admin'): ?>
  <!-- Daftar Praktikan -->
  <div class="bg-gray-800 rounded-lg p-4 flex flex-col justify-between">
    <div>
      <h2 class="text-2xl font-bold mb-5">Daftar Praktikan</h2>
      <p>Admin dapat mengubah role dari praktikan</p>
    </div>
    <a href="<?= BASEURL ?>RoleManager/index" class="self-end mt-6">
      <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Open</button>
    </a>
  </div>
  <?php endif; ?>


  <!-- Penilaian -->
  <div class="bg-gray-800 rounded-lg p-4 flex flex-col justify-between">
    <div>
      <h2 class="text-2xl font-bold">Penilaian</h2>
      <p class="mt-4">Admin dapat menilai tugas praktikan</p>
    </div>
    <a href="<?= BASEURL ?>Penilaian/index" class="self-end mt-6">
      <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Open</button>
    </a>
  </div>

  <!-- Materi dan Tugas -->
  <div class="bg-gray-800 rounded-lg p-4 flex flex-col justify-between">
    <div>
      <h2 class="text-xl font-bold">Materi dan Tugas</h2>
      <p class="mt-4">Admin dapat menambahkan materi dan tugas kepada praktikan</p>
    </div>
    <a href="<?= BASEURL ?>AdminAddMateri/index" class="self-end mt-6">
      <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Materi</button>
    </a>
  </div>
</section>
    </main>
</div>

</body>
</html>