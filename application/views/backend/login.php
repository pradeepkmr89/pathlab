<!DOCTYPE html>
<html lang="en">

<head>

  <title>Admin | Login</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="" />
  <meta name="keywords" content="">
  <meta name="author" content="Phoenixcoded" />
  
  <!-- vendor css -->
  <link rel="stylesheet" href="<?php echo base_url('assets/backend/css/style.css') ?>"> 
</head>

<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
  <div class="auth-content">
    <div class="card">
      <div class="row align-items-center text-center">
        <div class="col-md-12">
          <div class="card-body">
            <img src="<?php echo base_url('assets/backend/images/logo-dark.png') ?>" alt="" class="img-fluid mb-4">
            <h4 class="mb-3 f-w-400">Signin</h4> 
                <?php echo validation_errors(); ?>  
              <?php if(!empty($errors)) {
                echo $errors;
              } ?> 
            <form action="<?php echo base_url('admin') ?>" method="post">
            <div class="form-group mb-3">
              <label class="floating-label" for="Email">Email address</label>
              <input name="email" type="text" class="form-control" id="Email" placeholder="" value="admin@admin.com">
            </div>
            <div class="form-group mb-4">
              <label class="floating-label" for="Password">Password</label>
              <input name="password" type="password" class="form-control" id="Password" placeholder="" value="password">
            </div> 
            <button  type="submit"  class="btn btn-block btn-primary mb-4">Signin</button>
          </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- [ auth-signin ] end -->

<!-- Required Js -->
<script src="<?php echo base_url('assets/backend/js/vendor-all.min.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/js/plugins/bootstrap.min.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/js/ripple.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/js/pcoded.min.js') ?>"></script>



</body>

</html>
