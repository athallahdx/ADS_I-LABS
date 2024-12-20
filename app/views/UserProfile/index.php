
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
        
        <div class="bg-gray-800 rounded-lg p-4 w-1/4 h-[250px] " >
          <img src="<?= UPLOADS ?>userprofile/<?= $data['profil_user']['foto_profil'] ?>" alt="" class="h-[220px] w-full">
          <div class="mt-10">
            <h1 class="text-2xl font-bold">Update Profil</h1>
            <button class="mt-2 px-3 py-2 bg-blue-500 text-white rounded-lg" id="update-btn">Update</button>
          </div>
          </div>

          <section class="z-[100] w-1/2 bg-gray-800 p-6 rounded-lg shadow fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 hidden" id="update-container">
          <div class="grid grid-cols-1  gap-20">
            <form action="<?= BASEURL ?>UserProfile/handleUpdate" method="POST" enctype="multipart/form-data" class="mt-4">

                <h1 class="text-2xl font-bold text-blue-500 text-center">Update Profil</h1>  

                <label for="name" class="block text-white">Foto Profil</label>
                <input type="file" id="fotoprofil" name="fotoprofil" class="w-full p-2 mt-2 border rounded text-white">

                <label for="name" class="block text-white">Nama :</label>
                <input type="text" id="name" name="fullname" value="<?= $data['user']['fullname'] ?>" class="w-full p-2 mt-2 border rounded text-black">

                <label for="username" class="block text-white">Username :</label>
                <input type="username" id="username" name="username" value="<?= $data['user']['username'] ?>" class="w-full p-2 mt-2 border rounded text-black">
                
                <label for="nohp" class="block text-white">No. HP:</label>
                <input type="text" id="nohp" name="nohp" value="<?= $data['profil_user']['nomor_telpon'] ?>" class="w-full p-2 mt-2 border rounded text-black">

                <div class="mt-4 flex justify-end">
              <button type="submit" id="submit" name="submit" class="mt-4 px-4 py-2 bg-blue-500 text-white rounded flex justify-end">Update</button>
              </div>
            </form>
          </div>
      </section>

        <div class="bg-gray-800 rounded-lg p-4 w-3/5 h-[400px] ">
        <h1 class="text-2xl font-bold p-4">Biodata Diri</h1>
          <table>
            <tbody>
                <tr class="font-bold">
                  <td class="p-2">Nama</td>
                  <td>: <?= $data['user']['fullname'] ?></td>
                </tr>

                <tr class="font-bold">
                  <td class="p-2">Username</td>
                  <td>: <?= $data['user']['username'] ?></td>
                </tr>

                <tr class="font-bold">
                  <td class="p-2">Prodi</td>
                  <td>: <?= $data['user']['prodi'] ?></td>
                </tr>

                <tr class="font-bold">
                  <td class="p-2">NIM</td>
                  <td class="">: <?= $data['user']['nim'] ?> </td>
                </tr>
                
                <tr class="font-bold">
                  <td class="p-2">Semester</td>
                  <td class="">: <?= $data['profil_user']['semester'] ?></td>
                </tr>

                <tr class="font-bold">
                <td class="p-2">Email</td>
                <td class="">: <?= $data['user']['email'] ?></td>
                </tr>

                <tr class="font-bold">
                  <td class="p-2">No. HP</td>
                  <td class="">: <?= $data['profil_user']['nomor_telpon'] ?></td>
                </tr>
            </tbody>
          </table>
          </div>
          
          

            <div class="bg-gray-800 rounded-lg p-4 w-1/5 h-[400px] ">
            <h1 class="text-2xl font-bold">Status Kehadiran</h1>
            <?php 
            // Initialize summary array
            $summary = [];

            // Calculate the counts
            foreach ($data['presensi'] as $presensi) {
                $key = $presensi['nama_praktikum'] . ' ' . $presensi['nama_shift'] . ' | ';
                if (!isset($summary[$key])) {
                    $summary[$key] = ['total' => 0, 'filled' => 0];
                }
                $summary[$key]['total']++;
                if ($presensi['status_presensi'] !== NULL) {
                    $summary[$key]['filled']++;
                }
            }

            // Display the results
            foreach ($summary as $praktikumShift => $counts): ?>
                <h2 class="mt-4">
                    <?= $praktikumShift . " " . $counts['filled'] . "/" . $counts['total'] ?>
                </h2>
            <?php endforeach; ?>

            </div>
      </section>

      <section class="mt-6 h-auto w-full flex gap-5">
      <div class="bg-gray-800 w-full rounded-lg p-4 w-2/4 h-auto " >
        
          <h1 class="text-2xl font-bold p-4">Riwayat Praktikum</h1>
          
          <table>
            <thead>
                <th class=" text-left p-4">Nama Praktikum</th>
                <th class="text-left p-4">Shift</th>
                <th class="text-left p-4">Ruangan</th>
                <th class="text-left p-4">Jadwal</th>
            </thead>
            <tbody>
              <?php foreach($data['praktikum'] as $praktikum): ?>
                <tr>
                  <td class="p-4"><?= $praktikum['nama_praktikum'] ?></td>
                  <td class="p-4"><?= $praktikum['nama_shift'] ?></td>
                  <td class="p-4"><?= $praktikum['ruangan'] ?></td>
                  <td class="p-4"><?= $praktikum['hari'] . " | " . $praktikum['waktu_mulai'] . "-" . $praktikum['waktu_selesai'] ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      <!-- <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-auto " >
        
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

        </div> -->

      </section>



        </div>
    </main>
</div>

<script>
    const overlay = document.getElementById('overlay');
    const updateBtn = document.getElementById('update-btn');
    const updateForm = document.getElementById('update-container');
 

    function openPopup(popup) {
        popup.style.display = 'block';
        overlay.style.display = 'block';
    }

    function closePopup() {
        updateForm.style.display = 'none';
        overlay.style.display = 'none';
    }

    updateBtn.addEventListener('click', (event) => {
        openPopup(updateForm);
        event.stopPropagation();
    });

    // Close popup and overlay when clicking on the overlay
    overlay.addEventListener('click', () => {
        closePopup();
    });

    // Prevent closing when clicking inside the popup
    updateForm.addEventListener('click', (event) => event.stopPropagation());
    
</script>

</body>
</html>
