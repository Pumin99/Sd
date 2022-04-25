<?php
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/head.php";

?>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse text-md">
<div class="wrapper"> 

<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/navbar.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/sidebar.php";
?>    
<?php

use App\Model\Register;       
$registerobj = new Register();

$register=$registerobj->getRegisterById($_REQUEST['id']);

// print_r($register);
?>
<style>
  /* #pdf{

    display:none;
  } */
    .fa-file {
    color:black;
    }
    .fa-address-card{
    color:black;
    }
    .fa-file-invoice-dollar{
    color:black;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div>
        </div>
      </div>
    </div> -->
    <!-- /.content-header -->

    <!-- Main content -->

    <section class="content">
      <div class="container-fluid">
       <br> 
      <h5 class="mb-2">แบบพิมพ์  <?php echo $register['name'].' '.$register['surname']  ?></h5>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-info"><i class="fa-solid fa-address-card"></i></span> -->
              <a class="btn btn-app bg-info" id="Sd44" href="Sd44.php?id=<?=$register['id'];?>" target="Register">
              <i class="fa-solid fa-address-card fa-3x"></i>
                </a>
              <div class="info-box-content">
                <span class="info-box-text">ใบแสดงตนฯ</span>
                <span class="info-box-number">สด.44</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-success"><i class="fa-solid fa-id-card-clip"></i></span> -->
              <a class="btn btn-app bg-success" href="Sd1.php?id=<?=$register['id'];?>" target="Register">
              <i class="fa-solid fa-file fa-3x"></i>
              </a>
              <div class="info-box-content">
                <span class="info-box-text">บัญชีทหารกองเกิน</span>
                <span class="info-box-number">สด.1</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-warning"><i class="fa-solid fa-file-lock"></i></span> -->
              <a class="btn btn-app bg-warning">
                <i class="fa-solid fa-book fa-3x"></i>
              </a>
              <div class="info-box-content">
                <span class="info-box-text">ใบสำคัญ</span>
                <span class="info-box-number">สด.9</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-danger"><i class="fa-solid fa-file-invoice-dollar"></i></span> -->
              <a class="btn btn-app bg-danger">
                <i class="fa-solid fa-file-invoice-dollar fa-3x"></i>
              </a>
              <div class="info-box-content">
                <span class="info-box-text">ปค.14</span>
                <span class="info-box-number">ม.18</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-info"><i class="fa-solid fa-address-card"></i></span> -->
              <a class="btn btn-app bg-info" id="Sd44" href="Sd44.php?id=<?=$register['id'];?>" target="Register">
              <i class="fa-solid fa-address-card fa-3x"></i>
                </a>
              <div class="info-box-content">
                <span class="info-box-text">หมายเรียก </span>
                <span class="info-box-number">สด.35</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-success"><i class="fa-solid fa-id-card-clip"></i></span> -->
              <a class="btn btn-app bg-success" href="Sd1.php?id=<?=$register['id'];?>" target="Register">
              <i class="fa-solid fa-file-invoice-dollar fa-3x"></i>
              </a>
              <div class="info-box-content">
                <span class="info-box-text">หนังสือส่งปรับ ม.18</span>
                <span class="info-box-number">สด.9</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-warning"><i class="fa-solid fa-file-lock"></i></span> -->
              <a class="btn btn-app bg-warning">
                <i class="fa-solid fa-book fa-3x"></i>
              </a>
              <div class="info-box-content">
                <span class="info-box-text">ใบสำคัญ</span>
                <span class="info-box-number">สด.9</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box">
              <!-- <span class="info-box-icon bg-danger"><i class="fa-solid fa-file-invoice-dollar"></i></span> -->
              <a class="btn btn-app bg-danger">
                <i class="fa-solid fa-file fa-3x"></i>
              </a>
              <div class="info-box-content">
                <span class="info-box-text">คำร้องทั่วไป</span>
                <span class="info-box-number">ปค.14</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- <iframe name="Sd1" id="sd1" src="" width="100%" height="500px" style=display:none;> -->
  <div class="row">
    <div class="col-12">
       <iframe name="Register" width="100%" height="500px" frameBorder="0">
    </div>
  </div>

    

  </div>
  <!-- /.content-wrapper -->
<
<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/footer.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/endpage.php";
?>