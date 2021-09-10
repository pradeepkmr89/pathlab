
<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row">
      <?php 
      $categoryid = $data['id'];
      $subcategory = allCategory(" where parent_id ='$categoryid'"); 
      foreach($subcategory as $subCat){
      ?>
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" title="<?php echo $subCat->category_name;?>" class="w-100" src="<?php echo base_url();?><?php echo $subCat->thumb;?>" alt="<?php echo $subCat->category_name;?>">
            </div>
            <div class="d-flex">
              
              <div class="ts-service-info">
                  <h3 class="service-box-title"><a href="<?php echo base_url();?><?php echo $subCat->slug;?>" title="<?php echo $subCat->category_name;?>"><?php echo $subCat->category_name;?></a></h3>
                  <p><?php echo $subCat->short_description;?></p>
                  <a title="<?php echo $subCat->category_name;?>" class="learn-more d-inline-block" href="<?php echo base_url();?><?php echo $subCat->slug;?>" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->
 <?php }?>
    </div><!-- Main row end -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->