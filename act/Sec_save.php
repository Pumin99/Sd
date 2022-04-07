<?php require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";?>
<?php
// $_GET , $_REQUEST
use App\Model\Section;

$secObj = new Section;

if($_REQUEST['action']=='edit'){
	$sec = $_REQUEST;
	unset($sec['action']);

    $secObj->updateSec($sec);


   header("location: index.php");
}
elseif($_REQUEST['action']=='add'){
	$sec = $_REQUEST;
	unset($sec['action']);
	unset($sec['S_id']);
	$secObj->addSec($sec);
    header("location: index.php");
}


// header("location: Act_form.php");
?>