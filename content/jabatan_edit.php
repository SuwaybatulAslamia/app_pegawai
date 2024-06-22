<?php
if(!defined('INDEX')) die("");

// Ambil id_jabatan dari URL
$id_jabatan = $_GET['id'];

// Ambil nama_jabatan dari URL
$nama_jabatan = $_GET['nama_jabatan'];
?>

<h2 class="judul">Edit Jabatan</h2>
<form action="?hal=jabatan_update" method="post">
    <input type="hidden" name="id" value="<?php echo $id_jabatan; ?>">
    <div class="form-group">
        <label for="nama">Nama Jabatan</label>
        <div class="input">
            <input type="text" id="nama" name="nama" value="<?php echo $nama_jabatan; ?>">
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Simpan" class="tombol simpan">
        <input type="reset" value="Batal" class="tombol reset">
    </div>
</form>
