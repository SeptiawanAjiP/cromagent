<?php
    if ($this->session->userdata('user') != NULL && $this->session->userdata('idAgent') != NULL) {
        # code...
        ;
    } else {
        header('Location: '.base_url().'index.php/agent');
    }
?>
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="#" class="logo">
        <img src="<?php echo base_url()?>images/logo.png" alt="">
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="nav notify-row" id="top_menu">
    <!--  notification start, title icon berubah untuk menunjukkan notifikasi -->
    <ul class="nav top-menu">
        <!-- customer notification -->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o" title="Ada 3 pelanggan baru"></i>
                <span class="badge bg-warning" style="background:green;">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#">Notification about ticket request (complaint)</a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        <!-- non-aktif user notification -->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-bell-o" title="Ada 1 warung non-aktif"></i>
                <span class="badge bg-warning" style="background:red;">1</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Non-Actife</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#">New non-actife shop Notification</a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img src="<?php echo base_url()?>images/avatar1_small.jpg">
                <span class="username"><?php echo $this->session->userdata('user'); ?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class="fa fa-user"></i> User Profile</a></li>
                <li><a href="<?php echo base_url()?>index.php/agent/logout"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
