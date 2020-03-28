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

        .login{
            margin-top: 100px;
        }

        .login .card{
            background: rgba(0, 0, 0, .6)
        }

        .login label{
            font-size: 16px;
            color:#ccc;
        }

        .login input{
            font-size: 20px;
            color: #fff;
        }
    </style>

 <!--Login Form-->
    <div class="row login">
        <div class="col s12 l4 offset-l4">
            <form class="card" method="post" action="<?= base_url('login'); ?>">
                <div class="card-action grey darken-3 white-text">
                    <h4>Login to Your Cinemary</h4>
                </div>

                <?= $this->session->flashdata('message'); ?>

                <div class="card-content">
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" value="<?= set_value('email')?>">
                        <?= form_error('email', '<small class="text-danger">', '</small>');?>
                    </div><br>

                    <div class="form-field">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                        <?= form_error('password', '<small class="text-danger">', '</small>');?>
                    </div><br>

                    <div class="form-field">
                        <button type="submit" class="btn-large grey darken-1" name="loginbtn">Login</button>
                    </div><br>
                    <hr>
                    <p>Don't Have an Account? Create a new One : <a href="<?= base_url(); ?>registration">Register</a></p>

                </div>

            </form>
        </div>
    </div>



</html>