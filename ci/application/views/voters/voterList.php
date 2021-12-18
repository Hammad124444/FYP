<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>PPLA Voting System</title>
    <style>
      body{
        color: black;

    background-color: lightyellow;
      }
      tr {
        background-color:white;
        color:black;
      }
      tr td.id {
        background-color:aquamarine;

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

<div class="container mt-5">

<div class="row">

<div class="col-sm-4">
<form method="post"  name="form" action="<?php echo base_url() . 'index.php/Voter/create'; ?>">



      <div class="form-group">
      <label><b>Add Voter :</b></label>
          <input type="hidden" name="v_id" value="<?php echo set_value('v_id'); ?>" class="form-control">
          <input type="text" name="voter" value="<?php echo set_value('voter'); ?>" class="form-control">
          <?php echo form_error('voter'); ?>

          </div>
<!-- 
          <hr> -->
          <div class="form-group">
          <label><b>Department :</b></label>
    <select name="course" style="width:100%;padding-left:25%;border:1px solid lightgrey;border-radius:5px;">
<option value="">****Select Department*****</option>
<?php
$c = array('ENG-DPT', 'STAT-DPT', 'URDU-DPT', 'MATH-DPT', 'FINANCE-DPT', 'SOCIOLOGY-DPT', 'CS-DPT', 'ARTS-DPT');
for ($i = 0; $i <= 7; $i++) {
    echo "<option>" . $c[$i] . "</option>";
}

?>

</select>
</div>
     <!-- <hr> -->
     <div class="form-group">
     <label><b>Role :</b></label>
          <select name="year" style="width:100%;padding-left:25%;border:1px solid lightgrey;border-radius:5px;">
          <option value="">****Select Role*****</option>
             <?php
$y = 
array('LECTURER','RESEARCHER','SCHOLARS','PROFESSOR',
'ASSOCIATE-PROF','ASSISTANT-PROF','ACADEMIC-STAFF','ACCOUNTS-STAFF');
for ($i = 0; $i <= 7; $i++) {
    echo "<option>" . $y[$i] . "</option>";
}

 ?>

    </select> 
</div>
     <!-- <hr> -->
     <div class="form-group">
      <label><b>Voter ID :</b></label>
      
          <input type="text" name="voterID" value="<?php echo set_value('voterID'); ?>" class="form-control">
          <?php echo form_error('voterID'); ?>

          </div>


          <div class="form-group">
          <button class="btn btn-info btn-submit">Submit</button>
       </div>

       </div>
       </form>

       <div class="col-sm-8">

<label><h5>List Of Voters</h5></label>
    <table class="table table-sm">
  <thead >
    <tr class="col-sm-8" >
      <hr>
    </br>
    <div style="padding-left:40%;padding-bottom:2%;">
    <label><b> Voters :</b></label>
    </div>

    <td><b>ID</b></td>
    <td><b>Voter</b></td>
    <td><b>Department</b></td>
    <td><b>Role</b></td>
    <td><b>VoterID</b></td>
     <td><b>Edit</b></td>
    <td><b>Delete</b></td>

</th>

  </thead>
  <tbody>
      <?php if (!empty($voters)) {foreach ($voters as $v) {?>
      <tr>
      <td><?php echo $v['v_id'] ?></td>
    
    
          <td><?php echo $v['voter'] ?></td>
          <td><?php echo $v['course'] ?></td>
          <td><?php echo $v['year'] ?></td>
          <td>  <?php echo $v['voterID']; ?></td>
          <td> <a href="<?php echo base_url() . 'index.php/Voter/edit/?v_id=' . $v['v_id'] ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
          <td> <a href="<?php echo base_url() . 'index.php/Voter/delete/?v_id=' . $v['v_id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
      </tr>
      <?php }} else {?>
        <tr>
            <td class="colspan-5 " style="font-weight:bold;"> Records not found </td>
        </tr>
<?php }?>
  </tbody>
</table>
        </div>

</div>


      </div>
      <nav>

<div class="footer  navbar-text navbar-expand-lg navbar-dark bg-dark">
  <p>@Copyright-2021-PPLA</p>
</div>
</nav>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/v4-shims.min.js" integrity="sha512-1ND726aZWs77iIUxmOoCUGluOmCT9apImcOVOcDCOSVAUxk3ZSJcuGsHoJ+i4wIOhXieZZx6rY9s6i5xEy1RPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
</body>
</html>