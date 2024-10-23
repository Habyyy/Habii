<?php
require_once 'model/role_model_I.php';

$mobil1 = new Mobil("Super Car", 400, 2500, 90, "Twin Turbo");
$mobil2 = new Mobil("Hyper Car", 700, 5500, 140, "V8");

$mobil1->getinfomobil();
$mobil2->getinfomobil();
