<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo base_url(); ?>mhs/dist/output.css">
   <script src="https://kit.fontawesome.com/227a57dfb0.js" crossorigin="anonymous"></script>

   <title>Absen</title>



</head>

<body>

   <div id="menu"
      class="bg-slate-200 w-32 h-screen rounded-r-xl fixed top-0 bottom-0 left-0 z-50 transform ease-in-out duration-1000 transition-transform -translate-x-full">
      <div class="mt-10 p-3">
         <div class="flex justify-center items-center p-2 rounded-2xl shadow-lg bg-white mb-3">
            <a href="<?php echo base_url('Mahasiswa/krs'); ?>">KRS</a>
         </div>
         <div class="flex justify-center items-center p-2 rounded-2xl shadow-lg bg-white mb-3">
            <a href="<?php echo base_url('Mahasiswa/index'); ?>">Absen</a>
         </div>
         <div class="flex justify-center items-center p-2 rounded-2xl shadow-lg bg-white mb-3">
            <a href="<?php echo base_url('Auth/logout'); ?>">Keluar</a>
         </div>
      </div>
   </div>
   <button id="burger" class="bg-white p-4 transform ease-in-out duration-1000 transition-transform"><i
         class="fa-solid fa-bars text-2xl self-end"></i></button>


   <div class="flex justify-center items-center pt-3">
      <h1 class="font-semibold">SILAHKAN SCAN UNTUK ABSEN</h1>
   </div>

   <div class="flex justify-center items-center">
      <div id="my-qr-reader" class="mt-5 w-1/2"></div>
   </div>

   <!-- app/Views/scan_result.php -->

   <!-- app/Views/scan_result.php -->

   <div id="detail"
      class="fixed bottom-0 left-0 right-0 h-96 bg-white rounded-t-2xl text-xl border border-t-2 transform ease-in-out duration-1000 transition-transform translate-y-full">
      <form action="" method="post" class="mt-8">
         <?php if (isset($hasil_query)) { ?>
         <input type="hidden" name="id_jadwal" value="<?php echo $hasil_query['kode_mk'] ?? ''; ?>" id="jadwal"
            class="w-1/2 border rounded-full px-2" disabled>
         <input type="text" name="npm" value="<?php echo $hasil_query['nama_mk'] ?? ''; ?>"
            class="w-1/2 border rounded-full px-2" disabled>
         <input type="text" name="mk" value="<?php echo $hasil_query['nama_mk'] ?? ''; ?>"
            class="w-1/2 border rounded-full px-2" disabled>
         <input type="text" name="dosen" value="<?php echo $hasil_query['nama_dosen'] ?? ''; ?>"
            class="w-1/2 border rounded-full px-2" disabled>
         <input type="text" name="hari_jam" value="<?php echo $hasil_query['hari'].', '.$hasil_query['jam'] ?? ''; ?>"
            class="w-1/2 border rounded-full px-2" disabled>
         <input type="text" name="kelas" value="<?php echo $hasil_query['nama_kelas'] ?? ''; ?>"
            class="w-1/2 border rounded-full px-2" disabled>
         <input type="text" name="ruangan" value="<?php echo $hasil_query['nama_ruangan'] ?? ''; ?>"
            class="w-1/2 border rounded-full px-2" disabled>

         <div class="flex justify-center mb-2">
            <button type="submit" class="bg-blue-500 text-white px-5 py-1 rounded-xl">Absen</button>
         </div>
         <?php } else { ?>
         <p>Data not found</p>
         <?php } ?>
      </form>
   </div>



   <script src="https://unpkg.com/html5-qrcode"></script>


   <script>
   function domReady(fn) {
      if (document.readyState === "complete" || document.readyState === "interactive") {
         setTimeout(fn, 1);
      } else {
         document.addEventListener("DOMContentLoaded", fn);
      }
   }

   domReady(function() {
      var detail = document.getElementById('detail');
      var jadwalInput = document.getElementById('jadwal');
      var npmInput = document.getElementsByName('npm')[0];
      var mkInput = document.getElementsByName('mk')[0];
      var dosenInput = document.getElementsByName('dosen')[0];
      var hariJamInput = document.getElementsByName('hari_jam')[0];
      var kelasInput = document.getElementsByName('kelas')[0];
      var ruanganInput = document.getElementsByName('ruangan')[0];

      function onScanSuccess(decodeText, decodeResult) {
         if (decodeText !== lastResult) {
            lastResult = decodeText;

            fetch(`/api/get-mata-kuliah-info/${decodeText}`)
               .then(response => response.json())
               .then(data => {
                  jadwalInput.value = decodeText;
                  npmInput.value = data.npm;
                  mkInput.value = data.mk;
                  dosenInput.value = data.dosen;
                  hariJamInput.value = data.hari + ', ' + data.jam;
                  kelasInput.value = data.kelas;
                  ruanganInput.value = data.ruangan;

                  detail.classList.toggle('translate-y-full');
               })
               .catch(error => console.error('Error fetching data:', error));
         }
      }

      var htmlscanner = new Html5QrcodeScanner(
         "my-qr-reader", {
            fps: 10,
            qrbox: 100
         });

      htmlscanner.render(onScanSuccess);
   });
   </script>

   </script>

   <!-- <script>
   var menu = document.getElementById('menu');
   var burger = document.getElementById('burger');

   burger.addEventListener('click', function() {
      menu.classList.toggle('-translate-x-full');
      burger.classList.toggle('translate-x-32');
      // menu.classList.toggle('fixed');
      // menu.classList.toggle('float-left');

   });
   </script>

   <script>
   function domReady(fn) {
      if (document.readyState === "complete" || document.readyState === "interactive") {
         setTimeout(fn, 1);
      } else {
         document.addEventListener("DOMContentLoaded", fn);
      }
   }

   domReady(function() {
      var detail = document.getElementById('detail');
      var myqr = document.getElementById('your-qr-result');
      var lastResult, countResults = 0;

      // if found u qr code
      function onScanSuccess(decodeText, decodeResult) {
         if (decodeText !== lastResult) {
            ++countResults;
            lastResult = decodeText;

            jadwal.setAttribute('value', decodeText);

            detail.classList.toggle('translate-y-full');

            // myqr.innerHTML = `hasil scan : ${countResults} : ${decodeText}`

         }
      }

      var htmlscanner = new Html5QrcodeScanner(
         "my-qr-reader", {
            fps: 10,
            qrbox: 100
         })

      htmlscanner.render(onScanSuccess)
   })
   </script> -->
</body>

</html>