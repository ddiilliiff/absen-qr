<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo base_url(); ?>mhs/dist/output.css">
   <script src="https://kit.fontawesome.com/227a57dfb0.js" crossorigin="anonymous"></script>

   <title>Document</title>
</head>

<body>

   <form action="<?php echo base_url(); ?>Mahasiswa/absen" method="post">
      <div class="flex justify-center items-center">
         <input type="hidden" name="id_jadwal" value="1" id="jadwal">
         <input type="hidden" name="npm" value="1">
         <div class="flex-row justify-center items-center">
            <div id="my-qr-reader" class="mt-5"></div>
            <button type="submit">Absen</button>
         </div>
      </div>
   </form>

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
      var jadwal = document.getElementById('jadwal');
      var myqr = document.getElementById('your-qr-result');
      var lastResult, countResults = 0;

      // if found u qr code
      function onScanSuccess(decodeText, decodeResult) {
         if (decodeText !== lastResult) {
            ++countResults;
            lastResult = decodeText;

            jadwal.setAttribute('value', decodeText);

            myqr.innerHTML = `hasil scan : ${countResults} : ${decodeText}`

         }
      }

      var htmlscanner = new Html5QrcodeScanner(
         "my-qr-reader", {
            fps: 10,
            qrbox: 250
         })

      htmlscanner.render(onScanSuccess)
   })
   </script>
</body>

</html>