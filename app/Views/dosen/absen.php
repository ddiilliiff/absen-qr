<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="<?php echo base_url(); ?>dosen/dist/output.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.tailwindcss.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
   <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
   <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
   <script src="https://cdn.datatables.net/1.13.6/js/dataTables.tailwindcss.min.js"></script>
   <script src="https://cdn.tailwindcss.com"></script>
   <title>Document</title>
</head>

<body class="font-body">
   <div class="bg-slate-100 w-screen min-h-screen ">
      <!-- start nav -->
      <div class="w-full h-20 bg-slate-300 flex justify-between gap-6 items-center px-14 fixed scr">
         <div>
            <h1 class="text-2xl">Absensi</h1>
         </div>
         <div class="flex gap-4">
            <div class="text-slate-700 flex-col">
               <h1 class="font-bold text-2xl underline">Mursid, MT</h1>
               <h1 class="text-sm">17-411-091</h1>
            </div>
            <div
               class="border-1 rounded-full bg-white w-14 h-14 overflow-hidden shadow-lg hover:mb-2 hover:h-16 hover:w-16 transition-all duration-200 ease-in-out">
               <button class="cursor-pointer" id="toggle">
                  <img src="https://source.unsplash.com/100x100?profile" alt="" class="bg-auto h-full w-full">
                  <!-- start modal -->
                  <nav id="nav-menu"
                     class="absolute hidden bg-white shadow-lg rounded-lg max-w-[250px] right-8 top-full py-4 text-center">
                     <ul>
                        <a href="dashboard.html">
                           <li class="py-2 px-6 hover:bg-slate-400">
                              <i class="fa-solid fa-house px-1"></i>Beranda
                           </li>
                        </a>
                        <a href="profile.html">
                           <li class="py-2 px-6 hover:bg-slate-400">
                              <i class="fa-solid fa-user px-1"></i>Profil
                           </li>
                        </a>
                        <a href="#" onclick="showDialog()">
                           <li class="py-2 px-6 hover:bg-slate-400">
                              <i class="fa-solid fa-right-from-bracket px-1"></i>Keluar
                           </li>
                        </a>
                     </ul>
                  </nav>
                  <!-- end modal -->
               </button>
            </div>
         </div>
      </div>
      <!-- end nav -->

      <!-- start main -->
      <div class="px-20 pt-36 mb-10 ">
         <div class="flex justify-between mb-5">
            <h1 class="text-4xl font-bold underline">Daftar Absensi</h1>
            <a href="#"
               class="flex bg-sky-300 items-center justify-center px-4 py-2 rounded-lg hover:bg-sky-500 transition-all duration-100">
               <i class="fa-solid fa-download mr-2"></i> Cetak Laporan</a>
         </div>
         <table id="example" class="display ">
            <thead>
               <tr>
                  <th rowspan="2" style="text-align: center;">NPM</th>
                  <th rowspan="2" style="text-align: center;">Nama</th>
                  <th colspan="16" style="text-align: center;">Pertemuan</th>
               </tr>
               <tr>
                  <th>1</th>
                  <th>2</th>
                  <th>3</th>
                  <th>4</th>
                  <th>5</th>
                  <th>6</th>
                  <th>7</th>
                  <th>8</th>
                  <th>9</th>
                  <th>10</th>
                  <th>11</th>
                  <th>12</th>
                  <th>13</th>
                  <th>14</th>
                  <th>15</th>
                  <th>16</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>17411091</td>
                  <td>ziko tri atmadja salasa</td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
               </tr>
               <tr>
                  <td>17411091</td>
                  <td>ziko tri atmadja salasa</td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
               </tr>
               <tr>
                  <td>17411091</td>
                  <td>ziko tri atmadja salasa</td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
               </tr>
               <tr>
                  <td>17411091</td>
                  <td>ziko tri atmadja salasa</td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
               </tr>
               <tr>
                  <td>17411091</td>
                  <td>ziko tri atmadja salasa</td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
               </tr>
               <tr>
                  <td>17411091</td>
                  <td>ziko tri atmadja salasa</td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
               </tr>
               <tr>
                  <td>17411091</td>
                  <td>ziko tri atmadja salasa</td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
                  <td>
                     <input type="checkbox">
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
      <!-- end main -->

      <!-- start modals logout -->
      <div id="dialog" onclick="hideDialog()"
         class="fixed left-0 top-0 bg-black bg-opacity-50 w-screen h-screen justify-center items-center z-50 opacity-0 hidden transition-opacity duration-500">
         <div onclick="event.stopImmediatePropagation()"
            class="bg-white rounded shadow-md w-[25%] flex gap-5 flex-col overflow-hidden">
            <div class="flex p-8 gap-6 pb-0">
               <div class="bg-red-200 rounded-full text-red-600 min-w-[50px] h-[50px] flex items-center justify-center">
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
               <a href="" class="bg-red-700 px-2 py-1 rounded text-white cursor-pointer hover:bg-red-600">Logout</a>
            </div>
         </div>
      </div>
      <!-- end modals logout -->
   </div>
</body>
<script>
new DataTable('#example', {
   paging: false,
   scrollCollapse: true,
   scrollY: '500px'
});

const toggle = document.querySelector('#toggle');
const navMenu = document.querySelector('#nav-menu');

toggle.addEventListener('click', function() {
   navMenu.classList.toggle("hidden");
   navMenu.classList.toggle("flex");
});

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

</html>