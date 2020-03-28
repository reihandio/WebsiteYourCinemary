<!-- <?php



?> -->


<!DOCTYPE html>
<html>

 <!--Import Google Icon Font-->
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!--Import materialize.css-->
 <link type="text/css" rel="stylesheet" href="<?= base_url('assets/'); ?>css/materialize.css"  media="screen,projection"/>


<!-- CSS -->
    <style>
        body{
            background-image:url(assets/img/login.jpg);
            background-size: cover;
            color:#fff; 
        }

        .presets{
            margin-top: 100px;
        }

        .presets .card-panel{
            background: rgba(0, 0, 0, .6)
        }

        .presets label{
            font-size: 16px;
            color:#ccc;
        }

        .presets input{
            font-size: 20px;
            color: #fff;
        }
    </style>

<head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  media="screen,projection"/>

      <!-- CSS SAYA -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="Icon" href="assets/img/logo/logoitem.PNG">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>Your Cinemary | Taking Your Imagination to The Next Level</title>
    </head>

    <body>

        <!-- PRELOADER
        <div class="container preloader">
          <div class="row">
            <div class="col s12 m3"></div>
            <div class="col s12 m6">
              <div class="div1">
                <div class="div2"></div>
              </div>
            </div>
            <div class="col s12 m3"></div>
          </div>
        </div> -->


        
        <!-- navbar -->
        <div class="navbar-fixed scrollspy" id="navbar">
            <nav class="grey darken-3">
              <div class="container">
                <div class="nav-wrapper">
                  <a href="<?= base_url(); ?>user" class="brand-logo"><img src="assets/img/logo/logoputih.PNG"></a>
                  <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                  <ul class="right hide-on-med-and-down">
                  </ul>
                </div>
              </div>
            </nav>
          </div>


 <!--Registration Form-->
    <div class="row presets">
        <div class="col s12 l7 offset-l3">
            <form class="presets" method="post" action="<?= base_url('presets'); ?>">
                <div class="card-panel">
                    <h5>Choose the Presets</h5>

                    <?= $this->session->flashdata('message'); ?>

                    <div class="form-field">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" value="<?= $user['nicknamedb'];?>">
                        <?= form_error('name', '<small class="text-danger">', '</small>');?>
                    </div><br>

                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="text" id="email" name="email" class="validate" value="<?= $user['emaildb'];?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>');?>
                    </div><br>
                   
                    <div class="input-field">
                        <select name="preset" id="preset">
                            <option value="" disabled selected>Choose your presets</option>
                            <option value="Orange Grey">Orange Grey Presets</option>
                            <option value="Greenlight Grey">Greenlight Grey Presets</option>
                            <option value="Folkgreen">Folkgreen Presets</option>
                            <option value="Dark Red Grey">Dark Red Grey Presets</option>
                            <option value="Folkgreen Light">Folkgreen Light Presets</option>
                        </select>
                        <label>Presets</label>
                        <?= form_error('preset', '<small class="text-danger">', '</small>');?>
                    </div>
                   
                    <!-- <div class="form-field">
                        <label for="preset">Preset Name</label>
                        <input type="text" id="preset" name="preset" class="validate">
                        <?= form_error('preset', '<small class="text-danger">', '</small>');?>
                    </div><br> -->

                    <div class="button">
                        <button type="submit" class="btn-large grey darken-1" name="submitbtn" value="Submit">Submit</button>
                    </div><br>
                    <hr>
                </div> 
            </form>
            

            
            <!-- <div class="card">
                <div class="card-action grey darken-3 white-text">
                    <h5>Register to Your Cinemary</h5>
                </div>

                <form class="card-content" method="post" action="<?= base_url('registration'); ?>">
                    <div class="form-field">
                        <label for="nickname">Nickname</label>
                        <input type="text" id="nickname" name="nickname">
                    </div><br>

                    <div class="form-field" method="post" action="<?= base_url('registration'); ?>">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname">
                    </div><br>

                    <div class="form-field" method="post" action="<?= base_url('registration'); ?>">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="validate">
                    </div><br>

                    <div class="form-field" method="post" action="<?= base_url('registration'); ?>">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div><br>

                    <div class="button">
                        <button type="submit" class="btn-large grey darken-1" name="registerbtn">Register</button>
                    </div><br>
                    <hr>
                    <p>Did You Have an Account? Please <a href="<?= base_url(); ?>login">Login</a></p> 
                </form>

            </div> -->

            
        </div>
    </div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
    <script type="text/javascript" src="assets/js/materialize.min.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
            $('select').formSelect();
        });
    
        document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('select');
        var instances = M.FormSelect.init(elems, options);
        });


    </script>



</html>