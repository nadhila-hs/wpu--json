<?php

$mahasiswa = [
  [
    "nama" => "Sandhika Galih",
    "nrp" => "043040020",
    "email" => "sandhikagalih@unpas.ac.id"
  ],
  [
    "nama" => "Erik Doank",
    "nrp" => "023040001",
    "email" => "erik@gmail.com"
  ]
];

var_dump($mahasiswa); // hasilnya array asosiatif

$data = json_encode($mahasiswa);
echo $data; // hasilnya json
