
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
  </div>
  <li class="nav-item active" style="display:inline-block;margin-left:20px;">
     
     <a class="navbar-brand navbar-text pull-left"   href="<?php echo base_url().'index.php/Voter/logout/'?>"> <i class="fas fa-sign-out-alt"></i></i> Log Out <span class="sr-only">(current)</span></a>
   </li>
</nav>
   
<div class="container" style="padding-top:10%;">

    
    <form method="post" id="form" name="form" action="<?php echo base_url().'index.php/Voter/votePose'; ?>">
<div class="row" >
    <div class="col-sm-4">
    <div class="form-group">
 <h3>Vote Nominee</h3>
 <hr>
<!-- <hr> -->
<div class="form-group">
<label><b>Nominees :</b></label>
      <select name="nominee" style="width:100%;padding-left:20%;border:1px solid lightgrey;border-radius:5px;">
      <option value="">****Nominee*****</option>
         <?php  foreach ($nominee as $n) {

    if ($n['nominee'] !== '') {

        echo "<option>" . $n['nominee'] . "</option>";

    }
} 
?>
   </select>
<button class="btn btn-primary btn submit form-group text-center mt-3" id="send_form" type="submit" >Submit</button>
</div>
    
   
</div>
    </div>
   
    <div class="col-sm-8">
  
</div>
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