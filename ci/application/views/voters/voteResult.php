<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

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

<div class="col-sm-2">
</div>
       <div class="col-sm-8">

<label style="font-size:25px;"><b>Vote Result :</b></label>
    <table class="table table-sm">
  <thead >
    <tr class="col-sm-8" >
      <hr>
    </br>
    <div style="padding-left:40%;padding-bottom:2%;">
    <label><b></b></label>
    </div>

    <td><i class="far fa-address-card"></i></td>
    <td><b>Organization</b></td>
    <td><b>Nominees</b></td>
    <td><b>Votes</b></td>
    <!-- <td><b>Committee</b></td> -->
    <!-- <td><b>Experience</b></td> -->
     <!-- <td><b>Edit</b></td> -->
    <!-- <td><b>Delete</b></td> -->

</th>

  </thead>
  <tbody>
      <?php if (!empty($votes)) {foreach ($votes as $v) {?>
      <tr>
      <!-- <td><?php echo $v['id'] ?></td> -->
      <td><i class="fas fa-vote-yea"></i></td>
    <td>  <?php echo $v['organization']; ?></td>
          <td><?php echo $v['nominee'] ?></td>
          <!-- <td><?php echo $v['voterID'] ?></td> -->
          <td><?php //echo $v['year'] ?></td>
          <!-- <td> <a href="<?php echo base_url() . 'index.php/Teacher/edit/?n_id=' . $c['n_id'] ?>" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td> -->
          <!-- <td> <a href="<?php echo base_url() . 'index.php/Teacher/delete/?n_id=' . $c['n_id'] ?>" class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td> -->
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
      <div class="col-sm-2">
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