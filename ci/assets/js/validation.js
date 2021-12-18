$(document).ready(function(){
      $("#form").validate({
    rules: {
      name: {
        required: true,
      },
      surname: {
        required: true,
      },
      firstname: {
        required: true,
      },  
      subject: {
        required: true,
      },
      code: {
        required: true,
      },
      hours: {
        required: true,
      },
      timing: {
        required: true,
      },
      email: {
        required: true,
        maxlength: 50,
        email: true,
      },
      mobilenum: {
        required: true,
        maxlength: 50,
      }, 
      date: {
        required: true,
        maxlength: 50,
      }, 
        month: {
        required: true,
        maxlength: 50,
      },
      year: {
        required: true,
        maxlength: 50,
      },  
     
    },
    messages: {
      name: {
        required: "Please Enter Name",
      },
      firstname: {
        required: "Please Enter Name",
      },
      subject: {
        required: "Please Enter Subject",
      },
      code: {
        required: "Please Enter Course",
      },
      hours: {
        required: "Please Enter hours",
      },
      timing: {
        required: "Please Enter Timing",
      },
      surname: {
        required: "Please Enter Surname",
      },
      
      email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
        },      
     mobilenum: {
        required: "Please enter mobilenum",
      },
      submitHandler: function(form) {
        $('#form').html('Sending..');
      }   
    }
  })
});