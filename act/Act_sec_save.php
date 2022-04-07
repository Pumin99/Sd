<?php require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";?>
<?php
// $_GET , $_REQUEST
use App\Model\Actsec;

$actsObj = new Actsec;
//print_r($actsObj);

if($_REQUEST['action']=='edit'){
	$act_s = $_REQUEST;
	unset($act_s['action']);

    $actsObj->updateAct_s($act_s);
    header("location: index.php");
}
elseif($_REQUEST['action']=='add'){
	$act_s = $_REQUEST;
	unset($act_s['action']);
	unset($act_s['As_id']);
	$actsObj->addAct_s($act_s);
    header("location: index.php");
}


// header("location: Act_form.php");
?>