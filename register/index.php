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

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
    <div class="container-fluid">
        <div class="row">
        <!-- <div class="col-sm-6">
            <h1 class="m-0 text-dark text-lg">จัดการข้อมูล</h1>
        </div> -->
        <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="Position_form.php">เพิ่มข้อมูลตำแหน่ง</a></li>

            </ol>
        </div> -->
        </div>
    </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
    <!-- Default box -->
    <h3 class="text-center display-5 mb-3">ค้นหาข้อมูลทหารกองเกิน</h3>
            <form action="">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label>หมายเลขประจำตัวประชาชน</label>
                                    <input name="idcard" type="search" class="form-control" placeholder="หมายเลขประจำตัวประชาชน" value="<?php echo $_REQUEST['idcard'];?>">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>พ.ศ. เกิด</label>
                                    <select class="select2" style="width: 100%;" name="birth_y">
                                    <?php
                                    $registeryear=(date('Y')+543)-17; // คนเกิด พ.ศ.ที่ต้องลงบัญชี
                                    $countyear=$registeryear-12; // นับถึงแค่อายุ 29
                                    for ($y = $countyear; $y <= $registeryear; $y++) { ?>
                                    <option value ="<?=$y?>" <?=($registeryear==$y? 'selected' : '')?> > <?=$y?> </option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label>ตำบล</label>
  
                                    <select class="select2" style="width: 100%;" name="district">
                                        <option value="">กรุณาเลือก</option>
                                        <option value="สบปราบ" <?php if($_REQUEST['district']=='สบปราบ'){ echo "selected"; } ?>>สบปราบ</option>
                                        <option value="สมัย" <?php if($_REQUEST['district']=='สมัย'){ echo "selected"; } ?>>สมัย</option>
                                        <option value="แม่กัวะ" <?php if($_REQUEST['district']=='แม่กัวะ'){ echo "selected"; } ?>>แม่กัวะ</option>
                                        <option value="นายาง" <?php if($_REQUEST['district']=='นายาง'){ echo "selected"; } ?>>นายาง</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group input-group-lg">
                                <input name ="search" type="search" class="form-control form-control-lg" placeholder="ชื่อ - สกุล" value="<?php echo $_REQUEST['search'];?>">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-lg btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        <div class="col-12">
            <div class="card card-primary card-tabs card-outline card-outline-tabs">
            <!-- <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                <li class="pt-2 px-3"><h3 class="card-title">บัญชีทหารกองเกิน</h3></li>
                </ul>
            </div> -->
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                <div class="tab-pane fade show active" id="position" role="tabpanel" aria-labelledby="position-tab">
                <table class="table table-striped text-sm" id="viewSd1" width="100%">
                    <thead>
                        <th>#</th>
                        <th>สด.9 เล่มที่/เลขที่</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>เลขประชาชน</th>
                        <th>ปีเกิด</th>
                        <th>ตำบล</th>                      
                        <th>จัดการ</th>
                    </thead>
                    <tbody>
                    <?php
                    $registerobj = new Register();
                    $register=$registerobj->getAllRegister($_REQUEST);
                    $n=0;
                        foreach($register as $registers){
                            $n++;
                            echo "
                            <tr>
                                <td>{$n}</td>
                                <td>{$registers['Sec9_vol']} / {$registers['Sec9_num']}</td>
                                <td>{$registers['name']}</td>
                                <td>{$registers['surname']}</td>
                                <td>{$registers['idcard']}</td>
                                <td>{$registers['birth_y']}</td>
                                <td>{$registers['district']}</td>
                                <td>
                                    <a href='register_print.php?id={$registers['id']}' class='mr-2 btn btn-primary'><i class='fa-solid fa-print'> แบบพิมพ์</i></a>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
            <!-- /.card -->
            </div>
        </div>         


    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/footer.php";
?>

<!-- <script>
    $(document).ready( function () {
        $('#viewSd1').DataTable();
    } );
</script> -->
<script>
    $(function () {
      $('.select2').select2()
    });
</script>
<?php
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/endpage.php";
?>