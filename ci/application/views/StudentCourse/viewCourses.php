<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title></title>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
      <a href="#" class="navbar-brand">View Courses</a>


</div>


</div> 

<div class="container" style="padding-top:20px;">

<div class="row">
    <div class="col-sm-10">
    <table class="table table-sm " style="background-color:Beige;">
  <thead>
    <tr style="background-color:DarkGrey;">
    <th scope="col">C_ID</th>
    <th scope="col">Course ID</th>
      <th scope="col"> Course Name</th>
     <th scope="col"> Course Code</th>
    
      <th scope="col"> Course Hours</th>
      <th scope="col"> Timing</th>
     
      
    </tr>

  </thead>
  <tbody>
      <?php if(!empty($courses)) {  foreach($courses as $c) { ?>
      <tr>
        
          <td><?php echo $c['id']  ?></td>
          <td><?php echo $c['name']  ?></td>
         
          <td><?php echo $c['code']  ?></td>
          
          
          <td><?php echo $c['hours']  ?></td>
          <td><?php echo $c['timing']  ?></td>
          
      </tr>
      <?php  }} else { ?>
        <tr> 
            <td class="colspan-5 " style="font-weight:bold;"> Records not found </td>
        </tr>
<?php }  ?>   
  </tbody>
</table>
    </div>

</div>


    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>