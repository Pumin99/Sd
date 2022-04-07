<?php require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";?>
<?php
// $_GET , $_REQUEST
use App\Model\Person;
$personObj = new Person;

if($_FILES['upload']['tmp_name']) {
	$ext = end(explode(".", $_FILES['upload']['name']));  
	$img = "/Sd/person/img/" . md5(uniqid()) . ".{$ext}";
	move_uploaded_file($_FILES['upload']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$img);
}

if($_REQUEST['action']=='edit'){
	$person = $_REQUEST;

	unset($person['action']);

	if($_FILES['upload']['tmp_name']) {
		if($person['img']){
			// ลบรูปเก่า
			unlink($_SERVER['DOCUMENT_ROOT'].$person['img']);
		}
		$person['img'] = $img;
	}
	$personObj->updatePerson($person);
	
    header("location: index.php");
}
elseif($_REQUEST['action']=='add'){
	$person = $_REQUEST;
	unset($person['action']);
	unset($person['pid']);

	$person['img'] = $img;
	$personObj->addPerson($person);
    header("location: index.php");
}
// header("location: Act_form.php");
?>