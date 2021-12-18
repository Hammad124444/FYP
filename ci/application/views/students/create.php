<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script type="text/javascript" src="<?php base_url().'js/validation.js?v=1'; ?>" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <title>Form</title>
</head>
<body>
<div class="navbar" style="background-color:grey;display:inline-block;border:5px solid white;border-radius:15px;margin-left:30%;margin-top:2%;">
        <div class="container">
      <a href="#" class="navbar-brand" style="color:white;">Form</a>


</div>

</div> 

<div class="container" style="padding-top:15px;">
<h3>Add Organization</h3>
    <hr>
    <form method="post"id="form" name="form" action="<?php echo base_url().'index.php/Student/create'; ?>">
<div class="row" >
   
    <div class="col-sm-6">
   <div class="form-group">
       <label>Firstname</label>
       <input type="text" name="firstname" value="<?php echo set_value('firstname'); ?>" class="form-control">
       <?php  echo form_error('firstname'); ?>
       </div>
       
    
       <div class="form-group">
       <button class="btn btn-primary btn-submit">Add</button>
      
       </div>

</div> 
</div>
</form>

    </div>

    <script type="text/javascript">

<?php /*
$(document).ready(function() {
    $(".btn-submit").click(function(e){
        e.preventDefault();


      
        var firstname = $("input[name='first_name']").val();
        var surname = $("input[name='surname']").val();
        var email = $("input[name='email']").val();
        var mobilenum = $("input[name='mobilenum']").val();


        $.ajax({
            url: "/create",
            type:'POST',
            dataType: "json",
            data: {firstname:firstname, surname:surname, email:email, mobilenum:mobilenum},
            success: function(data) {
                if($.isEmptyObject(data.error)){
                    $(".print-error-msg").css('display','none');
                    alert(data.success);
                }else{
                    $(".print-error-msg").css('display','block');
                    $(".print-error-msg").html(data.error);
                }
            }
        });


    }); 


});
*/
?>

</script>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>