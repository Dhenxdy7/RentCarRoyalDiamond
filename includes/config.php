<?php
# Konek ke Web Server Lokal
$myHost	= "localhost";
$myUser	= "binb1751_rental_mobil";
$myPass	= "Pemrog_123";
$myDbs	= "binb1751_rental_mobil";

$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}

?>