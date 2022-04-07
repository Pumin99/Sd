 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-muted navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">หน้าแรก</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">เกี่ยวกับหน่วย</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">ทำเนียบกำลังพล</a>
      </li>
      <li class="nav-item dropdown d-none d-sm-inline-block">
        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ระเบียบ/คำสั่ง</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">พรบ.รับราชการทหาร</a>
                <a class="dropdown-item" href="#">กฎกระทรวง</a>
    </li>


      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">ติดต่อเรา</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>
<!-- Right navbar links -->
<?php  if(!$_SESSION['login']) { ?>
<ul class="navbar-nav ml-auto ">
    <li class="nav-item  ">
        <a class="nav-link"  href="<?php echo $part;?>auth/login.php" role="button">
            <i class="fas fa-sign-in-alt"></i> เข้าสู่ระบบ
        </a>  
    </li>
</ul>
<?php }else{?>
<ul class="navbar-nav ml-auto ">
    <li class="nav-item  ">
        <li class="nav-item dropdown user user-menu">
        <a class="nav-link dropdown-toggle"  data-toggle="dropdown">
            <img src="<?php echo $part;?>dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs"><?php echo $_SESSION['name'];?></span>
        </a>
        <ul class="dropdown-menu">
            <li class="user-header">
                <img src="<?php echo $part;?>dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                <?php echo $_SESSION['name'];?>
                    <small><?php echo $_SESSION['email'];?></small>
                </p>
            </li>
            <li class="user-footer d-flex justify-content-center">
                <div class="float-left mr-5">
                    <a href="#" class="btn btn-default">Profile</a>
                </div>
                <div class="float-right">
                    <a href="auth/logout.php" class="btn btn-default">ออกจากระบบ</a>
                </div>
            </li>
        </ul>
        </li>    
    </li>
</ul>
<?php } ?>


<!-- User Account: style can be found in dropdown.less -->


</nav>
<!-- /.navbar -->