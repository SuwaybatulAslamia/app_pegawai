<?php
    if(!defined('INDEX')) die("");
?>

    <h2 class="judul">Tambah Pegawai</h2>
        <form action="?hal=pegawai_insert" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="foto">Foto</label>
                <div class="input">
                    <input type="file" id="foto" name="foto">
                </div>
            </div>
            <div class="form-group">
                <label for="nama">Nama Pegawai</label>
                <div class="input">
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama pegawai" required>
                </div>
            </div>
            <div class="form-group">
                <label for="jk">Jenis Kelamin</label>
                    <input type="radio" id="jk" name="jk" value="L">Laki-laki
                    <input type="radio" id="jk" name="jk" value="P">Perempuan
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <div class="input">
                    <input type="date" id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" required>
                </div>
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <div class="input">
                    <select name="jabatan" id="jabatan">
                        <option value="">Pilih Jabatan ---</option>
                        
                        <?php
                        $queryjabatan = mysqli_query($con, "SELECT * FROM jabatan");
                        while($j = mysqli_fetch_array($queryjabatan)){
                            echo "<option value='$j[id_jabatan]'> $j[nama_jabatan] </option>";
                        }
                        ?>

                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="keterangan">Keterangan</label>
                <div class="input">
                    <textarea name="keterangan" id="keterangan" style="width:100%" rows="5"></textarea>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Simpan" class="tombol simpan">
                <input type="reset" value="Batal" class="tombol reset">
            </div>
        </form>