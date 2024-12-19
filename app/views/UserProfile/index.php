
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="<?= ASSETSCSS ?>output.css">
</head>
<body class="bg-gray-900 text-white font-sans">

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
    <header class="flex items-center justify-between">
        <h1 class="text-2xl font-bold">Profil Akun</h1>
    </header>

    <section class="mt-6 h-auto w-full flex gap-5">
        <!-- Project Card -->
        
        <div class="bg-gray-800 rounded-lg p-4 w-1/5 h-[250px] " >
          <img src="../public/img/programming-background-with-person-working-with-codes-computer.jpg" alt="" class="h-[220px] w-full">
          <div class="mt-10">
            <h1 class="text-2xl font-bold">Update Profil</h1>
            <button class="mt-2 px-3 py-2 bg-teal-500 text-white rounded-lg">Update</button>
          </div>
          </div>

        <div class="bg-gray-800 rounded-lg p-4 w-3/5 h-[400px] ">
        <h1 class="text-2xl font-bold p-4">Biodata Diri</h1>
          <table>
            <tbody>
                <tr>
                <td class="p-4">Nama</td>
                <td>: Dimas Kendika</td>
                <!-- <td class="">Dimas Kendika </td> -->
                </tr>
                <tr>
                <td class="p-4">NIM</td>
                <td class="">: H1D023083</td>
                <!-- <td class="">H1D023083</td> -->
                </tr>
                <tr>
                <td class="p-4">Email</td>
                <td class="">: dkendika1@gmail.com</td>
                <!-- <td class="p-4 text-yellow-400">Belum Selesai</td> -->
                </tr>
                <tr>
                <td class="p-4">Semester</td>
                <td class="">: 2</td>
                <!-- <td class="p-4 text-yellow-400">Belum Selesai</td> -->
                </tr>
            </tbody>
          </table>
          </div>      

          <div class="bg-gray-800 rounded-lg p-4 w-1/5 h-[400px] ">
            <h1 class="text-2xl font-bold">Status Kehadiran</h1>
            <h2 class="mt-4">
                Sistem Operasi | 4/16
            </h2>
            <h2 class="mt-4">
                Struktur Data  | 4/16
            </h2>

          </div>
      </section>

      <section class="mt-6 h-auto w-full flex gap-5">
      <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-auto " >
        
          <h1 class="text-2xl font-bold p-4">Riwayat Praktikum</h1>
          
          <table>
            <thead>
                <th class=" text-left p-4">Nama Praktikum</th>
                <th class="text-left p-4">Shift</th>
                <th class="text-left p-4">Jadwal</th>
                <th class="text-left p-4">Nilai</th>
            </thead>
            <tbody>
                <tr>
                <td class="p-4">Algoritma dan Pemograman</td>
                <td class="p-4">C</td>
                <td class="p-4">Senin | 14:00 - 16:00 <br>Laboratorium Baru</td>
                <td class="p-4">A</td>
                </tr>
                <tr>
                <td class="p-4">Basis Data</td>
                <td class="p-4">C</td>
                <td class="p-4">Selasa| 14:00 - 16:00 <br>Laboratorium Jaringan</td>
                <td class="p-4">A</td>
                </tr>
            </tbody>
          </table>

        </div>
      <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-auto " >
        
          <h1 class="text-2xl font-bold p-4">Daftar Nilai</h1>
          
          <table>
            <thead>
                <th class=" text-left p-4">Nama Praktikum</th>
                <th class="text-left p-4">Tugas</th>
                <th class="text-left p-4">Nilai</th>
                <th class="text-left p-4">Keterangan</th>

            </thead>
            <tbody>
                <tr>
                <td class="p-5">Sistem Operasi</td>
                <td class="p-5">Tugas 1</td>
                <td class="p-5">80</td>
                <td class="p-5">Kurang Teliti</td>
                </tr>
                <tr>
                <td class="p-5">Struktur Data</td>
                <td class="p-5">Tugas 2</td>
                <td class="p-5">90</td>
                <td class="p-5">Bagus</td>
                </tr>
            </tbody>
          </table>

        </div>

      </section>



        </div>
    </main>
</div>

</body>
</html>
