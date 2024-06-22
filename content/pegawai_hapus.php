<?php
    if(!defined('INDEX')) die("");
    $query = mysqli_query($con, "DELETE FROM pegawai WHERE id_pegawai='$_GET[id]'");
    if($query){
        echo "Data berhasil dihapus";
        echo "<meta http-equiv='refresh' content='1;url=?hal=pegawai'>";
    }else{
        echo "Data tidak dapat dihapus!";
        // echo mysqli_error();
    }
?>