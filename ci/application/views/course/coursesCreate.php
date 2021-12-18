<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="<?php base_url().'js/validation.js?v=1'; ?>" ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
    <style>
          body{
        background-color:lightyellow;
      }
           .footer
{
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:lightgrey;
   color: grey;
   font-weight:bold;
   text-align:center;

}
        </style>

</head>
<body>
<div class="navbar" style="background-color:grey;display:inline-block;border:5px solid white;border-radius:15px;margin-left:30%;margin-top:2%;">
        <div class="container">
      <a href="#" class="navbar-brand" style="color:white;">PPLA Voting System</a>


</div>      


</div> 

<div class="container" style="padding-top:20px;">
<h3>Create Courses</h3>
    <hr>
    <form method="post" id="form" name="form" action="<?php echo base_url().'index.php/Courses/create'; ?>">
<div class="row" >
   
    <div class="col-sm-6">
   <div class="form-group">
       <label>Position</label>
       <input type="text" name="position" value="<?php echo set_value('position'); ?>" class="form-control">
       <?php  echo form_error('position'); ?>
       </div>
      
      
       <div class="form-group">
       <button class="btn btn-primary">Create</button>
       <a href="<?php echo base_url().'index.php/Courses/index'; ?>" class="btn btn-secondary">Cancel</a>
       </div>

</div> 
</div>
</form>

    </div>
    <nav>

<div class="footer  navbar-text navbar-expand-lg navbar-dark bg-dark">
  <p>@Copyright-2021-PPLA</p>
</div>
</nav>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>