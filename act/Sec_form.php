<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/auth/auth.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";

use App\Model\Section;

if(isset($_REQUEST['action'])=='edit') {
	$secObj = new Section;
	$sec = $secObj->getSecById($_REQUEST['S_id']);
}
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark text-lg"><?php echo (isset($_REQUEST['action'])=='edit') ? "แก้ไขข้อมูล" : "เพิ่มข้อมูล";?> หมวด</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="index.php">ข้อมูลหมวด</a></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <br>
      <!-- Default box -->
      <section class="content">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title"></h3>

          
        </div>
        <div class="card-body">
        
        <form action="Sec_save.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="s_title">ชื่อ หมวด</label>
                <!-- <input  type="text"  class="form-control" name="S_id" id="S_id" value="<?php echo $sec['S_id'];?>"> -->
                <input  type="text"  class="form-control" name="S_title" id="S_title" value="<?php echo $sec['S_title'];?>">
            </div>
            <input type="hidden" name="action" value="<?php echo (isset($_REQUEST['action'])=='edit') ? "edit" : "add";?>">
            <input type="hidden" name="S_id" value="<?php echo $sec['S_id']; ?>">
            <button type="submit" class="btn btn-success">Submit</button>
        </form>


        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          
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
?>

<script>
    $(document).ready( function () {
        $('#viewact').DataTable();
    } );
</script>
<?php
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/endpage.php";
  ?>