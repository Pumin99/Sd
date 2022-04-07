<?php require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";?>
<?php
// $_GET , $_REQUEST
use App\Model\Actsub;

$actsubObj = new Actsub;
//print_r($actsObj);

if($_REQUEST['action']=='edit'){
	$actsub = $_REQUEST;
	unset($actsub['action']);

    $actsubObj->updateActsub($actsub);
    header("location: index.php");
}
elseif($_REQUEST['action']=='add'){
	$actsub = $_REQUEST;
	unset($actsub['action']);
	unset($actsub['Ass_id']);
	$actsubObj->addActsub($actsub);
    header("location: index.php");
}


// header("location: Act_form.php");
?>