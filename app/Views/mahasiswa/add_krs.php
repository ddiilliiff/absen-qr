<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo base_url(); ?>mhs/dist/output.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
      crossorigin="anonymous"></script>
   <title>Tambah Matakuliah</title>
</head>

<body>

   <!-- navbar -->
   <div class="flex justify-center items-center">
      <div class="flex h-20 w-screen  items-center bg-slate-200 shadow-xl">
         <a href="<?php echo base_url('Mahasiswa/krs'); ?>">
            <i class="fas fa-arrow-left ml-4"></i>
         </a>
         <h1 class="ml-10 text-xl font-light">Form Tambah MK ke KRS</h1>
      </div>
   </div>

   <!-- form -->
   <div class="flex justify-center items-center mt-20">
      <div class="w-[350px] h-80 bg-yellow-100 rounded-lg shadow-lg">
         <form action="<?php base_url(); ?>insert_krs" class="mt-9" method="POST">

            <div class="ml-7 mb-4">
               <input type="hidden" name="npm" value="<?php echo session()->get('username'); ?>">
               <label for="takad">Tahun Ajaran <span class="pl-7">:</span> </label>
               <select name="takad" id="takad" class="border border-green-300 rounded-lg px-4 py-2">
                  <?php foreach ($takad as $ta) {?>
                  <option value="<?php echo $ta['id_takad']; ?>"><?php echo $ta['tahun_ajaran']; ?> -
                     <?php echo $ta['smt'] == 2 ? 'Genap' : 'Ganjil'; ?></option>
                  <?php }?>
               </select>
            </div>

            <div class="ml-7 mb-4">
               <label for="smt">Semester <span class="pl-7">:</span> </label>
               <select name="smt" id="smt" class="border border-green-300 rounded-lg px-4 py-2">
                  <option value="1">Semester 1</option>
                  <option value="2">Semester 2</option>
                  <option value="3">Semester 3</option>
                  <option value="4">Semester 4</option>
                  <option value="5">Semester 5</option>
                  <option value="6">Semester 6</option>
                  <option value="7">Semester 7</option>
                  <option value="8">Semester 8</option>
               </select>
            </div>

            <div class="ml-7 mb-4">
               <label for="kode_mk">Mata Kuliah :</label>
               <select name="kode_mk" id="kode_mk" class="border border-green-300 rounded-lg px-2 py-2">
                  <!-- <option value="4">Semester 4</option> -->
               </select>
            </div>

            <div class="ml-7 mb-4">
               <label for="status">Status :</label>
               <select name="status" id="status" class="border border-green-300 rounded-lg px-2 py-2">
                  <option value="1">Baru</option>
                  <option value="2">Up</option>
               </select>
            </div>

            <div class="flex justify-center items-center">
               <button type="submit" class="w-40 p-2 bg-green-300 rounded-lg">Tambah</button>
            </div>
         </form>
      </div>
   </div>

   <script>
   // Tambahkan event listener untuk perubahan pada opsi semester
   document.getElementById('smt').addEventListener('change' && 'click', function() {
      // Dapatkan nilai semester yang dipilih
      var selectedSemester = this.value;

      // Kirim permintaan Ajax ke server (ganti URL sesuai kebutuhan)
      $.ajax({
         url: '<?php echo base_url(); ?>Mahasiswa/getMataKuliahBySemester/' + selectedSemester,
         method: 'GET',
         success: function(response) {
            // Perbarui elemen <select> mata kuliah dengan opsi yang diterima dari server
            var matakuliahSelect = document.getElementById('kode_mk');
            matakuliahSelect.innerHTML = ''; // Bersihkan opsi sebelum menambahkan yang baru

            // Tambahkan opsi mata kuliah
            for (var i = 0; i < response.length; i++) {
               var option = document.createElement('option');
               option.value = response[i].kode_mk;
               option.text = '(' + response[i].kode_mk +
                  ') ' + response[i].mata_kuliah;
               matakuliahSelect.appendChild(option);
            }
         },
         error: function(xhr, status, error) {
            console.log('AJAX Error: ' + status + ' - ' + error);
         }
      });
   });
   </script>
</body>

</html>