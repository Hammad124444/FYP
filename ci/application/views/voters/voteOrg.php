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
    body {
      color: black;
      background-image: url("../../assets/images/arnaud-jaegers-IBWJsMObnnU-unsplash.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }

    tr {
      background-color: white;
      color: black;
    }

    tr td.id {
      background-color: aquamarine;

    }

    select {
      appearance: none;
      background-color: white;
      border: black;
      color: black;
      padding: 0 1em 0 0;
      margin: 0;
      width: 100%;
      font-family: inherit;
      font-size: inherit;
      cursor: inherit;
      line-height: inherit;
      outline: none;
    }

    select::-ms-expand {
      display: none;
    }

    :root {
      --select-border: #777;
      --select-focus: blue;
      --select-arrow: var(--select-border);
    }

    .select {
      border-radius: 0.25em;
      padding: 0.25em 0.5em;
      font-size: 1.25rem;
      cursor: pointer;
      line-height: 1.7;
    }

    .pull-right:hover {
      color: white;
      background-color: transparent;
      cursor: pointer;
    }

    b {
      font-size: 20px;
    }

    button {
      padding: 10px 10px;
      justify-content: center;
      align-items: center;
      background-color: transparent;
      transition: 1s;
      border: none;
      overflow: hidden;
      position: relative;
    }

    button:hover {
      background: var(--clr);
      box-shadow: 0 0 10px var(--clr),
        0 0 30px var(--clr),
        0 0 60px var(--clr),
        0 0 100px var(--clr);
    }

    /* button::before {
      content: "";
      position: absolute;
      width:40px;
      height: 1200px;
      background: var(--clr);
      transition: 4s;
      animation: animate 5s linear infinite;
      overflow: hidden;
      animation-delay: calc(0.33s * var(--i));
    } */

    button:hover::before {
      width: 120%;
    }

    button:hover::after {
      background: var(--clr);
    }

    button::after {
      content: "";
      position: absolute;
      inset: 4px;
      background:dimgray;
      transition: 0.5s;
    }

    span {
      position: relative;
      z-index: 1;
      font-size: 25px;
      color: white !important;
      opacity: 0.5;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    button:hover span {
      opacity: 1;
    }

    @keyframes animate {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
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

    .container-fluid {
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="container-fluid bg-dark">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand navbar-text pull-left" href="#" style="font-size:20px;font-style:Italic;font-weight:bold;">PPLA Voting-System</a>
          <li class="nav-item active" style="display:inline-block;margin-left:78%;">

            <a class="navbar-brand navbar-text pull-right" href="<?php echo base_url() . 'index.php/Voter/logout/' ?>"> <i class="fas fa-sign-out-alt"></i></i> Log Out <span class="sr-only">(current)</span></a>
          </li>
        </div>
      </nav>
    </div>
  </div>
  <div class="container mt-5">

    <div class="row">

      <div class="col-sm-3">
        <hr>
      </div>
      <div class="col-sm-6 mt-5">
        <hr>
        <form method="post" action="<?php echo base_url() . 'index.php/Votes/voted'; ?>">


          <label><b>Organization :</b></label>

          <!-- <hr> -->
          <div class="form-group">
            <div class="select">
              <select name="organization" style="width:100%;padding-left:20%;border:1px solid lightgrey;border-radius:5px;">
                <option value="">****Select Organization*****</option>
                <option value=""><?php echo $organization = $this->session->userdata('organization'); ?></option>
              </select>
            </div>
          </div>

          <!-- <hr> -->
          <div class="form-group">
            <label><b>Nominees :</b></label>
            <div class="select">
              <select name="nominee" style="width:100%;padding-left:20%;border:1px solid lightgrey;border-radius:5px;">
                <option value="">**** Nominee*****</option>
                <?php foreach ($nominee as $c) {

                  if ($c['nominee'] !== '') {

                    echo "<option>" . $c['nominee'] . "</option>";
                  }
                }
                ?>
              </select>
            </div>
          </div>

          <div class="form-group text-center">
            <button style="--clr:#ff22bb; --i:0;"> <span> Your Vote </span></button>
          </div>
        </form>
      </div>
      <div class="col-sm-3">
        <hr>
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