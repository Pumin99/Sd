<?php 
session_start();

require $_SERVER['DOCUMENT_ROOT']."/Sd/include/head.php";
?>
<body class="hold-transition sidebar-mini layout-fixed sidebar-collapse text-md">
<div class="wrapper">

<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/navbar.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/sidebar.php";
?>
 
    
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
      <!-- Default box -->
      <section class="content">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">ข่าวสาร/ประชาสัมพันธ์</h3>

          
        </div>
        <div class="card-body">
        ยินดีต้อนรับ
        <?php echo $_SESSION['name'] ;?>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      </section>


      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
	
  <?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/footer.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/endpage.php";
  ?>