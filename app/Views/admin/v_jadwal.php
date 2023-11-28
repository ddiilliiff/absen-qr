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
         <button
            class="inline-block rounded-full bg-green-300 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-black shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-green-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-green-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] show-modal">
            Tambah
            <i class="ri-add-line"></i>
         </button>
         <div
            class="modal h-screen w-full fixed left-0 top-0 justify-center items-center bg-black bg-opacity-50 z-40 hidden">
            <!-- modal -->
            <div class="bg-white rounded shadow-lg w-1/3">
               <!-- modal header -->
               <div class="border-b px-4 py-2">
                  <h3 class="text-4xl">Data Jadwal</h3>
               </div>
               <!-- modal body -->
               <div class="p-3">
                  <?php echo form_open('Jadwal/InsertData'); ?>
                  <div class="flex gap-2">
                     <div class="grid grid-rows-2 items-center pb-2 w-full">
                        <label for="kode_mk">Mata Kuliah</label>
                        <select name="kode_mk" id="kode_mk" class="border rounded-lg px-2 py-1">
                           <option value="0">---PILIH MK---</option>
                           <?php foreach ($mk as $key => $val) { ?>
                           <option value="<?php echo $val['kode_mk']; ?>"><?php echo $val['mata_kuliah']; ?></option>
                           <?php }?>
                        </select>
                     </div>
                  </div>
                  <div class="flex gap-2">
                     <div class="grid grid-rows-2 items-center pb-2">
                        <label for="jam">Jam Mulai</label>
                        <input type="time" name="jam_mulai" id="jam_mulai" class="border rounded-lg px-2 py-1"
                           required />
                     </div>
                     <div class="grid grid-rows-2 items-center pb-2">
                        <label for="jam">Jam Selesai</label>
                        <input type="time" name="jam_selesai" id="jam_selesai" class="border rounded-lg px-2 py-1"
                           required />
                     </div>
                  </div>
                  <div class="flex gap-2">
                     <div class="grid grid-rows-2 items-center pb-2  w-full ">
                        <label for="ruangan">Ruangan</label>
                        <input type="text" name="ruangan" id="ruangan" class="border rounded-lg px-2 py-1" required />
                     </div>
                     <div class="grid grid-rows-2 items-center pb-2  w-full ">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" id="kelas" class="border rounded-lg px-2 py-1" required />
                     </div>
                  </div>

                  <div class="flex justify-end items-center w-100 p-3">
                     <button class="bg-red-600 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-modal">
                        Cancel
                     </button>
                     <button type="submit" class="bg-sky-500 hover:bg-sky-700 px-3 py-1 rounded text-white">
                        Simpan
                     </button>
                  </div>
                  <?php echo form_close(); ?>
               </div>
            </div>
         </div>
      </div>

      <!-- datatables start -->
      <div class="px-20 mb-10 mt-2">
         <table id="example" class="display">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Mata Kuliah</th>
                  <th>Dosen</th>
                  <th>Jam</th>
                  <th>Ruangan</th>
                  <th>Kelas</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
               <?php $no = 1;
      foreach ($jadwal as $key => $value) { ?>
               <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $value['mata_kuliah']; ?></td>
                  <td><?php echo $value['nama_dosen']; ?></td>
                  <td><?php echo $value['jam_mulai']; ?> - <?php echo $value['jam_selesai']; ?> WIT</td>
                  <td><?php echo $value['ruangan']; ?></td>
                  <td><?php echo $value['kelas']; ?></td>
                  <td>
                     <div class="flex justify-center gap-4 px-4">
                        <button
                           class="show-modal-edit-<?php echo $value['id_jadwal']; ?> border border-sky-400 rounded-lg px-2 py-1 hover:bg-sky-400 hover:text-white"
                           data-id-jadwal="<?php echo $value['id_jadwal']; ?>">
                           edit
                        </button>
                        <a href="<?php echo base_url('Mahasiswa/DeleteData/'.$value['id_jadwal']); ?>"
                           onclick="return confirm('Apakah Data Ini Akan Dihapus ?')"
                           class="border border-red-500 rounded-lg px-2 py-1 hover:bg-red-500 hover:text-white">hapus</a>
                     </div>
                  </td>
               </tr>
               <?php } ?>
            </tbody>
            </tfoot>
         </table>
      </div>
      <!-- datatables end -->
   </div>

   <?php foreach ($jadwal as $key => $value) { ?>
   <div
      class="modal-edit-<?php echo $value['id_jadwal']; ?> h-screen w-full fixed left-0 top-0 justify-center items-center bg-black bg-opacity-50 z-40 hidden">
      <!-- modal edit-->
      <div class="bg-white rounded shadow-lg w-1/3">
         <!-- modal header -->
         <div class="border-b px-4 py-2">
            <h3 class="text-4xl">Data Jadwal</h3>
         </div>
         <!-- modal body -->
         <div class="p-3">
            <?php echo form_open('Admin/updateJadwal'); ?>
            <div class="flex gap-2">
               <input type="hidden" value="<?php echo $value['id_jadwal']; ?>">
               <div class="grid grid-rows-2 items-center pb-2 w-full">
                  <label for="kode_mk">Kode Mata Kuliah</label>
                  <input type="text" name="kode_mk" id="kode_mk" class="border rounded-lg px-2 py-1" required
                     value="<?php echo $value['kode_mk']; ?>" />
               </div>
               <div class="grid grid-rows-2 items-center pb-2 w-full">
                  <label for="nidn">NIDN</label>
                  <input type="text" name="nidn" id="nidn" class="border rounded-lg px-2 py-1" required
                     value="<?php echo $value['nidn']; ?>" />
               </div>
            </div>
            <div class="flex gap-2">
               <div class="grid grid-rows-2 items-center pb-2">
                  <label for="jam">Jam</label>
                  <input type="text" name="jam_mulai" id="jam_mulai" class="border rounded-lg px-2 py-1" required
                     value="<?php echo $value['jam_mulai']; ?>" />
               </div>
               <div class="grid grid-rows-2 items-center pb-2">
                  <label for="jam">Jam</label>
                  <input type="text" name="jam_selesai" id="jam_selesai" class="border rounded-lg px-2 py-1" required
                     value="<?php echo $value['jam_selesai']; ?>" />
               </div>
               <div class="grid grid-rows-2 items-center pb-2">
                  <label for="ruangan">Ruangan</label>
                  <input type="text" name="ruangan" id="ruangan" class="border rounded-lg px-2 py-1" required
                     value="<?php echo $value['ruangan']; ?>" />
               </div>
            </div>
            <div class="flex gap-2">
               <div class="grid grid-rows-2 items-center pb-2">
                  <label for="kelas">Kelas</label>
                  <input type="text" name="kelas" id="kelas" class="border rounded-lg px-2 py-1" required
                     value="<?php echo $value['kelas']; ?>" />
               </div>
            </div>
            <div class="flex justify-end items-center w-100 p-3">
               <button type="button"
                  class="bg-red-500 hover:bg-red-700 px-3 py-1 rounded text-white mr-1 close-modal-edit-<?php echo $value['id_jadwal']; ?>">
                  Cancel
               </button>
               <button type="submit" class="bg-sky-500 hover:bg-sky-700 px-3 py-1 rounded text-white">
                  Ubah
               </button>
            </div>
            <?php echo form_close(); ?>
         </div>
      </div>
   </div>
   <?php } ?>
   <!-- end main -->
</div>