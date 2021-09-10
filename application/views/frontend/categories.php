 
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(<?php echo base_url('assets/frontend/images/banner/banner1.jpg') ?>)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Service</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>">Home</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Service Single</li>
                    </ol>
                </nav>
              </div>
          </div> 
        </div> 
    </div> 
  </div> 
</div> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row"> 
      <div class="col-xl-12 col-lg-12">
        <div class="content-inner-page">

          <h2 class="column-title mrt-0" id="callbackname"><?php 
          echo  $data['category_name'];?></h2>

          <div class="row">
            
            <div class="col-md-8">
               <?php echo  $data['description'];?>
            </div><!-- col end -->
            <div class="col-md-4">
               <img src="https://via.placeholder.com/400" id="callbackimag" class="img-fluid mr-5"> 
               <a class="btn btn-primary getquote" id="getcallback" href="javascript:void(0);">Get Call Back</a>
            </div><!-- col end -->
          </div><!-- 1st row end-->

          <div class="gap-40"></div>
  
          <!--2nd row end -->

          <div class="gap-40"></div>

          <div class="call-to-action classic">
            <div class="row align-items-center">
              <div class="col-md-8 text-center text-md-left">
                <div class="call-to-action-text">
                  <h3 class="action-title">Interested with this service.</h3>
                </div>
              </div><!-- Col end -->
              <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                <div class="call-to-action-btn">
                  <a class="btn btn-primary" href="javascript:void(0);" >Get a Quote</a>
                </div>
              </div> 
            </div> 
          </div> 

        </div> 
      </div> 


    </div> 
  </div> 
</section> 
 <?php  $this->load->view('frontend/sub_category'); ?>