<?php 
require $_SERVER['DOCUMENT_ROOT']."/Sd/auth/auth.php";
require $_SERVER['DOCUMENT_ROOT']."/Sd/vendor/autoload.php";

use App\Model\Person;
use App\Model\Yot;
use App\Model\Team;


if(isset($_REQUEST['action'])=='edit') {
	$personObj = new Person;
    $person = $personObj->getPersonById($_REQUEST['pid']);
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
            <h1 class="m-0 text-dark text-lg"><?php echo (isset($_REQUEST['action'])=='edit') ? "แก้ไขข้อมูล" : "เพิ่มข้อมูล";?> ข้อมูลกำลังพล</h1>
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
        <form action="Person_save.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="sid">เลขประจำตัวทหาร</label>
                    <input  type="text"  class="form-control" name="sid" id="sid" value="<?php echo $person['sid'];?>"maxlength="10">
                </div>
            </div>
            <div class="col-sm-4">
                <div class="form-group">
                    <label for="idcard">เลขประจำตัวประชาชน</label>
                    <input  type="text"  class="form-control" name="idcard" id="idcard" value="<?php echo $person['idcard'];?>" maxlength="13">
                </div>
            </div>
        </div>   
        
        <div class="row">  
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="yid">ยศ.</label>
                    <select name="yid" class="form-control">
                        <option value="">เลือก</option>
                        <?php
                            $yotObj = new Yot;
                            $yots = $yotObj->getAllYot();
                            foreach($yots as $yot) {
                                $selected = ($yot['yid'] == $person['yid']) ? "selected" : "";
                                echo "
                                    <option value='{$yot['yid']}' {$selected} >{$yot['yot_sort']}</option>
                                ";
                            }
                        ?>
                    </select>	
                </div>
            </div>    
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="name">ชื่อ</label>
                    <input  type="text"  class="form-control" name="name" id="name" value="<?php echo $person['name'];?>">
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="surname">นามสกุล</label>
                    <input  type="text"  class="form-control" name="surname" id="surname" value="<?php echo $person['surname'];?>">
                </div>
            </div>
        </div> 
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                        <label for="tid">เหล่า</label>
                        <select name="tid" class="form-control">
                            <option value="">เลือก</option>
                            <?php
                                $teamObj = new Team;
                                $teams = $teamObj->getAllTeam();
                                foreach($teams as $team) {
                                    $selected = ($team['tid'] == $person['tid'] || $team['tid']==10) ? "selected" : "";
                                    echo "
                                        <option value='{$team['tid']}' {$selected} >{$team['team_name']}</option>
                                    ";
                                }
                            ?>
                        </select>	
                </div>
            </div>
            <div class="col-sm-3">                    
                    <div class="form-group">
                        <label for="birthday">วันเกิด</label>
                        <input  type="text"  class="form-control"  name="birthday" id="birthday" value="<?php echo $person['birthday'];?>">
                                
                    </div>  
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="tel">เบอร์โทร</label>
                    <input  type="text"  class="form-control" name="tel" id="tel" value="<?php echo $person['tel'];?>">
                </div>   
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <label for="upload">รูปภาพ</label>
                    <div class="custom-file mb-5">
                        <input type="file" name="upload" id="upload" class="custom-file-input">
                        <label class="custom-file-label" for="customFile">Choose file</label>
                        <input type="hidden" name="img" id="img" class="form-control" value="<?php echo $person['img']; ?>">
                    </div>                  
            </div>        
        </div>                        
            <div class="form-group">                       
                <input type="hidden" name="action" value="<?php echo (isset($_REQUEST['action'])=='edit') ? "edit" : "add";?>">
                <input type="hidden" name="pid" value="<?php echo $person['pid']; ?>">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
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

        bsCustomFileInput.init();

        $.extend($.dateDropperSetup.languages,{
            'en' : {
            name : 'English',
            months : {
            short: [
                'ม.ค.',
                'ก.พ.',
                'มี.ค.',
                'เม.ย.',
                'พ.ค.',
                'มิ.ย.',
                'ก.ค.',
                'ส.ค.',
                'ก.ย.',
                'ต.ค.',
                'พ.ย.',
                'ธ.ค.'
            ],
            full : [
                'มกราคม',
                'กุมภาพันธ์',
                'มีนาคม',
                'เมษายน',
                'พฤษภาคม',
                'มิถุนายน',
                'กรกฎาคม',
                'สิงหาคม',
                'กันยายน',
                'ตุลาคม',
                'พฤศจิกายน',
                'ธันวาคม'
            ]
            },
            weekdays : {
            short : [
                'อา',
                'จ',
                'อ',
                'พ',
                'พฤ',
                'ศ',
                'ส'
            ],
            full : [
                'อาทิตย์',
                'จันทร์',
                'อังคาร',
                'พุธ',
                'พฤหัสบดี',
                'ศุกร์',
                'เสาร์'
            ]
            }
        }
        });

        $('#birthday').dateDropper({
            format: 'Y-m-d',
            largeOnly: true,
            lang: 'en',
            theme: 'leaf'
            });
        });
        // $('#birthday').dateDropper('set',{ modal: true });
</script>
<?php
require $_SERVER['DOCUMENT_ROOT']."/Sd/include/endpage.php";
?>