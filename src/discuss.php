<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Discussion Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white font-sans">

  <!-- Main Container -->
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
    <!-- Main Discussion Area -->
    <main class="flex-1 bg-gray-900 p-6 ml-64">
      <header class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold">Sistem Operasi - Mengenai Tugas 1</h1>
      </header>

      <!-- Discussion Area -->
      <div id="discussion-area" class="bg-gray-800 rounded-lg p-4 mb-4">
        <div class="space-y-4">
          <!-- Existing Messages -->
          <div>
            <p class="font-semibold">Nadzare Kafah <span class="text-gray-400 text-sm">09:52 PM</span></p>
            <p class="text-gray-300">Halo, saya kurang mengerti mengenai tugas 1 ini? ada yang bisa jelasin lebih lanjut?</p>
          </div>
          <div>
            <p class="font-semibold">Sellyjuan Alya <span class="text-gray-400 text-sm">10:00 PM</span></p>
            <p class="text-gray-300">Halo, bagian mananya ya?</p>
          </div>
          <div>
            <p class="font-semibold">Dimas Kendika <span class="text-gray-400 text-sm">11:52 PM</span></p>
            <p class="text-gray-300">Di tugas 1 ini kita diminta untuk membuat folder dengan menggunakan cmd atau terminal.</p>
          </div>
        </div>
      </div>

      <!-- Message Input -->
      <div class="flex items-center bg-gray-800 rounded-lg p-4">
        <input
          id="message-input"
          type="text"
          placeholder="Write a new reply..."
          class="flex-1 bg-gray-700 text-gray-300 rounded-md p-2 focus:outline-none"
        />
        <button
          id="send-button"
          class="ml-4 px-4 py-2 bg-blue-500 text-white rounded-md"
        >
          Send
        </button>
      </div>

      <header class="flex items-center justify-between mb-6">
        <h1 class="text-2xl font-bold mt-2">Struktur Data - Mengenai Tugas 2</h1>
      </header>

      <!-- Discussion Area -->
      <div id="discussion-area" class="bg-gray-800 rounded-lg p-4 mb-4">
        <div class="space-y-4">
          <!-- Existing Messages -->
          <div>
            <p class="font-semibold">Dimas Kendika <span class="text-gray-400 text-sm">09:52 PM</span></p>
            <p class="text-gray-300">Halo, di tugas 2 ini kita disuruh untuk buat apa ya?</p>
          </div>
          <div>
            <p class="font-semibold">Sellyjuan Alya <span class="text-gray-400 text-sm">10:00 PM</span></p>
            <p class="text-gray-300">Halo, jadi kita disuruh untuk membuat struktur data queue</p>
          </div>
          <div>
            <p class="font-semibold">Nadzare Kafah <span class="text-gray-400 text-sm">11:52 PM</span></p>
            <p class="text-gray-300">Dan nanti akan dikumpulkan </p>
          </div>
        </div>
      </div>

      <!-- Message Input -->
      <div class="flex items-center bg-gray-800 rounded-lg p-4">
        <input
          id="message-input"
          type="text"
          placeholder="Write a new reply..."
          class="flex-1 bg-gray-700 text-gray-300 rounded-md p-2 focus:outline-none"
        />
        <button
          id="send-button"
          class="ml-4 px-4 py-2 bg-blue-500 text-white rounded-md"
        >
          Send
        </button>
      </div>
    </main>
  </div>

  <script>
    // Mendapatkan elemen DOM yang dibutuhkan
    const messageInput = document.getElementById('message-input');
    const sendButton = document.getElementById('send-button');
    const discussionArea = document.getElementById('discussion-area');

    // Fungsi untuk menambahkan pesan ke area diskusi
    sendButton.addEventListener('click', function() {
      const messageText = messageInput.value.trim(); // Ambil nilai input
      if (messageText !== '') {
        const currentTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }); // Waktu sekarang

        // Membuat elemen pesan baru
        const newMessage = document.createElement('div');
        newMessage.innerHTML = `
          <p class="font-semibold">You <span class="text-gray-400 text-sm">${currentTime}</span></p>
          <p class="text-gray-300">${messageText}</p>
        `;
        newMessage.classList.add('mt-4'); // Tambahkan margin atas pada pesan baru

        // Menambahkan pesan baru ke area diskusi
        discussionArea.appendChild(newMessage);

        // Bersihkan input setelah mengirim pesan
        messageInput.value = '';
      }
    });
  </script>
</body>
</html>
