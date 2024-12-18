
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="public/css/styles.css">
</head>
<body class="bg-gray-900 text-white font-sans">

  <div class="flex h-screen fixed">
    <aside class="w-64 bg-gray-800 flex flex-col justify-between">
    <div>
    <a href="index.php"><div class="p-4 text-xl font-bold text-blue-400">ILABS</div></a>


    <nav class="space-y-2 mt-44">
        
          <p class="block py-2 px-4 text-lg">Anda Harus Login Terlebih Dahulu Untuk Dapat Mengakses Berbagai Fitur dari <span class="text-blue-400 ">Informatics Labs</span></p>
          <!-- <a href="tasks.php" class="block py-2 px-4 hover:bg-gray-700 flex items-center">
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
          </a> -->
        </nav>
    </div> 

    <div class="p-4">
        <a href="login.php">
        <button class="py-2 px-4 w-full bg-blue-700 rounded-md">Login</button>
        </a>
    </div>
    </aside>
</div>
    <!-- Main Content -->
    <main class="flex-1 p-6 ml-64">
    <header class="relative w-full h-64">
    <div class="relative w-full h-full bg-cover bg-center" style="background-image: url('../public/img/aa-gedung-ft-1-1024x600.jpg');">
        <h1 class="absolute inset-0 flex items-center justify-center text-3xl font-bold text-white bg-black bg-opacity-50">
            Welcome to the <span class="text-blue-400 ml-2">Informatics Labs</span>
        </h1>
    </div>
</header>


      <section class="mt-6 h-auto w-full flex gap-5">
        <!-- Project Card -->
        
        <div class="bg-gray-800 rounded-lg p-4 w-2/5 h-[400px] " >
          <img src="../public/img/programming-background-with-person-working-with-codes-computer.jpg" alt="" class="h-[350px] w-full">
          </div>

        <div class="bg-gray-800 rounded-lg p-4 w-3/5 h-[400px] m-auto ">
          <h2 class="text-3xl font-bold mb-5 mt-10">Apa itu <span class="text-blue-400">Informatics Labs</span> ?</h2>   
          <!-- data dummy -->
          <p class="w-">Informatics Labs adalah sebuah platform website yang dirancang khusus untuk mahasiswa Program Studi Informatika Universitas Jenderal Soedirman dalam mengakses berbagai informasi dan kebutuhan terkait praktikum. Melalui platform ini, mahasiswa dapat dengan mudah melakukan pemilihan shift, mengakses materi yang telah dibagikan, mengunduh tugas, mengunggah laporan, mencatat presensi, serta memperoleh informasi lainnya yang mendukung kegiatan praktikum. Informatics Labs bertujuan untuk memberikan kemudahan dan efisiensi dalam pengelolaan praktikum, sehingga proses pembelajaran menjadi lebih terstruktur dan terintegrasi.</p>       
              <!-- <a href="course.php">
              <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg mt-4">Praktikum</button>
              </a> -->
          </div>      
      </section>


      <section class="mt-6 h-auto w-full flex gap-5">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-[400px] m-auto ">
          <h2 class="text-3xl font-bold mb-5 mt-10">Praktikum Mahasiswa<span class="text-blue-400"> Informatika</span></h2>   
          <!-- data dummy -->
          <p class="w-">Kegiatan praktikum mahasiswa Informatika Universitas Jenderal Soedirman dilaksanakan di Gedung D dan F, Fakultas Teknik, yang terletak di lantai 3. Praktikum ini merupakan bagian penting dari proses pembelajaran, di mana mahasiswa dapat mengaplikasikan teori yang telah dipelajari di kelas ke dalam bentuk praktik langsung. Didukung dengan fasilitas laboratorium yang memadai, kegiatan ini mencakup berbagai aktivitas seperti pemrograman, pengolahan data, simulasi sistem, dan eksperimen berbasis teknologi informatika. Dengan bimbingan asisten dan dosen, mahasiswa diharapkan dapat meningkatkan kompetensi teknis, pemahaman konsep, serta kemampuan problem-solving dalam bidang informatika.</p>       
          <!-- <a href="course.php">
            <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg mt-4">Praktikum</button>
          </a> -->
        </div>
        <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-[400px] " >
          <img src="../public/img/lab-1200x600.jpg" alt="" class="h-[350px] w-full">
          </div>
      </section>

      <h1 class="text-3xl font-bold mb-5 mt-10">Fitur Informatics Labs</h1>
      <section class="mt-6 h-auto w-full flex gap-5">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-[230px] m-auto ">
          <h2 class="text-3xl font-bold mb-5">Informasi<span class="text-blue-400"> Praktikum</span></h2>   
          <!-- data dummy -->
          <p class="w-">Mahasiswa dapat mengecek dan melihat berbagai informasi mengenai praktikum yang sedang dijalani dan sudah dijalani. Mahasiswa dapat menlihat detail praktikumnya mulai dari shift yang diikuti, jam pelaksaan praktikum, tugas yang tersedia, materi yang dapat diakses dan juga assisten praktikum yang mengajar.</p>       
          <!-- <a href="course.php">
            <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg mt-4">Praktikum</button>
          </a> -->
        </div>
        <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-[230px] " >
          <img src="../public/img/ff-lab-ft-2-800x725.jpg" alt="" class="h-full w-full bg-cover bg-center">
          </div>
      </section>

      <section class="mt-6 h-auto w-full flex gap-5">
        <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-[200px] " >
          <img src="../public/img/Computer Software Developers at Best Price in Secunderabad - ID_ 4798303.jpg" alt="" class="h-full w-full bg-cover">
          </div>
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-[200px] m-auto ">
          <h2 class="text-3xl font-bold mb-5">Informasi<span class="text-blue-400"> Tugas</span></h2>   
          <!-- data dummy -->
          <p class="w-">Mahasiswa dapat melihat tugas yang telah diberikan oleh asisten praktikum. Informasi yang dapat dilihat meliputi nama tugas, deskripsi tugas, tanggal deadline</p>       
          <!-- <a href="course.php">
            <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg mt-4">Praktikum</button>
          </a> -->
        </div>
      </section>

      <section class="mt-6 h-auto w-full flex gap-5">
        <!-- Project Card -->
        <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-[200px] m-auto ">
          <h2 class="text-3xl font-bold mb-5">Informasi<span class="text-blue-400"> Materi</span></h2>   
          <!-- data dummy -->
          <p class="w-">Mahasiswa dapat melihat materi yang telah diberikan oleh asisten praktikum. Informasi yang dapat dilihat meliputi nama materi, deskripsi materi, dan dapat mengunduhnya</p>       
          <!-- <a href="course.php">
            <button class="mt-2 px-4 py-2 bg-teal-500 text-white rounded-lg mt-4">Praktikum</button>
          </a> -->
        </div>
        <div class="bg-gray-800 rounded-lg p-4 w-2/4 h-[200px] " >
          <img src="../public/img/Программный код веб-разработки или разработка приложений и веб-дизайн на компьютере для seo 3d ba___.jpg" alt="" class="h-[150px] w-full">
          </div>
      </section>
    </main>
  </div>
</body>
</html>