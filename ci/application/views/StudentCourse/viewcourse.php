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
<div class="navbar" style="background-color:grey;display:inline-block;border:5px solid white;border-radius:15px;margin-left:40%;margin-top:2%;">
        <div class="container">
      <a href="#" class="navbar-brand" style="color:white;">View Courses</a>


</div>


</div> 

<div class="container" style="padding-top:20px;">

<div class="row">

<div class="col-sm-2">

<a class="btn btn-success"  style="margin-left:50%;" href=<?php echo base_url().'index.php/Student/index'?> >Back</a>
</div>
    <div class="col-sm-8">
    
  
        <form action="<?php echo base_url().'index.php/StudentCourses/view' ?>"  method="post">
    <table class="table table-sm " style="background-color:Beige;margin-left:;margin-top:;">
  
   

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
      <?php    foreach($data as $row) { ?>
      <tr>
      <!-- <td><input type="checkbox"  name="check[]" value="<?php// echo $row->c_id ?>"></td> -->
      
          <td><?php echo $row->p_id  ?></td>
         
          <td><?php echo $row->position  ?></td>
          <input class="btn btn-success" type="hidden" name="c_id" value="<?php echo $row->p_id;?>" >
          <input class="btn btn-success" type="hidden" name="s_id" value="<?php echo $o_id;?>" >
          <td> <a class="btn btn-danger" type="submit" name="submit" href=<?php echo base_url().'index.php/StudentCourses/delete?p_id='.$row->p_id.'&o_id='.$o_id;  ?> >Remove</a></td>
      </tr>
  
        <tr> 
           
        </tr>
<?php }  ?>   
  </tbody>
</table>

    </div>
    
    <div class="col-sm-2">
    <input class="btn btn-success" type="hidden" name="p_id" value="<?php echo $p_id;?>" >
   
    <a class="btn btn-success" style="margin-left:0%;" href=<?php echo base_url().'index.php/StudentCourses/add?p_id='.$o_id;?> >Add Courses</a>
   
    </div>
    </form>
</div>
  

    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>