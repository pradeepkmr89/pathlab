

        <!-- [ Main Content ] start -->
        <div class="row">
        
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                   
                    <form method ="post" enctype="multipart/form-data" action="<?php echo base_url('admin/banner/save');?>">
                    <div class="card-header"> 
                         
                         <?php if ($this->session->flashdata('success_message')) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('success_message') ?> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                    
                     <?php } ?>

                     <?php if ($this->session->flashdata('error_message')) { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?= $this->session->flashdata('error_message') ?> 
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                    
                     <?php } ?>

                         <a href="<?php echo base_url('admin/banner/list');?>" class="btn btn-danger btn-lg"><i class="fas fa-angle-double-left"></i> Return Back</a>   <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button>
                     </div>
                    
                    <div class="card-body">
                        
                         <div class="row">
                             
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name"><?=$page_title;?> Name</label>
                                        <input type="text" name="name" autocomplete="off" required class="form-control" id="" placeholder="Enter here..."> 
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
                                        <option value="0">Category</option> 
                                        <option value="1">Custom Link</option> 
                                        
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
                                        <label class="custom-file-label" for="inputGroupFile01"> Image</label>
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
                                        $allcat = allCategory('ORDER BY RAND() Limit 3');
                                        foreach($allcat as $tCat){
                                                ?>
                                      <option value="<?=$tCat->id;?>"><?=$tCat->category_name;?></option> 
                                  <?php } ?>
                                     </select>
                                </div>
                            </span>
                            <span id="casturl" style="display:none;">
                                <input type="text" name="redurl" autocomplete="off"   class="form-control" id="redurl" placeholder="Enter URL here..."> 
                            </span>
                                    </div> 
                             </div>
                          <div class="col-md-12">
                                <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Text on Banner</label>
                                        <textarea class="form-control" name="description" id="editor1" rows="3"  placeholder="Enter here..."></textarea> 
                            </div> 
                            </div>
                        </div> 
                      
                        <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button>
                          <a href="<?php echo base_url('admin/banner/list');?>" class="btn btn-danger  btn-lg"><i class="far fa-window-close"></i> Cancel </a>
          
                     
                    </div>
                    </form>
                </div>
                <!-- Input group -->
                   
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
