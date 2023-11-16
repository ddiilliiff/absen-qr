<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="<?php echo base_url(); ?>template/dist/output.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
   <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
   <title><?php echo $judul; ?></title>
</head>

<body>
   <div class="flex flex-col">
      <div class="flex flex-1">
         <!-- start sidebar -->
         <div class="flex flex-col bg-teal-500 w-64 h-screen p-4 gap-4">
            <div class="flex w-full h-16 border-b-2 px-14 py-4 justify-between">
               <h1 class="text-xl text-white">ABSEN</h1>
            </div>

            <ul>
               <li>
                  <a href="<?php echo base_url('Admin/index'); ?>"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Dashboard</span>
                     <i class="ri-dashboard-fill"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="<?php echo base_url('Admin/dataDosen'); ?>"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Dosen</span>
                     <i class="ri-user-2-fill"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="<?php echo base_url('Admin/dataMahasiswa'); ?>"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Mahasiswa</span>
                     <i class="ri-user-fill"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="<?php echo base_url('Admin/dataMatkul'); ?>"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Matakuliah</span>
                     <i class="fa-solid fa-book"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="<?php echo base_url('Admin/dataJadwal'); ?>"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Jadwal</span>
                     <i class="fa-solid fa-calendar-days"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="<?php echo base_url('Admin/dataQRC'); ?>"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>QR Code</span>
                     <i class="fa-solid fa-qrcode"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="<?php echo base_url('Admin/dataAbsensi'); ?>"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Absen</span>
                     <i class="fa-solid fa-clipboard-list"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="<?php echo base_url('Admin/dataUser'); ?>"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data User</span>
                     <i class="fa-solid fa-users"></i>
                  </a>
               </li>
            </ul>

         </div>
         <!-- end sidebar -->
         <?php
            if ($page) {
                echo view($page);
            } ?>
      </div>
   </div>
</body>

<?php echo $this->include('script'); ?>

<!-- end js modals logout -->

<!-- <script>
    $(document).ready(function() {
        // Mengaktifkan modals
        $('.show-modal-edit').click(function() {
            var nidn = $(this).data('nidn');

            // Memasukkan data ke dalam modal
            $('#nidn').val(nidn);

            // Tampilkan modal
            $('.modal-edit').modal('show');
        });
    });
</script> -->

</html>