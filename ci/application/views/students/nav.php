<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <title>PPLA Voting System</title>
    <style>
      body{
        color: black;
        
    background-color: lightyellow;
      }
      </style>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="display:block;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand navbar-text pull-left" href="dashboard.php"  style="font-size:20px;font-weight:bold;margin-right:350px; padding-left:30px;">PPLA Voting-System</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <a href="<?php echo base_url().'index.php/User/dashboard/'; ?>"><i class="fa fa-home" style="color:white;font-size:30px;margin-left:30%;" aria-hidden="true"></i></a>
     <li class="nav-item active" style="display:inline-block;margin-left:20px;">
     
        <a class="navbar-brand navbar-text pull-left ml-3"   href="<?php echo base_url().'index.php/Organizations/index/'?>">  <i class="fa fa-plus-circle" aria-hidden="true"></i> Organizations <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" style="display:inline-block;margin-left:20px;">
     
     <a class="navbar-brand navbar-text pull-left"   href="<?php echo base_url().'index.php/Positions/index/'?>">  <i class="fa fa-plus-circle" aria-hidden="true"></i> Positions <span class="sr-only">(current)</span></a>
   </li>
      <li class="nav-item active" style="display:inline-block;margin-left:20px;">
     
     <a class="navbar-brand navbar-text pull-left"   href="<?php echo base_url().'index.php/Nominee/index/'?>"> <i class="fas fa-user-circle"></i>  Nominees <span class="sr-only">(current)</span></a>
   </li>
   <li class="nav-item active" style="display:inline-block;margin-left:20px;">
     
     <a class="navbar-brand navbar-text pull-left"   href="<?php echo base_url().'index.php/Voter/index/'?>"> <i class="fas fa-vote-yea"  aria-hidden="true"></i> Voters <span class="sr-only">(current)</span></a>
   </li>
   <li class="nav-item active" style="display:inline-block;margin-left:20px;">
     
     <a class="navbar-brand navbar-text pull-left"   href="<?php echo base_url().'index.php/Votes/voteResult/'?>"> <i class="fas fa-vote-yea"  aria-hidden="true"></i> Vote Result <span class="sr-only">(current)</span></a>
   </li>
   <li class="nav-item active" style="display:inline-block;margin-left:20px;">
     
     <a class="navbar-brand navbar-text pull-left"   href="<?php echo base_url().'index.php/User/logout/'?>"> <i class="fas fa-sign-out-alt"></i></i> Log Out <span class="sr-only">(current)</span></a>
   </li>
     
      
    </ul>
   
  </div>
</nav>

<!-- <div class="container mt-3">
    <div class="row">
        <div class="col-md-12 jumbotron">
            <div class="text-center">
              
                <p>
                    <h1><b>Voting System</b></h1><br />
                <button class="btn btn-info">About the System</button>
                </p>
            </div>
        </div>
    </div>
</div>  -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>