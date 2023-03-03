$(document).on("click", ".delete-user", function(){
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
     $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
        }
      });
    var formData = $(this).attr("deleteuser-id");
    var statusData = $(this).attr("status-id");
    // alert(formData+statusData);
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
            $.ajax({
                url: "http://localhost:8765/ContactsListing/delete",
                data: {'id':formData, 'deletestatus': statusData},
                type: "JSON",
                method: "post",
                success:function(response){
                  swal("Done!","It was succesfully deleted!","success");
                  var dataArr = JSON.parse(response);
                  if(dataArr.status ==1 ){
                    $("#data"+formData).hide();
        
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

$(document).on("click", ".edit-user", function(){
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
    }
  });
  
  var formData = $(this).attr("edituser-id");
  
  
  $.ajax({
    url: "http://localhost:8765/ContactsListing/getuser",
    method: "get",
    data: {'id':formData},
    type: "JSON",
    success:function(response){

      contactsListing = $.parseJSON(response);
             
                $('#name').val(contactsListing['name']);
                // $('#brand').val(car['brand']['name']);
                $('#email').val(contactsListing['email']);
                $('#phone').val(contactsListing['phone']);
                $('#address').val(contactsListing['address']);
                $('#contactlist_id').val(contactsListing['id']);

    }
  });
});

// $("#formid").validate({
  
//   rules: {
//       name:{
//           required: true,
//           minlength : 3,
//           text: true
//       },

//       email: {
//           required : true,
//           email: true,
//       }, 

//       phone: {
//            required: true,
//            minlength : 10,
//            number : true,
//       },
//       address: {
//           required : true,
//       },
//       // // image: {
//       // //   required: true,
//       // // },

      
     
//   },
//   messages: {
//       name: {
//           required: "please enter name",
//           minlength: "length atleast 3 characters",
//           text: "please enter alphabets",
//       },

//       email: {
//           required : "please enter email",
//           email: "please enter valid email",
       
//       },

//       phone :{
//           required: "please enter phone",
//           minlength: "phone should 10 digit",
//           number : "please enter number",
//       },
//       address :{
//         required: "please enter address",
//       },
      
//   }, 


// submitHandler: function (e){

$(document).on("click", ".edit-data", function(e){
  e.preventDefault();
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
    }
  });
  // var formData = new FormData(form);
   var formData = $("#formid").serialize();
   
  //  alert(formData);
  $.ajax({
 
    url: "http://localhost:8765/ContactsListing/edituser",
    type: "JSON",
    method: "POST",
    data: formData,
    success: function (response) {
  
       var data = JSON.parse(response);
      // alert(data);
      
         if (data['status'] == 0) {
              alert(data['message']);
          } else {
           swal("Good job!", "The contactlisting has been saved!", "success");
 
            }
             $('#change-status').load('/ContactsListing/userlisting #change-status');
               $('#myModal').hide();
               $('.modal-backdrop').remove();
 
                 }
                });
                // return false;
          
 });
