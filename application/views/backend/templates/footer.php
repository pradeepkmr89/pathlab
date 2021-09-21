
    <div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="gridModalLabel">Change Password</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <span id="respass"></span>
                                         <div class="row"> 
                                <div class="col-md-12">
                                     <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Old Password</label>
                                        <input type="password" id="old_password" autocomplete="off" required class="form-control" placeholder="Enter here..."  >
                                    </div> 
                             </div> 
                             <div class="col-md-12">
                                     <div class="form-group">
                                        <label for="exampleFormControlTextarea1">New Password</label>
                                        <input type="password" id="new_password" autocomplete="off" required class="form-control" placeholder="Enter here..."  >
                                    </div> 
                             </div> 
                             <div class="col-md-12">
                                     <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Confirm Password</label>
                                        <input type="password" id="confirm_password" autocomplete="off" required class="form-control" placeholder="Enter here..."  >
                                    </div> 
                             </div> 
                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn  btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" id="change_password" class="btn  btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
  
    </div>
</section>
<!-- [ Main Content ] end -->

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <!-- Required Js -->
    <script src="<?php echo base_url('assets/backend/js/vendor-all.min.js') ?>"></script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url('assets/backend/js/plugins/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/ripple.js') ?>"></script>
    <script src="<?php echo base_url('assets/backend/js/pcoded.min.js') ?>"></script>

<!-- Apex Chart -->
<script src="<?php echo base_url('assets/backend/js/pages/dashboard-main.js') ?>assets/js/plugins/apexcharts.min.js"></script>
<!-- select 2 -->
 <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<!-- /select 2 -->

<!-- custom-chart js -->
<script src="<?php echo base_url('assets/backend/js/pages/dashboard-main.js') ?>"></script>
<script src="<?php echo base_url('assets/backend/js/adminjs.js') ?>"></script>
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


 <script> 
    CKEDITOR.replace( 'editor1' );

    $(document).ready(function() {
    $('#example').DataTable();
} );
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

    $('#testgroupid').on('change', function () {
       $('#showres tbody').empty();
        var siteurl = window.location.origin + '/pathlab';
        var grpid = $(this).val();
         $.ajax({
          url: siteurl + "/admin/report/gettest",
          type: "POST",
          async: false,
           dataType: 'json',
          data: {
            grpid: grpid, 
           },
          success: function (data) {

          for (var i=0; i<data.length; i++) {
            var row = $('<tr><td>' + data[i].title+ '</td><td><input type="hidden" name="testname[]" class="form-control"  value="' + data[i].title + '"> <input type="hidden" name="testid[]" class="form-control" value="' + data[i].id + '"> <input type="text" name="result[]" class="form-control"></td><td>' + data[i].normal + '</td><td>' + data[i].unit + '</td></tr>');
            $('#showres').append(row);
        }

        }
     });
  });

</script>

</body>

</html>