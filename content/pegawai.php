<?php
    if(!defined('INDEX')) die("");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <h2 class="judul">
        <i class="fa-solid fa-clipboard-user"></i> Data Pegawai
    </h2>
    <a class="tombol" href="?hal=pegawai_tambah">
        <i class="fas fa-plus-circle"></i> Tambah
    </a>
<table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Jabatan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan = jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
                    $no = 0;
                    while($data = mysqli_fetch_array($query)){
                        $no++;
                    ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><img src="./images/<?= $data['foto'] ?>" width="100"></td>
                        <td><?= $data['nama_pegawai'] ?></td>
                        <td><?= $data['jk'] ?></td>
                        <td><?= $data['tgl_lahir'] ?></td>
                        <td><?= $data['nama_jabatan'] ?></td>
                        <td><?= $data['keterangan'] ?></td>
                        <td>
                        <a class="tombol edit" href="?hal=pegawai_edit&id=<?= $data['id_pegawai'] ?>">
                            <i class="fa-regular fa-pen-to-square"></i> Edit
                        </a>
                        <a class="tombol hapus" href="?hal=pegawai_hapus&id=<?= $data['id_pegawai'] ?>&foto=<?= $data['foto'] ?>">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>