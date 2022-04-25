<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-info elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $part;?>index.php" class="brand-link navbar-info">
    <img src="<?php echo $part;?>dist/img/logo_sd.png" alt="Sd Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-dark">ฝ.สรรพกำลัง มทบ.32</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        
        <?php if(isset($_SESSION['login'])) { ?>
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
            <i class="nav-icon fas fas fa-cogs"></i>
            <p>
            จัดการระบบ
            <i class="right fas fa-angle-left"></i>
            </p>
            </a>
        <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="<?php echo $part;?>person/" class="nav-link active">
                <i class="fas fa-users-cog nav-icon"></i>
                <p>ทำเนียบกำลังพล</p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="index.php" class="nav-link active">
                <i class="fas fa-book nav-icon"></i>
                <p>ข้อมูลพระราชบัญญัติ <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo $part;?>Act/index.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>จัดการข้อมูล</p>
                    </a>
                </li>

            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="" class="nav-link active">
                <i class="fas fa-book nav-icon"></i>
                <p>ข้อมูลกฎกระทรวง<i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="<?php echo $part;?>Rule/index.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>จัดการข้อมูล</p>
                    </a>
                </li>
            </ul>
        </li>

            </ul>
        </li>
        <?php } ?>

        <li class="nav-item">
            <a href="<?php echo $part;?>Register/register.php" class="nav-link">
            <i class="nav-icon fa-solid fa-file-circle-plus"></i>
            <p>
            ลงบัญชีทหารกองเกิน
                <span class="right badge badge-danger">New</span>
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="<?php echo $part;?>Register/index.php" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>
            รายชื่อทหารกองเกิน
            </p>
            </a>
        </li>

        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            แบบพิมพ์
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="<?php echo $part;?>troops/sd1.php" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>สด.1</p>
                </a>
            </li>
            </ul>
        </li>
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
                รายงานประจำปี 
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            
            
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-file nav-icon"></i>
                <p>สด.2 ประจำปี </p>
                </a>
            </li>
            </ul>
        </li>

        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>