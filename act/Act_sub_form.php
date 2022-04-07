<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/auth/auth.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";

use App\Model\Actsub;
use App\Model\Actsec;

if(isset($_REQUEST['action'])=='edit') {
	$actsubObj = new Actsub;
	$actsub= $actsubObj->getActsubById($_REQUEST['Ass_id']);
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
        
        <form action="Act_sub_save.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="As_id">มาตราที่</label>
                <select name="As_id" class="form-control">
                    <option value="">เลือก</option>
                    <?php
                    
                        $subObj = new Actsec;
                        $secsub = $subObj->getAllActsec();
                        foreach($secsub as $secs) {
                            $selected = ($secs['As_id'] == $actsub['As_id']) ? "selected" : "";
                            echo "
                                <option value='{$secs['As_id']}' {$selected} >{$secs['As_no']}</option>
                            ";
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="Ass_no">อนุมาตรา</label>
                <input  type="text"  class="form-control" name="Ass_no" id="Ass_no" value="<?php echo $actsub['Ass_no'];?>">
            </div>
            <div class="form-group">
                <label for="Ass_text">วรรค1</label>
                <textarea class="form-control" name="Ass_text" id="Ass_text" cols="30" rows="10"><?php echo $actsub['Ass_text'];?></textarea>
            </div>


            <input type="hidden" name="action" value="<?php echo (isset($_REQUEST['action'])=='edit') ? "edit" : "add";?>">
            <input type="hidden" name="Ass_id" value="<?php echo $actsub['Ass_id']; ?>">
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