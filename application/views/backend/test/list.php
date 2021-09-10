 
 <!-- [ stiped-table ] start -->
            <div class="col-xl-12">
                <div class="card">
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
                    	 
                         <a href="<?php echo base_url('admin/test/create');?>" class="btn btn-primary"><i class="fas fa-plus"></i> Add New <?=$page_title;?></a>
                     </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table  id="example" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th><?php echo $page_title;?> Name</th>
                                        <th>Fee</th>
                                         <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                	<?php foreach($data as $key =>$val){?>
                                    <tr>
                                        <td><?=$key + 1;?></td>
                                        <td><?php echo $val->title;?>  </td>
                                        <td><?php echo $val->price;?>  </td>
                                        
                                
                                        <td><small>Created at <?php echo $val->created_at;?>  </td>
                                        	<td><a href="<?php echo base_url('admin/test/edit/'.$val->id);?>" class="btn btn-info"> <i class="fas fa-edit"></i>
 												Edit</a> &nbsp;&nbsp; &nbsp;&nbsp; 
 												 <a  href="javascript:void(0);" class="btn btn-danger delete-page" data-id="<?php echo $val->id;?>" data-type="test_details"> <i class="fas fa-trash-alt"></i> Delete</a></td>
                                     </tr>
                             		<?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->
