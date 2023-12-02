<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo base_url(); ?>mhs/dist/output.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
   <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
   <title>Halaman KRS</title>
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

   <!-- navbar -->
   <div class="flex justify-center items-center">
      <div class="flex h-20 w-screen  items-center border-b-2 bg-slate-200 shadow-lg rounded-b-2xl">
         <h1 class="ml-10 text-xl font-bold">HALAMAN KRS</h1>
      </div>
   </div>

   <!-- data KRS -->
   <div class="mt-10 p-10">
      <table id="example" class="display ">
         <thead>
            <tr>
               <th style="text-align: center;">Hari</th>
               <th style="text-align: center;">Tanggal</th>
               <th style="text-align: center;">Hadir</th>
            </tr>
         </thead>
         <tbody>
            <?php foreach ($absen as $a) { ?>
            <tr>
               <td><?php echo $a['hari']; ?></td>
               <td><?php echo $a['tanggal']; ?></td>
               <td><?php echo $a['status'] == 1 ? 'Hadir' : 'Tidak Hadir'; ?></td>
            </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>

   <!-- <div class="fixed min-w-full bottom-0 mb-0 p-5">
      <a href="<?php echo base_url('Mahasiswa/add_krs'); ?>"
         class="w-12 h-12 flex justify-center items-center text-lg rounded-full float-right bg-blue-400">
         <i class="fa-solid fa-plus"></i>
      </a>
   </div> -->


   <script>
   var menu = document.getElementById('menu');
   var burger = document.getElementById('burger');

   burger.addEventListener('click', function() {
      menu.classList.toggle('-translate-x-full');
      burger.classList.toggle('translate-x-32');
      // menu.classList.toggle('fixed');
      // menu.classList.toggle('float-left');

   });

   new DataTable('#example', {
      paging: false,
      scrollCollapse: true,
      scrollY: '500px'
   });
   </script>

</body>

</html>