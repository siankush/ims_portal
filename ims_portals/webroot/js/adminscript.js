var csrfToken = $('meta[name="csrfToken"]').attr('content');
$.ajaxSetup({
   headers: {
     'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
   }
 });
var ak = $.noConflict();
ak(document).on("click", ".delete-user-info", function(){

var formData = $(this).attr("deleteuser-id");
var statusData = $(this).attr("status-id");

// var statusData = $(this).attr("status-id");

 swal({
 title: "Are you sure to delete this  of ?",
 text: "Delete Confirmation?",
 type: "warning",
 showCancelButton: true,
 confirmButtonColor: "#DD6B55",
 confirmButtonText: "Delete",
 closeOnConfirm: false
 },
 function() {
       ak.ajax({
           url: "http://localhost:8765/admin/Users/deleteuser",
           data: {'id':formData, 'deletestatus': statusData},
           type: "JSON",
           method: "post",
           success:function(response){
             swal("Done!","It was succesfully deleted!","success");
             var dataArr = JSON.parse(response);
             if(dataArr.status ==1 ){
               ak("#data"+formData).hide();
   
             }
           }
       }).done(function(data) {
           swal("Deleted!", "Data successfully Deleted!", "success");
         })
         .error(function(data) {
           swal("Oops", "We couldn't connect to the server!", "error");
         })
     }
 )   
 
});

// var csrfToken = $('meta[name="csrfToken"]').attr('content');
//     $.ajaxSetup({
//         headers: {
//             'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
//         }
//     });
//     var ak = $.noConflict();
    ak(document).on("click", ".delete-insurance-company", function(){
      var formData = $(this).attr("deleteinsurance-id");
      var statusData = $(this).attr("status-id");
      alert(formData+statusData);
      // alert(formData);
      // var statusData = $(this).attr("status-id");
  
        swal({
        title: "Are you sure to delete this  of ?",
        text: "Delete Confirmation?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Delete",
        closeOnConfirm: false
        },
        function() {
              ak.ajax({
                  url: "http://localhost:8765/admin/insurances-company/deleteinsurance",
                  data: {'id':formData, 'deleted': statusData},
                  type: "JSON",
                  method: "post",
                  success:function(response){
                    swal("Done!","It was succesfully deleted!","success");
                    var dataArr = JSON.parse(response);
                    if(dataArr.status ==1 ){
                      ak("#data"+formData).hide();
          
                    }
                  }
              }).done(function(data) {
                  swal("Deleted!", "Data successfully Deleted!", "success");
                })
                .error(function(data) {
                  swal("Oops", "We couldn't connect to the server!", "error");
                });
                    }
        )
  });  
