<?php
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";

use App\Model\Register;
        
$registerobj = new Register();



$register=$registerobj->getAllRegister();



?>