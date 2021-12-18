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
        background-color:;

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
<form method="post"  name="form" action="<?php echo base_url() . 'index.php/Teacher/create'; ?>">


<label><b>Organization :</b></label>

       <!-- <hr> -->
       <div class="form-group">
<select  name="organization" style="width:100%;padding-left:20%;border:1px solid lightgrey;border-radius:5px;" >
<option value="">****Select Organization*****</option>
<option value=""><?php echo $organization = $this->session->userdata('organization'); ?></option>
</select>
</div>

<!-- <hr> -->
<div class="form-group">
<label><b>Position :</b></label>
      <select name="position" style="width:100%;padding-left:20%;border:1px solid lightgrey;border-radius:5px;">
      <option value="">****Select Position*****</option>
         <?php  foreach ($courses as $c) {

    if ($c['position'] !== '') {

        echo "<option>" . $c['position'] . "</option>";

    }
} 
?>
   </select>
</div>
       <!-- <hr> -->
      <div class="form-group">
      <label><b>Add Nominee :</b></label>
          <input type="hidden" name="n_id" value="<?php echo set_value('n_id'); ?>" class="form-control">
          <input type="text" name="nominee" value="<?php echo set_value('nominee'); ?>" class="form-control">
          <?php echo form_error('nominee'); ?>

          </div>

          <!-- <hr> -->
          <div class="form-group">
          <label><b>Committee :</b></label>
          <!-- <select name="course" style="padding:0px 23%;border:1px solid lightGrey;border-radius:5px;">
          <option value=""><?php echo "*****Select Course*****"; ?></option>
             <?php
// $c = array('BS-SE', 'BS-CS', 'BS-IT');
// for ($i = 0; $i <= 2; $i++) {
//     echo "<option>" . $c[$i] . "</option>";
// }

?>

     </select> -->

    <select name="course" style="width:100%;padding-left:25%;border:1px solid lightgrey;border-radius:5px;">
<option value="">*****Select Committee*****</option>
<?php
$m = array('Human Resource Committee','Audit Committee','Nomination Committee',
'Procurement Committee','Enterprise Risk Committee','Strategy and Finance Committee');
for ($i = 0; $i <= 5; $i++) {
    echo "<option>" . $m[$i] . "</option>";
}

?>

</select>
</div>
     <!-- <hr> -->
     <div class="form-group">
     <label><b>Year :</b></label>
          <select name="year" style="width:100%;padding-left:25%;border:1px solid lightgrey;border-radius:5px;">
          <option value="">****Select Experience*****</option>
             <?php
$y = array('I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII','IX','X');
for ($i = 0; $i <= 9; $i++) {
    echo "<option>" . $y[$i] . "</option>";
}

 ?>

    </select> 
</div>
     <!-- <hr> -->


          <div class="form-group">
          <button class="btn btn-info btn-submit">Submit</button>
       </div>

       </div>
       </form>

       <div class="col-sm-8">

<label><h5>List Of Nominees</h5></label>
    <table class="table table-sm">
  <thead >
    <tr class="col-sm-8" >
      <hr>
    </br>
    <div style="padding-left:40%;padding-bottom:2%;">
    <label><b>Nominees</b></label>
    </div>

    <td><b>ID</b></td>
    <td><b>Organization</b></td>
    <td><b>Position</b></td>
    <td><b>Nominees</b></td>
    <td><b>Committee</b></td>
    <td><b>Experience</b></td>
     <td><b>Edit</b></td>
    <td><b>Delete</b></td>

</th>

  </thead>
  <tbody>
      <?php if (!empty($teacher)) {foreach ($teacher as $c) {?>
      <tr>
      <td><?php echo $c['n_id'] ?></td>
    <td><?php echo $this->session->userdata('organization'); ?></td>
    <td>  <?php echo $c['position']; ?></td>
          <td><?php echo $c['nominee'] ?></td>
          <td><?php echo $c['course'] ?></td>
          <td><?php echo $c['year'] ?></td>
          <td> <a href="<?php echo base_url() . 'index.php/Teacher/edit/?n_id=' . $c['n_id'] ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
          <td> <a href="<?php echo base_url() . 'index.php/Teacher/delete/?n_id=' . $c['n_id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
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