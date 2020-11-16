<?php

use function PHPSTORM_META\map;

$mahasiswa = [
    [
        "nama" => "Nathaniel Wijayanto",
        "nrp" => "183040023",
        "email" => "NathanielWijayanto@gmail.com"
    ],
    [
        "nama" => "Kai'sa",
        "nrp" => "183040043",
        "email" => "KaisaKDA@gmail.com"
    ]
];

$data = json_encode($mahasiswa);
echo $data;
