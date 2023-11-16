<script>
new DataTable('#example', {
   paging: false,
   scrollCollapse: true,
   scrollY: '400px'
});
</script>

<script>
const modal = document.querySelector('.modal');
const showModal = document.querySelector('.show-modal');
const closeModal = document.querySelector('.close-modal');
showModal.addEventListener('click', function() {
   modal.classList.toggle('hidden');
   modal.classList.toggle('flex');
});
closeModal.addEventListener('click', function() {
   modal.classList.toggle('hidden');
   modal.classList.toggle('flex');
});

function bindModalEvents(id) {
   const modalEdit = document.querySelector(`.modal-edit-${id}`);
   const showModalEdit = document.querySelector(`.show-modal-edit-${id}`);
   const closeModalEdit = document.querySelector(`.close-modal-edit-${id}`);

   showModalEdit.addEventListener('click', function() {
      modalEdit.classList.toggle('hidden');
      modalEdit.classList.toggle('flex');
   });

   closeModalEdit.addEventListener('click', function() {
      modalEdit.classList.toggle('hidden');
      modalEdit.classList.toggle('flex');
   });
}

<?php if (!empty($dosen)) { ?>
<?php foreach ($dosen as $value) { ?>
bindModalEvents('<?php echo $value['nidn']; ?>');
<?php } ?>
<?php } ?>

<?php if (!empty($mhs)) { ?>
<?php foreach ($mhs as $value) { ?>
bindModalEvents('<?php echo $value['npm']; ?>');
<?php } ?>
<?php } ?>

<?php if (!empty($matkul)) { ?>
<?php foreach ($matkul as $value) { ?>
bindModalEvents('<?php echo $value['kode_mk']; ?>');
<?php } ?>
<?php } ?>

<?php if (!empty($jadwal)) { ?>
<?php foreach ($jadwal as $value) { ?>
bindModalEvents('<?php echo $value['id_jadwal']; ?>');
<?php } ?>
<?php } ?>
</script>


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