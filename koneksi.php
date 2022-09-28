<?php

// Create connection
$koneksi = mysqli_connect ("localhost", "root", "", "pertemuanke5");

// Check Connection
if ($koneksi) {
    echo "Berhasil melakukan koneksi";
}else 
{
        echo " Gagal melakukan koneksi";
}