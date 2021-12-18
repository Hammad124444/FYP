
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script type="text/javascript" src="<?php echo base_url().'assets/js/validation.js?v=2' ?>" ></script> -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>


    <title>PPLA Voting System</title>
    <style>
    
      body {
    color: black;
    margin-top: 0px;
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
/* .adminlogo{
 
  font-size:30px;
  decoration:none;
  margin-left:5px;
  background-color:lightyellow;
  border:2px solid black;
  border-radius:10px;
  padding:5px;

} */


      </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand navbar-text pull-left" href="#"  style="font-size:20px;font-style:Italic;font-weight:bold;">PPLA Voting-System</a>
   


   
    
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
    <li class="active"><span class="glyphicon glyphicon-home"></span></a></li>
      <li class="nav-item active navbar-toggler">
        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item navbar-toggler">
        <a class="nav-link" href="#"></a>
      </li>
       <li class="nav-item navbar-toggler">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item navbar-toggler">
        <a class="nav-link disabled" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0"   method="post" action="<?php echo base_url().'index.php/User/auth'; ?>">
    <!-- <a style="color:white; decoration:none;margin-right:10px;font-size:30px;"> <i class="fas fa-home"></i></a> -->
      <input class="form-control mr-sm-2 errormsg"  type="text"  name="name" placeholder="Username" aria-label="Search">
      <input class="form-control mr-sm-2 errormsg" type="email" name="email" placeholder="Password" aria-label="Search">
      <button class="btn btn-outline-info  my-2 my-sm-0" type="<?php //submit ?>">Admin</button>
      <!-- <a class="adminlogo"><i class="fas fa-user-shield"></i> -->
    </form>
  </div>
</nav>

</div> 

<div class="container mt-5" style="padding-top:20px;">

    
    <form method="post" id="form" name="form" action="<?php echo base_url().'index.php/Voter/auth'; ?>">
<div class="row" >
    <div class="col-sm-3"></div>
   
    <div class="col-sm-6">
   <div class="form-group">
   <h3>Voter Sign-in</h3>
   <hr>
       <label style="font-weight:bold;">Voter ID</label>
       <input type="text" name="voterID" value="<?php echo set_value('voterID'); ?>" class="form-control">
       <?php  echo form_error('voterID'); ?>
       </div>
      
       
      
                </div> 
</div>
       <div class="form-group text-center mt-5">
       <button class="btn btn-primary btn submit" id="send_form" type="submit" >Sign In</button>
       
     


       </div>

</div> 
</div>
<div class="col-sm-3"></div>
</form>

</div>  
<nav>

<div class="footer  navbar-text navbar-expand-lg navbar-dark bg-dark">
  <p>@Copyright-2021-PPLA</p>
</div>
</nav>

<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>