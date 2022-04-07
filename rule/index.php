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
                    <li class="breadcrumb-item"><a href="Rule_form.php">เพิ่มข้อมูลกฎกระทรวง</a></li>
                    <li class="breadcrumb-item active"><a href="Rulesub_form.php">เพิ่มข้อย่อยของกฎกระทรวง</a></li>
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
        <div class="col-12">
            <div class="card card-primary card-tabs card-outline card-outline-tabs">
            <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-two-tab" role="tablist">
                <li class="pt-2 px-3"><h3 class="card-title">กฎกระทรวง</h3></li>
                <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-two-home-tab" data-toggle="pill" href="#custom-tabs-two-home" role="tab" aria-controls="custom-tabs-two-home" aria-selected="true">กฎกระทรวง.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="section-tab" data-toggle="pill" href="#section" role="tab" aria-controls="section" aria-selected="false">ข้อย่อย</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content" id="custom-tabs-two-tabContent">
                <div class="tab-pane fade show active" id="custom-tabs-two-home" role="tabpanel" aria-labelledby="custom-tabs-two-home-tab">
                <table class="table table-striped text-sm" id="viewact" width="100%">
                    <thead>
                        <th>#</th>
                        <th>ฉบับที่</th>
                        <th>เรื่อง</th>
                        <th>ลงวันที่</th>
                        <th>จัดการ</th>
                    </thead>
                    <tbody>
                    <?php
                    use App\Model\Rule;

                    $ruleobj=new Rule();
                    $n=0;
                    $rules=$ruleobj->getAllRule();
                        foreach($rules as $rule){
                            $n++;
                            echo "
                            <tr>
                                <td>{$n}</td>
                                <td>{$rule['R_issue']}</td>
                                <td>{$rule['R_title']}</td>
                                <td>{$rule['R_datesign']}</td>
                                <td>
                                    <a href='Rule_form.php?R_id={$rule['R_id']}&action=edit' class='mr-2 btn btn-primary'>แก้ไข</a>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="section" role="tabpanel" aria-labelledby="section-tab">
                <table class="table table-striped text-sm" id="viewsec" width="100%">
                    <thead>
                        <th>#</th>
                        <th>ชื่อหมวด</th>
                        <th>จัดการ</th>
                    </thead>
                    <tbody>
                    <?php
                    use App\Model\Section;

                    $secobj=new Section();
                    $n=0;
                    $secs=$secobj->getAllSec();
                        foreach($secs as $sec){
                            $n++;
                            echo "
                            <tr>
                                <td>{$n}</td>
                                <td>{$sec['S_title']}</td>
                                <td>
                                    <a href='Sec_form.php?S_id={$sec['S_id']}&action=edit' class='mr-2 btn btn-primary'>แก้ไข</a>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="Act-sec" role="tabpanel" aria-labelledby="Act-sec-tab">
                <table class="table table-striped text-sm" id="viewact-sec" width="100%">
                    <thead>
                        <th>#</th>
                        <th>มาตราที่</th>
                        <th>วรรค1</th>
                        <th>วรรค2</th>
                        <th>จัดการ</th>
                    </thead>
                    <tbody>
                    <?php
                    use App\Model\Actsec;

                    $actsecobj=new Actsec();
                    $n=0;
                    $act_sec=$actsecobj->getAllAct_s();
                        foreach($act_sec as $acts){
                            $n++;
                            echo "
                            <tr>
                                <td>{$n}</td>
                                <td>{$acts['As_no']}</td>
                                <td>{$acts['As_text_title']}</td>
                                <td>{$acts['As_text_end']}</td>
                                <td>
                                    <a href='Act_sec_form.php?As_id={$acts['As_id']}&action=edit' class='mr-2 btn btn-primary'>แก้ไข</a>
                                </td>
                            </tr>
                            ";
                        }
                    ?>
                        </tbody>
                    </table>
                </div>
                <div class="tab-pane fade" id="Act-sub" role="tabpanel" aria-labelledby="Act-sub-tab">
                <table class="table table-striped text-sm" id="viewact-sec" width="100%">
                    <thead>
                        <th>#</th>
                        <th>มาตราที่</th>
                        <th>อนุมาตราที่</th>
                        <th>ข้อความ</th>
                        <th>จัดการ</th>
                    </thead>
                    <tbody>
                    <?php
                    use App\Model\Actsub;

                    $actsubobj=new Actsub();
                    $n=0;
                    $act_sub=$actsubobj->getAllActsub();
                        foreach($act_sub as $actsub){
                            $n++;
                            echo "
                            <tr>
                                <td>{$n}</td>
                                <td>{$actsub['As_id']}</td>
                                <td>{$actsub['Ass_no']}</td>
                                <td>{$actsub['Ass_text']}</td>
                                <td>
                                    <a href='Act_sub_form.php?Ass_id={$actsub['Ass_id']}&action=edit' class='mr-2 btn btn-primary'>แก้ไข</a>
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