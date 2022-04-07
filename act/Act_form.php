<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/auth/auth.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";

use App\Model\Act;

if(isset($_REQUEST['action'])=='edit') {
	$actObj = new Act;
	$act = $actObj->getActById($_REQUEST['A_id']);

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
            <h1 class="m-0 text-dark text-lg"><?php echo (isset($_REQUEST['action'])=='edit') ? "แก้ไขข้อมูล" : "เพิ่มข้อมูล";?> พระราชบัญญัติ</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><a href="index.php">ข้อมูลพระราชบัญญัติ</a></li>
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
        
        <form action="Act_save.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="A_title">ชื่อ พรบ.</label>
                <input  type="text"  class="form-control" name="A_title" id="A_title" value="<?php echo $act['A_title'];?>">
            </div>
            <div class="form-group">
                <label for="A_foreword">คำนำ</label>
                <textarea class="form-control" name="A_foreword" id="A_foreword" cols="30" rows="10"><?php echo $act['A_foreword'];?></textarea>
            </div>
            <div class="form-group">
                <label for="A_receive">ผู้รับสนองพระบรมราชโองการ</label>
                <input  type="text"  class="form-control" name="A_receive" id="A_receive" value="<?php echo $act['A_receive'];?>">
            </div>
            <div class="form-group">
                <label for="A_position">ตำแหน่ง</label>
                <input  type="text"  class="form-control" name="A_position" id="A_position" value="<?php echo $act['A_position'];?>">
            </div>
            <div class="form-group">
                <label for="A_comment">หมายเหตุ</label>
                <textarea class="form-control" name="A_comment" id="A_comment" cols="30" rows="5"><?php echo $act['A_comment'];?></textarea>
            </div>

            <input type="hidden" name="action" value="<?php echo (isset($_REQUEST['action'])=='edit') ? "edit" : "add";?>">
            <input type="hidden" name="A_id" value="<?php echo $act['A_id']; ?>">
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