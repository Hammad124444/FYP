<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Form</title>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
      <a href="#" class="navbar-brand">User List</a>


</div>


</div> 

<div class="container" style="padding-top:20px;">

<div class="row">
    <div class="col-sm-10">
    <table class="table table-sm table-light">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Mobilenum</th>
      <th scope="col">Date</th>
      <th scope="col">Month</th>
      <th scope="col">Year</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      
    </tr>

  </thead>
  <tbody>
      <?php if(!empty($users)) {  foreach($users as $user) { ?>
      <tr>
          <td><?php echo $user['id']  ?></td>
          <td><?php echo $user['Firstname']  ?></td>
          <td><?php echo $user['Lastname']  ?></td>
          <td><?php echo $user['email']  ?></td>
          <td><?php echo $user['Mobilenum']  ?></td>
          <td><?php echo $user['Date']  ?></td>
          <td><?php echo $user['Month']  ?></td>
          <td><?php echo $user['Year']  ?></td>
          <td> <a href="<?php echo base_url().'index.php/Student/edit/'.$user['id'] ?>" class="btn btn-primary">Edit</a></td>
          <td> <a href="<?php  echo base_url().'index.php/Student/delete/'.$user['id'] ?>" class="btn btn-danger">Delete</a></td>
      </tr>
      <?php  }} else { ?>
        <tr> 
            <td class="colspan-5 " style="font-weight:bold;"> Records not found </td>
        </tr>
<?php }  ?>   
  </tbody>
</table>
    </div>

    <div class="col-sm-2" > 

    <a href="<?php echo base_url().'index.php/Student/create' ?>" style="font-size:20px;border:3px solid grey;border-radius:15px;padding:5px;color:black;;">Create</a>
    </div>
</div>
  

    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>