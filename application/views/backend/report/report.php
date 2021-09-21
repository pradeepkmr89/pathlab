  <div class="row"> 
            <div class="col-sm-12">
                <div class="card">
                   
                    <form method ="post" enctype="multipart/form-data" action="<?php echo base_url('admin/report/save');?>">
                    <div class="card-header">   
                         <a href="<?php echo base_url('admin/test/list');?>" class="btn btn-danger btn-lg"><i class="fas fa-angle-double-left"></i> Return Back</a>   <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button>
                     </div>
                    
                    <div class="card-body">
                        
                         <div class="row">
                             
                             <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="name">Patient Name</label>
                                        <input type="text" name="pname" autocomplete="off" required class="form-control" id="" placeholder="Enter here..."> 
                                    </div> 
                             </div>
                            <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="name">Patient Address</label>
                                        <input type="text" name="paddress" autocomplete="off" required class="form-control" id="" placeholder="Enter here..."> 
                                    </div> 
                             </div>
                            <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="name">Patient Age</label>
                                        <input type="text" name="page" autocomplete="off" required class="form-control" id="" placeholder="Enter here..."> 
                                    </div> 
                             </div>
                             <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="name">Patient Gender</label>
                                      <select class="form-control" name="pgender">
                                      	<option value="Male">Male</option>
                                      	<option value="Female">Female</option>
                                      </select> 
                                    </div> 
                             </div> 
                             <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="name">Docter Refer By</label>
                                        <input type="text" name="doctername" autocomplete="off" required class="form-control" id="" placeholder="Enter here..."> 
                                    </div> 
                             </div>
                             <div class="col-md-4">
                                     <div class="form-group">
                                        <label for="name">Date</label>
                                        <input type="date" name="rdate" autocomplete="off" required class="form-control" id="" placeholder="Enter here..." value="<?php echo date('Y-m-d');?>"> 
                                    </div> 
                             </div>
                           
                           
                             
                          <div class="col-md-12">
                                <div class="form-group">
                                <label for="exampleFormControlTextarea1"> Select Test Group</label>
                                         <select name="testgroup" id="testgroupid" class="form-control">
                                         	 <option value="">Select</option>
                                        <?php foreach($data as $val){?>
                                            <option value="<?=$val->id;?>"><?=$val->group_name;?></option>
                                        <?php  } ?>
                                         </select>
                            </div> 
                            </div>
                             <div class="col-md-12">
                                <table class="table table-borderless" id="showres">
                                  <thead>
                                    <tr>
                                       <th scope="col">Test Name</th>
                                      <th scope="col">Result</th>
                                      <th scope="col">Unit</th>
                                      <th scope="col">Normal</th>
                                    </tr>
                                  </thead>
                                  <tbody> 
                                  </tbody>
                                </table>
                             </div>

                        </div> 
                      
                        <button type="submit" class="btn  btn-primary btn-lg"><i class="far fa-save"></i> Save</button>
                          <a href="<?php echo base_url('admin/test/list');?>" class="btn btn-danger  btn-lg"><i class="far fa-window-close"></i> Cancel </a>
          
                     
                    </div>
                    </form>
                </div>
                <!-- Input group -->
                   
            </div>
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->
