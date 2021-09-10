var siteurl = window.location.origin + '/pathlab';
$(document).ready(function () {

  var seletype = $('option:selected', '#urltype').val(); 
           if(seletype ==='1'){
              //custom link
              $("#casturl").show();
              $("#caturl").hide();
          }else{
             $("#casturl").hide();
             $("#caturl").show();

          }   

  //select 2 
  $('.singalselect').select2();

  $('#page_title').on('focusout', function () {
    $('#slug').val(createslug($(this).val()));
  });

  $('#editpage_title').on('focusout', function () {
    var slugold = $('#editslug').val();
    var slugArr = slugold.split('/');
    if(slugArr[1] ){
    $('#editslug').val(slugArr[0] + '/' + createslug($(this).val()));
  }
  else{
    $('#editslug').val(createslug($(this).val()));
  }
  });


  //delet categoryy
  $('.delete-page').on('click', function () {

    var id = $(this).data('id');
    var ptype = $(this).data('type');
    swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this !",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {

          $.ajax({
            url: siteurl + "/admin/category/delete",
            type: "POST",
            data: {
              id: id,
              ptype:ptype
            },
            dataType: "html",
            success: function (res) {
              if(res =='success'){
              swal({
                title: "Done!",
                text: "Deleted successfully",
                type: "success"
              }).then(function () {
                location.reload();
              });
            }else{
               swal({
                title: "Fail!",
                text: "Can't deleted",
                type: "error"
              }).then(function () {
                location.reload();
              });
            }
            }
          });

        } else {
          swal("Your imaginary file is safe!");
        }
      });
  });

  //parent id chagne

  $("#parent_id").change(function () {
    var parentid = $('option:selected', this).val();
        var catname = $("#page_title").val();
       if(catname!=''){
    var slug = createslug(catname);
 
    var res = validslug(parentid, slug);

    if (res == 'exist') {

      $("#slug").val(createslug($("#page_title").val()));
      $("#slug").focus();
      alert("This slug is already exist");
    } else {
      $("#slug").val('');
      $("#slug").val(res);

    }
  }
  });
 $("#editparent_id").change(function () {
    var parentid = $('option:selected', this).val();
    var catname = $("#editpage_title").val();
       if(catname!=''){
    var slug = createslug(catname);
 
    var res = validslug(parentid, slug,'edit');

    if (res == 'exist') {

      $("#editslug").val(createslug($("#editpage_title").val()));
      $("#editslug").focus();
      alert("This slug is already exist");
    } else {
      $("#editslug").val('');
      $("#editslug").val(res);
    }
    }
  });
  //category status
  $(".custom-control-input").change(function () {

    var id = $(this).val();
    var type = $(this).data('id');
    var tbl = $(this).data('tbl');

    $.ajax({
      url: siteurl + "/admin/category/statuschange",
      type: "POST",
      data: {
        id: id,
        type: type,
        tbl:tbl
      },
      dataType: "html",
      success: function (res) {
        if (res == 'success') {
          swal({
            title: "Done!",
            text: "Status Changed",
            type: "success"
          }).then(function () {
            location.reload();
          });
        } else {
          swal({
            title: "Oops!",
            text: "Something went wrong",
            type: "error"
          }).then(function () {
            location.reload();
          });

        }

      }
    });

  });


  function validslug(parentid, slug,type='') {
    var result = "";

    $.ajax({
      url: siteurl + "/admin/category/chcekslug",
      type: "POST",
      async: false,
      data: {
        parentid: parentid,
        slug: slug,
        type: type,
       },
      success: function (res) {
        result = res;
      }
    });
    return result
  }
// change url redirect on banner
  $("#urltype").change(function () {

          var seletype = $('option:selected', this).val(); 
           if(seletype ==='1'){
              //custom link
              $("#casturl").show();
              $("#caturl").hide();
          }else{
             $("#casturl").hide();
             $("#caturl").show();

          }  
    });
 
 $("#change_password").click(function () {

          var old_password = $("#old_password").val(); 
          var new_password = $("#new_password").val(); 
          var confirm_password = $("#confirm_password").val(); 

          if(new_password  === confirm_password){

               $.ajax({
                    url: siteurl + "/admin/setting/change_password",
                    type: "POST",
                    async: false,
                    data: {
                      old_password: old_password,
                      new_password: new_password,
                      },
                    success: function (res) {
                      if(res=="success"){
$("#respass").html(`<div class="alert alert-success alert-dismissible fade show" role="alert">
              Password change successfully
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span></button>`);
//window.location.href = url;
                      }else if(res=="notmatch"){
$("#respass").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Old password doesn't match
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span></button>`);
setTimeout(function() {
       location.reload();
      }, 2000);

                       } 
                    }
                  });

          }else{
            $("#respass").html(`<div class="alert alert-danger alert-dismissible fade show" role="alert">
              Password confirmation doesn't match.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">×</span></button>`);
          }



           if(seletype ==='1'){
              //custom link
              $("#casturl").show();
              $("#caturl").hide();
          }else{
             $("#casturl").hide();
             $("#caturl").show();

          }  
    });
 

});

var createslug = function (str) {
  var $slug = '';
  var trimmed = $.trim(str);
  $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
  replace(/-+/g, '-').
  replace(/^-|-$/g, '');
  return $slug.toLowerCase();
}