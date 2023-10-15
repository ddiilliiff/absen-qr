<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="dist/output.css">
   <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
   <title>Absensi</title>
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
                  <a href="index.html"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full  bg-white text-black  transition duration-500 ease-in-out ">
                     <span>Dashboard</span>
                     <i class="ri-dashboard-fill"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="d_dosen.html"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Dosen</span>
                     <i class="ri-user-2-fill"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="d_mhs.html"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Mahasiswa</span>
                     <i class="ri-user-fill"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="d_matkul.html"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Matakuliah</span>
                     <i class="fa-solid fa-book"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="d_qr.html"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>QR Code</span>
                     <i class="fa-solid fa-qrcode"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="d_jadwal.html"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Jadwal</span>
                     <i class="fa-solid fa-calendar-days"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="d_absen.html"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data Absen</span>
                     <i class="fa-solid fa-clipboard-list"></i>
                  </a>
               </li>
            </ul>
            <ul>
               <li>
                  <a href="d_user.html"
                     class="flex justify-between items-center py-3 px-5 text-base rounded-full text-white  hover:bg-white hover:text-black hover:px-7 transition duration-500 ease-in-out ">
                     <span>Data User</span>
                     <i class="fa-solid fa-users"></i>
                  </a>
               </li>
            </ul>

         </div>
         <!-- end sidebar -->

         <div class="bg-teal-50 w-screen h-screen ">
            <!-- start nav -->
            <div class="flex justify-between text-center py-3 px-10 bg-white border-b-2 shadow-md w-full h-20">
               <h1 class="text-2xl py-2">Dashboard</h1>
               <a href="#" class="py-3" onclick="showDialog()">
                  <i class="ri-logout-box-line text-2xl"></i>
               </a>
            </div>
            <!-- start modals logout -->
            <div id="dialog" onclick="hideDialog()"
               class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen justify-center items-center z-50 opacity-0 hidden transition-opacity duration-500">
               <div onclick="event.stopImmediatePropagation()"
                  class="bg-white rounded shadow-md w-[25%] flex gap-5 flex-col overflow-hidden">
                  <div class="flex p-8 gap-6 pb-0">
                     <div
                        class="bg-red-200 rounded-full text-red-600 min-w-[50px] h-[50px] flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                           stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round"
                              d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                        </svg>
                     </div>
                     <div class="flex-grow">
                        <h1 class="font-bold text-lg mb-2 text-gray-700 ">Logout</h1>
                        <p class="text-gray-700">are you sure you want to logout ?</p>
                     </div>
                  </div>
                  <div class="bg-gray-100 py-3 px-6 flex justify-end gap-4">
                     <button onclick="hideDialog()"
                        class="bg-white px-2 py-1 border rounded text-black cursor-pointer hover:bg-gray-100">Cancel</button>
                     <button
                        class="bg-red-700 px-2 py-1 rounded text-white cursor-pointer hover:bg-red-600">Logout</button>
                  </div>
               </div>
            </div>
            <!-- end modals logout -->
            <!-- end nav -->

            <!-- start main -->
            <div class="w-full mt-6">
               <div class="flex px-36 mt-5 gap-16">
                  <div class="card"> </div>
                  <div class="card"></div>
                  <div class="card"></div>
               </div>
            </div>
            <!-- end main -->
         </div>

      </div>
   </div>
</body>
<!-- start js modals logout -->
<script>
function showDialog() {
   const dialog = document.getElementById('dialog');
   dialog.classList.remove('hidden');
   dialog.classList.add('flex');
   setTimeout(() => {
      dialog.classList.add('opacity-100');
   }, 20);
}

function hideDialog() {
   const dialog = document.getElementById('dialog');
   dialog.classList.add('opacity-0');
   dialog.classList.remove('opacity-100');
   setTimeout(() => {
      dialog.classList.add('hidden');
      dialog.classList.remove('flex');
   }, 500);
}
</script>
<!-- end js modals logout -->

</html>