<!-- [ Main Content ] start -->
<div class="row">
   <!-- [ form-element ] start -->
   <div class="col-sm-12">
      <div class="card">
         <form method ="post" enctype="multipart/form-data" action="<?php echo base_url('admin/test/update');?>">
            <div class="card-header"> 
               <a href="<?php echo base_url('admin/test/list');?>" class="btn btn-danger btn-lg"><i class="fas fa-angle-double-left"></i> Return Back</a>   <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Update</button>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="category_name"><?=$page_title;?> Name</label>
                        <input type="text" name="title" autocomplete="off" required class="form-control" id="" placeholder="Enter here..." value="<?php echo $res[0]['title'];?>"> 
                        <input type="hidden" name="id" value="<?php echo $res[0]['id'];?>">
                     </div>
                  </div><div class="col-md-6">
                     <div class="form-group">
                        <label for="category_name"><?=$page_title;?> Price</label>
                        <input type="text" name="price" autocomplete="off" required class="form-control" id="" placeholder="Enter here..." value="<?php echo $res[0]['price'];?>"> 
                        <input type="hidden" name="id" value="<?php echo $res[0]['id'];?>">
                     </div>
                  </div>
                 
                  <div class="col-md-12">
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1"> Description</label>
                        <textarea class="form-control" name="description" id="editor1" rows="3"  placeholder="Enter here..."><?php echo $res[0]['description'];?></textarea> 
                     </div>
                  </div>
               </div>
               <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Update</button>
               <a href="<?php echo base_url('admin/cms/list');?>" class="btn btn-danger  btn-lg"><i class="far fa-window-close"></i> Cancel </a>
            </div>
         </form>
      </div>
      <!-- Input group -->
   </div>
   <!-- [ form-element ] end -->
</div>
<!-- [ Main Content ] end -->