  <div class="row"> 
            <div class="col-sm-12">
                <div class="card">
                   
                    <form method ="post" enctype="multipart/form-data" action="<?php echo base_url('admin/testgroup/save');?>">
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

                         <a href="<?php echo base_url('admin/testgroup/list');?>" class="btn btn-danger btn-lg"><i class="fas fa-angle-double-left"></i> Return Back</a>   <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button>
                     </div>
                    
                    <div class="card-body">
                        
                         <div class="row">
                             
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name"><?=$page_title;?> Name</label>
                                        <input type="text" name="group_name" autocomplete="off" required class="form-control" id="" placeholder="Enter here..."> 
                                    </div> 
                             </div>
                            <div class="col-md-6">
                                     <div class="form-group">
                                         <label for="name">Select Test Name</label>
                                       <select class="js-example-basic-multiple" name="test[]"  multiple="multiple">
                                        <option value="">Select</option>
                                        <?php foreach($data as $val){?>
                                            <option value="<?=$val->id;?>"><?=$val->title;?></option>
                                        <?php  } ?>
                                       </select>
                                    </div> 
                             </div>
                           
                             
                          <div class="col-md-12">
                                <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Description</label>
                                        <textarea class="form-control" name="description" id="editor1" rows="3"  placeholder="Enter here..."></textarea> 
                            </div> 
                            </div>
                        </div> 
                      
                        <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button>
                          <a href="<?php echo base_url('admin/testgroup/list');?>" class="btn btn-danger  btn-lg"><i class="far fa-window-close"></i> Cancel </a>
          
                     
                    </div>
                    </form>
                </div>
                <!-- Input group -->
                   
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
