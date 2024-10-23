<?php
require_once 'model/role_model_A.php';

$universitas1 = new Universitas("ITATS");

$mhs1 = new Mahasiswa("Hasan",7669);
$mhs2 = new Mahasiswa("Firman",7691);
$mhs3 = new Mahasiswa("Aril",23231);

$universitas1->tambahmahasiswa($mhs1);
$universitas1->tambahmahasiswa($mhs2);
$universitas1->tambahmahasiswa($mhs3);

$universitas1->getinfouniversitas();

$mhs1->infomahasiswa();