<!-- [ Header ] start -->
  <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
    
      
        <div class="m-header">
          <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
          <a href="#!" class="b-brand">
            <!-- ========   change your logo hear   ============ -->
            <img src="assets/images/logo.png" alt="" class="logo">
            <img src="assets/images/logo-icon.png" alt="" class="logo-thumb">
          </a>
          <a href="#!" class="mob-toggler">
            <i class="feather icon-more-vertical"></i>
          </a>
        </div>
        <div class="collapse navbar-collapse">
           
          <ul class="navbar-nav ml-auto">
        
            <li>
              <div class="dropdown drp-user">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img style="width: 40px;" src="<?php echo base_url('assets/backend/images/user/img-avatar-2.jpg');?>" class="img-radius" alt="User-Profile-Image">   
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-notification">
                  <div class="pro-head">
                    <img src="<?php echo base_url('assets/backend/images/user/img-avatar-2.jpg');?>" class="img-radius" alt="User-Profile-Image">
                    <span>Admin</span>
                    <a href="<?php echo base_url('backend/auth/logout') ?>" class="dud-logout" title="Logout">
                      <i class="feather icon-log-out"></i> 
                    </a>
                  </div>
                  <ul class="pro-body">
                    <li><a href="<?php echo base_url('admin/setting/list');?> " class="dropdown-item"><i class="feather icon-user"></i> Update Profile</a></li>
                    <li><a href="<?php echo base_url('admin/setting/list');?>" class="dropdown-item"><i class="feather icon-settings"></i> Setting</a></li>
                    <li><a href="javascript:void();" class="dropdown-item"  data-toggle="modal" data-target="#gridSystemModal"><i class="feather icon-lock"></i> Change Password</a></li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
        </div>
        
      
  </header>
  <!-- [ Header ] end -->