<?php
    if(!defined('INDEX')) die("");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <h2 class="judul">
        <i class="fa-solid fa-people-arrows"></i> Data Jabatan
    </h2>
    <a class="tombol" href="?hal=jabatan_tambah">
        <i class="fas fa-plus-circle"></i> Tambah
    </a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
        $no = 0;
        while($data = mysqli_fetch_array($query)){
            $no++;
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $data ['nama_jabatan'] ?></td>
            <td>
                <a class="tombol edit" href="?hal=jabatan_edit&id=<?php echo $data['id_jabatan']; ?>&nama_jabatan=<?php echo $data['nama_jabatan']; ?>">
                    <i class="fa-regular fa-pen-to-square"></i> Edit
                </a>
                <a class="tombol hapus" href="?hal=jabatan_hapus&id=<?php echo $data['id_jabatan']; ?>&nama_jabatan=<?php echo $data['nama_jabatan']; ?>">
                    <i class="fas fa-trash-alt"></i> Hapus
                </a>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
