<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/custom.css">
  <title>Document</title>
  <style>
    body {
      color: black;
      margin-top: 0px;
      background-color: lightyellow;
      background-image: url("https://images.unsplash.com/photo-1562774053-701939374585?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Y29sbGVnZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80");
      background-repeat: no-repeat;
      background-size: cover;
    }

    .contain {
      margin-top: 800px;
      background-color: blue;
    }

    .gallery {
      margin-bottom: 100px;

    }

    .footer {
      position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: lightgrey;
      color: grey;
      font-weight: bold;
      text-align: center;

    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="display:block;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand navbar-text pull-left" href="#" style="font-size:20px;font-weight:bold;margin-right:350px; padding-left:30px;">PPLA Voting-System</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
        <a href="<?php echo base_url() . 'index.php/User/dashboard/'; ?>"><i class="fa fa-home" style="color:grey;font-size:30px;margin-left:30%;" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item active" style="display:inline-block;margin-left:20px;">

          <a class="navbar-brand navbar-text pull-left ml-3"  href="<?php echo base_url() . 'index.php/Organizations/index/' ?>"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Organizations <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" style="display:inline-block;margin-left:20px;">

          <a class="navbar-brand navbar-text pull-left" href="<?php echo base_url() . 'index.php/Positions/index/' ?>"> <i class="fa fa-plus-circle" aria-hidden="true"></i> Positions <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" style="display:inline-block;margin-left:20px;">

          <a class="navbar-brand navbar-text pull-left" href="<?php echo base_url() . 'index.php/Nominee/index/' ?>"> <i class="fas fa-user-circle"></i> Nominees <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" style="display:inline-block;margin-left:20px;">

          <a class="navbar-brand navbar-text pull-left" href="<?php echo base_url() . 'index.php/Voter/index/' ?>"> <i class="fas fa-vote-yea" aria-hidden="true"></i> Voters <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" style="display:inline-block;margin-left:20px;">

          <a class="navbar-brand navbar-text pull-left" href="<?php echo base_url() . 'index.php/Votes/voteResult/' ?>"> <i class="fas fa-vote-yea" aria-hidden="true"></i> Vote Result <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active" style="display:inline-block;margin-left:20px;">

          <a class="navbar-brand navbar-text pull-left" href="<?php echo base_url() . 'index.php/User/logout/' ?>"> <i class="fas fa-sign-out-alt"></i></i> Log Out <span class="sr-only">(current)</span></a>
        </li>


      </ul>

    </div>
  </nav>

  <div class="container " style=" background-color:transparent; margin-top: 150px;  margin-bottom: 150px; padding-top:50px;
  padding-bottom:50px;">
    <div class="row">
      <div class="col-md-12 ">
        <div class="text-center">

          <p>
          <h1><b>Voting System</b></h1><br />
          <button class="btn btn-info " data-toggle="modal" data-target="#exampleModalCenter">About the System</button>
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">About the system</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p class="text-justify">According to details, teachers of more than 16,000 government colleges across the province exercised their franchise in the Punjab Professors and Lecturers Association elections. The election was contested between four groups: And there was competition between the new teachers.

                    President candidate Chaudhry Ghulam Mustafa and General Secretary candidate Dr. Sahibzada Ahmed Nadeem on behalf of Teachers Union, Presidential candidate Tariq Kaleem and General Secretary Dr. Ata-ur-Rehman on behalf of Teachers Union, Presidential candidate Nadeem Ahmed Ashrafi on behalf of New Teachers and General Secretary Candidate Dr. Tahir Aziz, Young Lecturers Association Presidential Candidate Zafar Iqbal and General Secretary

                    PPLA elections are held every three years, this year two years after the deadline. In the previous round, the PPLA was represented by the Ittehad Teachers Group. The final results will be announced on Thursday.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          </p>
        </div>
      </div>
    </div>
  </div>
  <nav>

    <div class="footer  navbar-text navbar-expand-lg navbar-dark bg-dark">
      <p>@Copyright-2021-PPLA</p>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" data-auto-replace-svg="nest"></script>
</body>

</html>