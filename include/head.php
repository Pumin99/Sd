<!DOCTYPE html>
<html lang="en">
<?php 
error_reporting (E_ALL ^ E_NOTICE);
$self =$_SERVER['PHP_SELF'];
$ex=explode("/",$self);
if(count($ex)>=4){

  $part="../";
}else{
  $part="";
}
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ฝ่ายสรรพกำลัง | มทบ.32</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->
  <link href="https://fonts.googleapis.com/css?family=Sarabun:300,400,400i,700&display=fallback" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $part;?>plugins/fontawesome-free/css/all.min.css">
  <link href="<?php echo $part;?>plugins/fontawesome-free-6/css/all.min.css" rel="stylesheet"> 
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo $part;?>plugins/select2/css/select2.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $part;?>dist/css/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo $part;?>dist/css/Sarabun.css" />



</head>