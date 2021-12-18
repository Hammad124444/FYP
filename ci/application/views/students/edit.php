<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 
    <script type="text/javascript" src="<?php base_url().'js/validation.js?v=1'; ?>" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <title>PPLA Voting System</title>
    <style>
         body{
        color: black;
    
    background-color: lightyellow;
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


<div class="container mt-5" style="padding-top:20px;">
<h3>Update Organizationt</h3>
    <hr>
    <form method="post" id="form" name="form"  action="<?php echo base_url().'index.php/Organizations/edit?o_id='.$organizations['o_id']; ?>">
<div class="row" >
   
    <div class="col-sm-6">
   <div class="form-group">
       <label>Organization</label>
       <input type="hidden" name="o_id" value="<?php echo set_value('o_id',$organizations['o_id']); ?>" class="form-control">
       <input type="text" name="org_name" value="<?php echo set_value('org_name',$organizations['org_name']); ?>" class="form-control">
       <?php  //echo form_error('name'); ?>
       </div>
      
              

       <div class="form-group">
       <button class="btn btn-primary">Update</button>
       <a href="<?php echo base_url().'index.php/Student/index'; ?>" class="btn btn-secondary">Cancel</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>