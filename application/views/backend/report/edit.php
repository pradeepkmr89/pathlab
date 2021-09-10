<!-- [ Main Content ] start -->
<div class="row">
   <!-- [ form-element ] start -->
   <div class="col-sm-12">
      <div class="card">
         <form method ="post" enctype="multipart/form-data" action="<?php echo base_url('admin/banner/update');?>">
            <div class="card-header"> 
               <a href="<?php echo base_url('admin/banner/list');?>" class="btn btn-danger btn-lg"><i class="fas fa-angle-double-left"></i> Return Back</a>   <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Update</button>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="category_name"><?=$page_title;?> Name</label>
                        <input type="text" name="name" autocomplete="off" required class="form-control" id="" placeholder="Enter here..." value="<?php echo $res[0]['name'];?>"> 
                        <input type="hidden" name="id" value="<?php echo $res[0]['id'];?>">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="name"><?=$page_title;?> Type</label>
                        <div class="input-group mb-3">
                           <div class="input-group-prepend">
                              <label class="input-group-text" for="inputGroupSelect01"> Select</label>
                           </div>
                           <select class="custom-select singalselect" name="type" id="urltype">
                              <option value="0" <?php echo ($res[0]['type'] == '0')?"selected":'';?>>Category</option>
                              <option value="1" <?php echo ($res[0]['type'] == '1')?"selected":'';?>>Custom Link</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <div class="input-group mt-3">
                           <div class="custom-file">
                              <input type="file" name="images" class="custom-file-input" id="inputGroupFile01">
                              <label class="custom-file-label" for="inputGroupFile01">   Image</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="name">  URL</label>
                        <span id="caturl">
                           <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                 <label class="input-group-text" for="inputGroupSelect01"> Select</label>
                              </div>
                              <select class="custom-select singalselect" name="redcurl" id="type">
                                 <option value="0">Category</option>
                                 <?php 
                                    $allcat = allCategory();
                                    foreach($allcat as $tCat){
                                            ?>
                                 <option value="<?=$tCat->id;?>" <?php echo ($res[0]['link'] == $tCat->id)?"selected":'';?>><?=$tCat->category_name;?></option>
                                 <?php } ?>
                              </select>
                           </div>
                        </span>
                        <span id="casturl" style="display:none;">
                        <input type="text" name="redurl" autocomplete="off"  class="form-control" id="redurl" placeholder="Enter URL here..." value="<?=$res[0]['link'];?>"> 
                        </span>
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