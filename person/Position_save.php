<?php require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";?>
<?php
// $_GET , $_REQUEST
use App\Model\Position;
$posObj = new Position;



if($_REQUEST['action']=='edit'){
	$pos = $_REQUEST;

	print_r($pos);

	unset($pos['action']);

	$posObj->updatePos($pos);
	
    header("location: index.php");
}
elseif($_REQUEST['action']=='add'){
	$pos = $_REQUEST;
	unset($pos['action']);
	unset($pos['posid']);
	$posObj->addPos($pos);
    header("location: index.php");
}

// header("location: Act_form.php");
?>