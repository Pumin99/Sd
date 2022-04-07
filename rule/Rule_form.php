<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/auth/auth.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";

use App\Model\Rule;

if(isset($_REQUEST['action'])=='edit') {
	$ruleObj = new Rule;
	$rule = $ruleObj->getRuleById($_REQUEST['R_id']);

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
            <h1 class="m-0 text-dark text-lg"><?php echo (isset($_REQUEST['action'])=='edit') ? "แก้ไขข้อมูล" : "เพิ่มข้อมูล";?> กฎกระทรวง</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="index.php">ข้อมูลกฎกระทรวง</a></li>
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

        <form action="Rule_save.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="R_issue">กฎกระทรวง ฉบับที่</label>
                <input  type="text"  class="form-control" name="R_issue" id="R_issue" value="<?php echo $rule['R_issue'];?>">
            </div>
            <div class="form-group">
                <label for="R_issue_note">ปี</label>
                <input  type="text"  class="form-control" name="R_issue_note" id="R_issue_note" value="<?php echo $rule['R_issue_note'];?>">
            </div>
            <div class="form-group">
                <label for="R_title">เรื่อง</label>
                <input  type="text"  class="form-control" name="R_title" id="R_title" value="<?php echo $rule['R_title'];?>">
            </div>
            <div class="form-group">
                <label for="R_year">พ.ศ.</label>
                <input  type="text"  class="form-control" name="R_year" id="R_year" value="<?php echo $rule['R_year'];?>">
            </div>
            <div class="form-group">
                <label for="R_foreword">คำนำ</label>
                <textarea class="form-control" name="R_foreword" id="R_foreword" cols="30" rows="5"><?php echo $rule['R_foreword'];?></textarea>
            </div>
            <div class="form-group">
                <label for="R_datesign">ลงวันที่</label>
                <input  type="text"  class="form-control" name="R_datesign" id="R_datesign" value="<?php echo $rule['R_datesign'];?>">
            </div>
            <div class="form-group">
                <label for="R_sign">ลงชื่อ</label>
                <textarea class="form-control" name="R_sign" id="R_sign" cols="30" rows="5"><?php echo $rule['R_sign'];?></textarea>
            </div>
            <div class="form-group">
                <label for="R_volume">ราชกิจจา เล่มที่</label>
                <input  type="text"  class="form-control" name="R_volume" id="R_volume" value="<?php echo $rule['R_volume'];?>">
            </div>
            <div class="form-group">
                <label for="R_chapter">ตอนที่</label>
                <input  type="text"  class="form-control" name="R_chapter" id="R_chapter" value="<?php echo $rule['R_chapter'];?>">
            </div>
            <div class="form-group">
                <label for="R_date">ลงวันที่</label>
                <input  type="text"  class="form-control" name="R_date" id="R_date" value="<?php echo $rule['R_date'];?>">
            </div>
            <div class="form-group">
                <label for="R_comment">หมายเหตุ</label>
                <textarea class="form-control" name="R_comment" id="R_comment" cols="30" rows="5"><?php echo $rule['R_comment'];?></textarea>
            </div>

            <input type="hidden" name="action" value="<?php echo (isset($_REQUEST['action'])=='edit') ? "edit" : "add";?>">
            <input type="hidden" name="R_id" value="<?php echo $rule['R_id']; ?>">
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