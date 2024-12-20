<section class="mt-6 bg-gray-800 p-6 rounded-lg shadow">
    <?php foreach($data['presensi'] as $item) ?>
        <div class="flex justify-between">
          <div>
            <h3 class="text-xl font-bold">
              <?= $item['nama_praktikum'] . " " . $item['nama_shift']?>
            </h3>
            <p class="text-gray-500">Pertemuan 4</p>
          </div>
          <div class="text-right">
            <p class="text-gray-500">Waktu Pertemuan</p>
            <p>20 November 2024 | 08.00 - 10.00 WIB</p>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 mt-6">
          <!-- Form Kehadiran -->
          <div>
            <form action="#" method="POST" class="mt-4">
              <label for="status" class="block text-gray-500">Status Kehadiran:</label>
              <select id="status" name="status" class="w-1/2 p-2 mt-2 border rounded text-black">
                <option value="Hadir">Hadir</option>
                <option value="Izin">Izin</option>
                <option value="Sakit">Sakit</option>
              </select>
              <button type="submit" class="mt-4 px-4 py-2 bg-green-500 text-white rounded">Submit</button>
            </form>
          </div>
        </div>
</section>