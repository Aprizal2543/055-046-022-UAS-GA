<?php

$koneksi = mysqli_connect("localhost", "root", "", "ari");

if (mysqli_connect_errno()) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
