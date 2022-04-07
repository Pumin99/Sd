<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";
?>
<?php
use App\Model\User;

$user_obj = new User;

$result = $user_obj->checkUser($_POST);



if($result){
	header("location: ../index.php");
	//	var_dump($user_obj);
	} else {
	header("location: login.php?msg=error");

}
?>