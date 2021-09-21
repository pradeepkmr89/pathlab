  <!-- [ navigation menu ] start -->
  <nav class="pcoded-navbar menu-light ">
    <div class="navbar-wrapper  ">
      <div class="navbar-content scroll-div " >
        
        <div class="">
          <div class="main-menu-header">
            <img class="img-radius" src="<?php echo base_url('assets/backend/images/user/img-avatar-2.jpg');?>" alt="User-Profile-Image">
            <div class="user-details">
              <div id="more-details">Admin <i class="fa fa-caret-down"></i></div>
            </div>
          </div>
          <div class="collapse" id="nav-user-link">
            <ul class="list-unstyled">
              <li class="list-group-item"><a href="<?php echo base_url('admin/setting/list');?>"><i class="feather icon-user m-r-5"></i> Profile</a></li>
              <li class="list-group-item"><a href="<?php echo base_url('admin/setting/list');?>"><i class="feather icon-settings m-r-5"></i>Settings</a></li>
              <li class="list-group-item"><a href="<?php echo base_url('backend/auth/logout') ?>"><i class="feather icon-log-out m-r-5"></i>Logout</a></li>
            </ul>
          </div>
        </div>
        
        <ul class="nav pcoded-inner-navbar ">
          <li class="nav-item pcoded-menu-caption">
              <label>Navigation</label>
          </li>
          <li class="nav-item">
              <a href="<?php echo base_url('admin/dashboard');?>" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
          </li>
      
          
           <li class="nav-item pcoded-menu-caption">
              <label>Manage Test</label>
          </li>
          <li class="nav-item pcoded-hasmenu">
              <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Test Pages</span></a>
              <ul class="pcoded-submenu">
                  <li><a href="<?php echo base_url('admin/test/list');?>">List</a></li>
                  <li><a href="<?php echo base_url('admin/test/create');?>">Create</a></li>
               
              </ul>
          </li>
      <li class="nav-item pcoded-menu-caption">
              <label>Manage Test Group</label>
          </li>
          <li class="nav-item pcoded-hasmenu">
              <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Test Group</span></a>
              <ul class="pcoded-submenu">
                  <li><a href="<?php echo base_url('admin/testgroup/list');?>">List</a></li>
                  <li><a href="<?php echo base_url('admin/testgroup/create');?>">Create</a></li>
               
              </ul>
          </li>
          <li class="nav-item pcoded-menu-caption">
              <label>Manage Report</label>
          </li>
          <li class="nav-item pcoded-hasmenu">
              <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Report</span></a>
              <ul class="pcoded-submenu">
                  <li><a href="<?php echo base_url('admin/report/index');?>">Report</a></li>
                
              </ul>
          </li>
      

        </ul> 
        
      </div>
    </div>
  </nav>
  <!-- [ navigation menu ] end -->
  <!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-content">
         <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><?=$page_title;?></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!"><?=$heading;?></a></li>
                         </ul>
                    </div>
                </div>
            </div>
        </div>
     <!-- [ breadcrumb ] end -->
        