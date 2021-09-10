<div class="row">
			<!-- [ tabs ] start -->
			<div class="col-sm-12">
				<div class="card">
					  <form method ="post" enctype="multipart/form-data" action="<?php echo base_url('admin/setting/save');?>">
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
 			  <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button>
                     </div>
					<div class="card-body">
						<ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
							</li>
							<li class="nav-item">
								<a class="nav-link  text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Setting</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link text-uppercase" id="contact-tab" data-toggle="tab" href="#otherscript" role="tab" aria-controls="contact" aria-selected="false">Other Script</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
								<div class="row">
								<div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Company Name</label>
                                        <input type="text" name="company_name" autocomplete="off" required class="form-control"  placeholder="Enter here..." value="<?php echo companydetails()['company_name'];?>"> 
                                    </div> 
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Address</label>
                                        <input type="text" name="address" autocomplete="off" required class="form-control" placeholder="Enter here..." value="<?php echo companydetails()['address'];?>"> 
                                    </div> 
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Mobile</label>
                                        <input type="text" name="mobile" autocomplete="off" required class="form-control" placeholder="Enter here..." value="<?php echo companydetails()['mobile'];?>"> 
                                    </div> 
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Tel</label>
                                        <input type="text" name="tel" autocomplete="off" required class="form-control" placeholder="Enter here..." value="<?php echo companydetails()['tel'];?>"> 
                                    </div> 
                             </div>
                             <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="name">Email</label>
                                        <input type="text" name="email" autocomplete="off" required class="form-control" placeholder="Enter here..."  value="<?php echo companydetails()['email'];?>"> 
                                    </div> 
                             </div> 
                              <div class="col-md-4">
                                      <div class="form-group">
                                          <label for="exampleFormControlTextarea1"></label>
                                        <div class="input-group mt-3">
                                     
                                    <div class="custom-file">
                                        <input type="file" name="logo" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01"> Logo</label>
                                    </div>
                                </div>
                                       </div>
                                     </div><div class="col-md-4">
                                      <div class="form-group">
                                          <label for="exampleFormControlTextarea1"></label>
                                        <div class="input-group mt-3">
                                     
                                    <div class="custom-file">
                                        <input type="file" name="favicon" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Fav Icon</label>
                                    </div>
                                </div>
                                       </div>
                                     </div>
                             </div>
                              <h5 class="mt-5">Social Links </h5>
                        <hr>
                        <div class="row"> 
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Facebook</label>
                                        <input type="text" name="facebook" autocomplete="off" required class="form-control" placeholder="Enter here..." value="<?php echo companydetails()['facebook'];?>"> 
                                    </div> 
                             </div> 
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Twitter</label>
                                        <input type="text" name="twitter" autocomplete="off" required class="form-control" placeholder="Enter here..." value="<?php echo companydetails()['twitter'];?>"> 
                                    </div> 
                             </div> 
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Insta</label>
                                        <input type="text" name="insta" autocomplete="off" required class="form-control" placeholder="Enter here..." value="<?php echo companydetails()['insta'];?>"> 
                                    </div> 
                             </div> 
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Linkedin</label>
                                        <input type="text" name="linkedin" autocomplete="off" required class="form-control" placeholder="Enter here..."  value="<?php echo companydetails()['linkedin'];?>"> 
                                    </div> 
                             </div>

                             </div>
                               <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button> 

							</div>
							<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
								<h5>Thumb Image Size</h5>
								<hr/>
								 	<div class="row"> 
								<div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Width</label>
                                        <input type="text" name="thumb_width" autocomplete="off" required class="form-control"  placeholder="Enter here..." value="<?php echo generalSettings()['thumb_width'];?>"> 
                                    </div> 
                             </div>
                             <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="name">Height</label>
                                        <input type="text" name="thumb_height" autocomplete="off" required class="form-control" placeholder="Enter here..." value="<?php echo generalSettings()['thumb_height'];?>"> 
                                    </div> 
                             </div>
							</div>
							 <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button> 
							</div>
							<div class="tab-pane fade" id="otherscript" role="tabpanel" aria-labelledby="otherscript-tab">
								<div class="row"> 
								<div class="col-md-6">
                                     <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Meta Description</label>
                                        <textarea class="form-control" name="meta_description"  rows="3"  placeholder="Enter here..."></textarea> 
                                    </div> 
                             </div> 
							</div>
							 <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button> 
								 
							</div>
						</div>
 					</div>
 				</form>
				</div>
			</div>
		 
		</div>
		<!-- [ Main Content ] end -->