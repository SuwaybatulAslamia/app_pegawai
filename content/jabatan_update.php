<?php
    if(!defined('INDEX')) die("");
    $query = mysqli_query($con, "UPDATE jabatan SET nama_jabatan = '$_POST[nama]' WHERE id_jabatan='$_POST[id]'");
    if($query){
        echo "Data berhasil diedit";
        echo "<meta http-equiv='refresh' content='1;url=?hal=jabatan'>";
    }else{
        echo "Data tidak dapat diedit!";
        // echo mysqli_error();
    }
    ?>