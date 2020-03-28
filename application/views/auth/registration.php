<!-- <?php

$host="localhost";
$user="root";
$password="";
$db="yourcinemary";

mysqli_connect($host, $user, $password);
mysqli_select_db($db);

if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from loginform where User='".$uname."' AND Pass='".$password."' limit l";
    $result=mysql_query($sql);
    if(mysql_num_rows($result)==1){
        echo "Welcome to Your Cinemary";
        exit();
    }
    else{
        echo "You have entered an Incorrect Password";
        exit();
    }


}

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

        .registration{
            margin-top: 100px;
        }

        .registration .card-panel{
            background: rgba(0, 0, 0, .6)
        }

        .registration label{
            font-size: 16px;
            color:#ccc;
        }

        .registration input{
            font-size: 20px;
            color: #fff;
        }
    </style>

 <!--Registration Form-->
    <div class="row registration">
        <div class="col s12 l4 offset-l4">
            <form class="user" method="post" action="<?= base_url('registration'); ?>">
                <div class="card-panel">
                    <h5>Please Fill the Form</h5>
                    <div class="form-field">
                        <label for="nickname">Nickname</label>
                        <input type="text" id="nickname" name="nickname" value="<?= set_value ('nickname');?>">
                        <?= form_error('nickname', '<small class="text-danger">', '</small>');?>
                    </div><br>

                    <div class="form-field">
                        <label for="fullname">Full Name</label>
                        <input type="text" id="fullname" name="fullname" value="<?= set_value ('fullname');?>">
                        <?= form_error('fullname', '<small class="text-danger">', '</small>');?>
                    </div><br>

                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="validate" value="<?= set_value ('email');?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>');?>
                    </div><br>

                    <div class="form-field">
                        <label for="password1">Password</label>
                        <input type="password" id="password1" name="password1">
                        <?= form_error('password1', '<small class="text-danger">', '</small>');?>
                    </div><br>

                    <div class="form-field">
                        <label for="password2">Repeat Password</label>
                        <input type="password" id="password2" name="password2">
                    </div><br>

                    <div class="button">
                        <button type="submit" class="btn-large grey darken-1" name="registerbtn" value="Submit">Register</button>
                    </div><br>
                    <hr>
                    <p>Did You Have an Account? Please <a href="<?= base_url(); ?>login">Login</a></p>
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



</html>