<?php
require $_SERVER['DOCUMENT_ROOT']."/Sd/auth/auth.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";
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
            <h1 class="m-0 text-dark text-lg">จัดการข้อมูล</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="Position_form.php">เพิ่มข้อมูลตำแหน่ง</a></li>
            <li class="breadcrumb-item active"><a href="Person_form.php">เพิ่มข้อมูลกำลังพล</a></li>
            <!-- <li class="breadcrumb-item active"><a href="Act_sec_form.php">เพิ่มมาตรา</a></li>
            <li class="breadcrumb-item active"><a href="Act_sub_form.php">เพิ่มอนุมาตรา</a></li> -->
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
    <?php 
        use App\Model\Person;
        use App\Model\Position;

    ?>
    <section class="content">
        <div class="col-12">
            <div class="card card-primary card-tabs card-outline card-outline-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                <li class="pt-2 px-3"><h3 class="card-title">ทำเนียบกำลังพล</h3></li>
                <li class="nav-item">
                    <a class="nav-link active" id="position-tab" data-toggle="pill" href="#position" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">อัตราบรรจุ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="person-tab" data-toggle="pill" href="#person" role="tab" aria-controls="person" aria-selected="false">ข้อมูลกำลังพล</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                <div class="tab-pane fade show active" id="position" role="tabpanel" aria-labelledby="position-tab">
                <table class="table table-striped text-sm" id="viewact" width="100%">
                    <thead>
                        <th>#</th>
                        <th>เลขประจำตำแหน่ง</th>
                        <th>ตำแหน่ง</th>
                        <th>ชกท.</th>
                        <th>อัตรา</th>
                        <th>เหล่า</th>
                        <th>สถานะ</th>
                        <th>จัดการ</th>
                    </thead>
                    <tbody>
                    <?php
                    
                    $posobj=new Position();
                    $n=0;
                    $poss=$posobj->getAllPos();
                        foreach($poss as $pos){
                            $n++;
                            echo "
                            <tr>
                                <td>{$n}</td>
                                <td>{$pos['pos_num']}</td>
                                <td>{$pos['position']}</td>
                                <td>{$pos['pos_no']}</td>
                                <td>{$pos['pos_rate']}</td>
                                <td>{$pos['pos_spec']}</td>
                                <td>{$pos['pos_status']}</td>
                                <td>
                                    <a href='Position_form.php?posid={$pos['posid']}&action=edit' class='mr-2 btn btn-primary'>แก้ไข</a>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade show" id="person" role="tabpanel" aria-labelledby="person-tab">
                <table class="table table-striped text-sm" id="viewsec" width="100%">
                    <thead>
                        <th>#</th>
                        <th>เลขประจำตัวทหาร</th>
                        <th>เลขประจำตัวประชาชน</th>
                        <th>ยศ</th>
                        <th>ชื่อ</th>
                        <th>สกุล</th>
                        <th>เบอร์โทร</th>
                        <th>จัดการ</th>
                    </thead>
                    <tbody>
                    <?php
                    

                    $personobj=new Person();
                    $n=0;
                    $persons=$personobj->getAllPersons();
                        foreach($persons as $person){
                            $n++;
                            echo "
                            <tr>
                                <td>{$n}</td>
                                <td>{$person['sid']}</td>
                                <td>{$person['idcard']}</td>
                                <td>{$person['yot_sort']}</td>
                                <td>{$person['name']}</td>
                                <td>{$person['surname']}</td>
                                <td>{$person['tel']}</td>
                                <td>
                                    <a href='Person_form.php?pid={$person['pid']}&action=edit' class='mr-2 btn btn-primary'>แก้ไข</a>
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