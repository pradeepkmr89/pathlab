

        <!-- [ Main Content ] start -->
        <div class="row">
        
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                   
                    <form method ="post" enctype="multipart/form-data" action="<?php echo base_url('admin/cms/save');?>">
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

                         <a href="<?php echo base_url('admin/cms/list');?>" class="btn btn-danger btn-lg"><i class="fas fa-angle-double-left"></i> Return Back</a>   <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button>
                     </div>
                    
                    <div class="card-body">
                        
                         <div class="row">
                             
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name"><?=$page_title;?> Name</label>
                                        <input type="text" name="name" autocomplete="off" required class="form-control" id="page_title" placeholder="Enter here..."> 
                                    </div> 
                             </div>
                            <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="name"><?=$page_title;?> Slug(url)</label>
                                        <input type="text" name="slug" autocomplete="off" required class="form-control" id="slug" > 
                                        <div class="invalid-feedback"></div>
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
                                        <label for="exampleFormControlTextarea1"></label>
                                        <div class="input-group mt-3">
                                     
                                    <div class="custom-file">
                                        <input type="file" name="banner[]" multiple="" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">  Banner</label>
                                    </div>
                                </div>
                                 <small class="form-text text-muted">(Press 'SHIFT' or 'CTRL' for multipal selection)</small>
                                       </div>    
                         </div>
                          <div class="col-md-12">
                                <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Description</label>
                                        <textarea class="form-control" name="description" id="editor1" rows="3"  placeholder="Enter here..."></textarea> 
                            </div> 
                            </div>
                        </div>
                        <h5 class="mt-5">SEO </h5>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlTextarea1">Meta Titile</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="meta_title" placeholder="Enter here..."></textarea> 
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleFormControlTextarea1">Meta Keyword</label>
                                        <textarea class="form-control" name="meta_keyword" id="exampleFormControlTextarea1" rows="3"  placeholder="Enter here..."></textarea> 
                            </div> 
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                <label for="exampleFormControlTextarea1">Meta Description</label>
                                        <textarea class="form-control" name="meta_description"  rows="3"  placeholder="Enter here..."></textarea> 
                            </div> 
                            </div>
                        </div> 
                        <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button>
                          <a href="<?php echo base_url('admin/cms/list');?>" class="btn btn-danger  btn-lg"><i class="far fa-window-close"></i> Cancel </a>
          
                     
                    </div>
                    </form>
                </div>
                <!-- Input group -->
                   
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
