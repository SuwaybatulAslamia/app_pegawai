<?php
    if(!defined('INDEX')) die("");
?>

    <h2 class="judul">Tambah Jabatan</h2>
        <form action="?hal=jabatan_insert" method="post">
            <div class="form-group">
                <label for="nama">Nama Jabatan</label>
                <div class="input">
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama Jabatan" required>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="tombol simpan">
                <input type="reset" value="Batal" class="tombol reset">
            </div>
        </form>