<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/auth/auth.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";

use App\Model\Position;

if(isset($_REQUEST['action'])=='edit') {
	$posObj = new Position;
    $pos = $posObj->getPosById($_REQUEST['posid']);

    $pos_status = $pos['pos_status'];

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
            <h1 class="m-0 text-dark text-lg"><?php echo (isset($_REQUEST['action'])=='edit') ? "แก้ไขข้อมูล" : "เพิ่มข้อมูล";?> ข้อมูลตำแหน่ง</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="Position_form.php">เพิ่มข้อมูลตำแหน่ง</a></li>
            <li class="breadcrumb-item active"><a href="Person_form.php">เพิ่มข้อมูลกำลังพล</a></li>
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
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title"></h3>

        </div>
        <div class="card-body">
        <form action="position_save.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-4">
            <div class="form-group">
                <label for="position">ตำแหน่ง</label>
                <input  type="text"  class="form-control" name="position" id="position" value="<?php echo $pos['position'];?>">
            </div>
            <div class="form-group">
                <label for="pos_no">ชกท.</label>
                <input  type="text"  class="form-control" name="pos_no" id="pos_no" value="<?php echo $pos['pos_no'];?>">
            </div>
            <div class="form-group">
                <label for="pos_spec">เหล่า</label>
                <select class="form-control" name='pos_spec' id='pos_spec'>
                    <option value='ไม่จำกัดเหล่า' <?php echo ($pos['pos_spec']=='ไม่จำกัดเหล่า') ? "selected" : ""; ?>>ไม่จำกัดเหล่า</option>
                    <option value='จำกัดเหล่า' <?php echo ($pos['pos_spec']=='จำกัดเหล่า') ? "selected" : ""; ?>>จำกัดเหล่า</option>
                </select>
            </div>
            </div>    

            <div class="col-sm-4">
            <div class="form-group">
                <label for="pos_rate">อัตรา</label>
                <input  type="text"  class="form-control" name="pos_rate" id="pos_rate" value="<?php echo $pos['pos_rate'];?>">
            </div>
            <div class="form-group">
                <label for="pos_num">เลขที่ตำแหน่ง</label>
                <input  type="text"  class="form-control" name="pos_num" id="pos_num" value="<?php echo $pos['pos_num'];?>">
            </div>


            <div class="form-group">
                <label for="pos_type">ประเภท</label>
                <select class="form-control" name='pos_type' id='pos_type'>
                    <option value='A' <?php echo ($pos['pos_type']=='A') ? "selected" : ""; ?>>นายทหารสัญญาบัตร</option>
                    <option value='B' <?php echo ($pos['pos_type']=='B') ? "selected" : ""; ?>>นายทหารประทวน</option>
                </select>
            </div>
            </div>
        </div>   

            <div class="form-group">
                <!-- <label for="pos_status">สถานะ</label>
                
                <input type="checkbox" name="pos_status" id="pos_status"  <?php echo ($pos_status=='on') ? "checked" : ""; ?> data-bootstrap-switch>
                ON=เปิดตำแหน่งบรรจุ  OFF=ปิดตำแหน่งบรรจุ -->
            <div class="form-group clearfix">
                    <div class="icheck-primary d-inline">
                    <input type="radio" id="pos_status1" name="pos_status" value="on" <?php echo ($pos_status=='on') ? "checked" : ""; ?>>
                    <label for="pos_status1">เปิดตำแหน่งบรรจุ
                    </label>
                    </div>
                    <div class="icheck-primary d-inline">
                    <input type="radio" id="pos_status2" name="pos_status" value="off" <?php echo ($pos_status=='off') ? "checked" : ""; ?>>
                    <label for="pos_status2">ปิดตำแหน่งบรรจุ
                    </label>
                    </div>
                </div>
            </div>

            <input type="hidden" name="action" value="<?php echo (isset($_REQUEST['action'])=='edit') ? "edit" : "add";?>">
            <input type="hidden" name="posid" value="<?php echo $pos['posid']; ?>">
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
        
        // $("input[data-bootstrap-switch]").each(function(){
        // $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });

    } );
</script>
<?php
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/endpage.php";
  ?>