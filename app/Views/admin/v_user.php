<div class="bg-teal-50 w-screen h-screen">
   <!-- start nav -->
   <div class="flex justify-between text-center py-3 px-10 bg-white border-b-2 shadow-md w-full h-20">
      <h1 class="text-2xl py-2"><?php echo $judul; ?></h1>
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
            <div class="bg-red-200 rounded-full text-red-600 min-w-[50px] h-[50px] flex items-center justify-center">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round"
                     d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
               </svg>
            </div>
            <div class="flex-grow">
               <h1 class="font-bold text-lg mb-2 text-gray-700">Logout</h1>
               <p class="text-gray-700">are you sure you want to logout ?</p>
            </div>
         </div>
         <div class="bg-gray-100 py-3 px-6 flex justify-end gap-4">
            <button onclick="hideDialog()"
               class="bg-white px-2 py-1 border rounded text-black cursor-pointer hover:bg-gray-100">
               Cancel
            </button>
            <a href="<?php echo base_url('Auth/logout'); ?>"
               class="bg-red-700 px-2 py-1 rounded text-white cursor-pointer hover:bg-red-600">
               Logout
            </a>
         </div>
      </div>
   </div>
   <!-- end modals logout -->
   <!-- end nav -->

   <!-- start main -->
   <div class="w-full mt-2">
      <div class="flex ml-20 mt-10">

      </div>

      <!-- datatables start -->
      <div class="px-20 mb-10 mt-2">
         <table id="example" class="display">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Role</th>
                  <th>Username</th>
                  <th>Password</th>
                  <!-- <th>Aksi</th> -->
               </tr>
            </thead>
            <tbody>
               <?php $no = 1;
      foreach ($user as $key => $value) { ?>
               <tr>
                  <td><?php echo $no++; ?></td>
                  <td>
                     <?php echo $value['role'] == 1 ? 'Admin' : (($value['role'] == 2) ? 'Dosen' : 'Mahasiswa'); ?>
                  </td>
                  <td>
                     <?php echo $value['username']; ?>
                  </td>
                  <td>
                     <?php echo $value['password']; ?>
                  </td>
               </tr>
               <?php } ?>
            </tbody>

         </table>
      </div>
      <!-- datatables end -->
   </div>
   <!-- end main -->
</div>