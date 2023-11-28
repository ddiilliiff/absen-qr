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

   <div class="flex justify-center items-center mt-10">
      <h1 class="font-semibold">SILAHKAN SCAN UNTUK ABSEN</h1>
   </div>

   <div class="flex justify-center items-center">
      <div id="my-qr-reader" class="mt-5 w-1/2"></div>
   </div>

   <div id="detail"
      class="fixed bottom-0 left-0 right-0 h-96 rounded-t-2xl text-xl border border-t-2 transform ease-in-out duration-1000 transition-transform translate-y-full">
      <div class="flex justify-center items-center w-full">
         <form action="<?php echo base_url(); ?>Mahasiswa/absen" method="post" class="mt-10">
            <div class="flex mb-2">
               <label>ID Jadwal <span class="mr-2">:</span> </label>
               <input type="text" name="id_jadwal" value="" id="jadwal" disabled>
            </div>

            <div class="flex mb-8">
               <label>NPM <span class="ml-12 mr-2">:</span> </label>
               <input type="text" name="npm" value="<?php echo session('username'); ?>" disabled>
            </div>

            <div class="flex justify-center items-center">
               <button type="submit" class="bg-blue-500 px-5 py-1 rounded-xl">Absen</button>
            </div>
         </form>
      </div>
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
      var myqr = document.getElementById('your-qr-result');
      var lastResult, countResults = 0;

      // if found u qr code
      function onScanSuccess(decodeText, decodeResult) {
         if (decodeText !== lastResult) {
            ++countResults;
            lastResult = decodeText;

            jadwal.setAttribute('value', decodeText);

            detail.classList.remove('translate-y-full');
            detail.classList.add('translate-y-0');

            // myqr.innerHTML = `hasil scan : ${countResults} : ${decodeText}`

         }
      }

      var htmlscanner = new Html5QrcodeScanner(
         "my-qr-reader", {
            fps: 10,
            qrbox: 100
         })

      htmlscanner.render(onScanSuccess);
   })
   </script>
</body>

</html>