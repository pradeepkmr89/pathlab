<!DOCTYPE html>
<html lang="en">
 <meta http-equiv="content-type" content="text/html;charset=utf-8" /> 
<head> 
  <meta charset="utf-8">
  <title><?php echo $meta_title; ?></title> 
  <meta name="description" content="<?php echo $meta_desc; ?>">
  <meta name="keywords" content="<?php echo $meta_keyword; ?>" />


  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="<?php echo base_url('assets/frontend/images/favicon.png') ?>">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/plugins/bootstrap/bootstrap.min.css') ?>">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/plugins/fontawesome/css/all.min.css') ?>">
  <!-- Animation -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/plugins/animate-css/animate.css') ?>">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/plugins/slick/slick.css') ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/plugins/slick/slick-theme.css') ?>">
  <!-- Colorbox -->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/plugins/colorbox/colorbox.css') ?>">
  <!-- Template styles-->
  <link rel="stylesheet" href="<?php echo base_url('assets/frontend/css/style.css') ?>">

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><a href="call:<?php echo getCompanyInfo()['mobile'] ;?>"> <i class="fa fa-phone fa-flip-horizontal" aria-hidden="true"> </i>
                      <p class="info-text"><?php echo getCompanyInfo()['mobile'] ;?></p></a>
                    </li>
                    <li><a href="mailto:<?php echo getCompanyInfo()['email'] ;?>"> <i class="fa fa-envelope fa-flip-horizontal" aria-hidden="true"> </i>
                      <p class="info-text"><?php echo getCompanyInfo()['email'] ;?></p></a>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" target="_blank"  href="<?php echo getCompanyInfo()['facebook'] ;?>">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter"  target="_blank"  href="<?php echo getCompanyInfo()['twitter'] ;?>">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram"  target="_blank"  href="<?php echo getCompanyInfo()['insta'] ;?>">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a> 
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                
                <div class="logo">
                    <a class="d-block" href="index-2.html">
                      <img loading="lazy" src="<?php echo base_url('assets/frontend/images/logo.png') ?>" alt="Constra">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav ml-auto align-items-center">
                      <li class="nav-item dropdown active">
                          <a href="<?php echo base_url();?>" class="nav-link"  >Home  </a> 
                      </li>
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>about-us">About us</a></li>

                      <li class="nav-item dropdown">
                          <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <?php $query = $this->db->query("select  * from categories where parent_id=0")->result();
                                  foreach($query as $catVal){
                            ?>
                            <li><a href="<?php echo base_url();?><?=$catVal->slug;?>"><?=$catVal->category_name;?></a></li> 
                          <?php } ?>
                          </ul>
                      </li>   
                       <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>blog">Blog</a></li>
                      <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>contact-us">Contact</a></li>

                      <li class="header-get-a-quote">
                          <a class="btn btn-primary" href="contact.html">Get Free Quote</a>
                      </li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->

<!-- Modal -->
<div style="margin-top: 50px" class="modal fade " id="getcallbackModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enquire Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <span id="callbackenqres"></span>
        <div class="container-fluid">
        <div class="row">
          <div class="col-md-6"><span id="enq_image"></span></div>
          <div class="col-md-6"> 
               <div class="mb-3 row">
                <label for="name" class="col-sm-6 col-form-label">Enter Your Name</label> 
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter here...">
               </div>
              <div class="mb-3 row">
                <label for="name" class="col-sm-6 col-form-label">Enter Your Email</label> 
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter here...">
               </div>
                <div class="mb-3 row">
                <label for="name" class="col-sm-6 col-form-label">Enter Your Phone</label> 
                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter here...">
               </div>
                <div class="mb-3 row">
                <label for="name" class="col-sm-6 col-form-label">Enter Your Message</label> 
                <textarea class="form-control" name="message" id="message" rows="5"></textarea>
               </div> 
        </div>
        </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="submitcallbackenq">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!--//Modal -->