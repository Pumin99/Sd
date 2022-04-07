<?php require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";?>
<?php
// $_GET , $_REQUEST
use App\Model\Act;
$actObj = new Act;



if($_REQUEST['action']=='edit'){
	$act = $_REQUEST;
	unset($act['action']);

    $actObj->updateAct($act);
    header("location: index.php");
}
elseif($_REQUEST['action']=='add'){
	$act = $_REQUEST;
	unset($act['action']);
	unset($act['A_id']);
	$actObj->addAct($act);
    header("location: index.php");
}


// header("location: Act_form.php");
?>