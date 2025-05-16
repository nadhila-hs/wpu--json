<?php
$data = file_get_contents('coba.json');
// $mahasiswa = json_decode($data); // berubah jd object php
$mahasiswa = json_decode($data, true); // berubah jd array php

var_dump($mahasiswa);
echo $mahasiswa[0]["pembimbing"]["pembimbing1"];
