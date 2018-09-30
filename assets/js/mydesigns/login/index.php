<?php
session_start();
require 'db.php';
include_once 'login.php';
$my_post = $_POST;
?>

<!--created by leamug-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Zuris Login/Signup Multi Tabs Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel with-nav-tabs panel-info">
                <div class="panel-heading">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#login" data-toggle="tab"> Login </a></li>
                        <li><a href="#signup" data-toggle="tab"> Signup </a></li>
                    </ul>
                </div>
                <!--panel body-->
                <div class="panel-body">
                    <div class="tab-content">
                        <div id="login" class="tab-pane fade in active register">
                          <form action="index.php" method="post" autocomplete="off">
                            <div class="container-fluid">
                                <div class="row" id="login">
                                    <h2 class="text-center" style="color: #5cb85c;"> <strong> Login  </strong></h2>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-user"></span>
                                                    </div>
                                                    <input type="text" placeholder="User Name" id="username" name="username" class="form-control" required="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon">
                                                        <span class="glyphicon glyphicon-lock"></span>
                                                    </div>

                                                    <input type="password" placeholder="Password" id="password" name="password" class="form-control" required="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <input type="checkbox" name="check" checked> Remember Me
                                            </div>
                                        </div>

                                        <div class="col-xs-6 col-sm-6 col-md-6">
                                            <div class="form-group">
                                                <a href="#forgot" data-toggle="modal"> Forgot Password? </a>
                                            </div>
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <button type="submit" class="btn btn-success btn-block btn-lg" name="login"> Login </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                          </form>
                        </div>
                        <!--signup form-->
                        <div id="signup" class="tab-pane fade">
                            <div class="container-fluid">
                                <div class="row">
                                  <form action="index.php" method="post" autocomplete="off">
                                    <h2 class="text-center" style="color: #f0ad4e;"> <Strong> Register </Strong></h2> <hr />
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon iga1">
                                                        <span class="glyphicon glyphicon-user"></span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Enter User Name" name="name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon iga1">
                                                        <span class="glyphicon glyphicon-envelope"></span>
                                                    </div>
                                                    <input type="email" class="form-control" placeholder="Enter E-Mail" name="mail">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-addon iga1">
                                                        <span class="glyphicon glyphicon-lock"></span>
                                                    </div>
                                                    <input type="password" class="form-control" placeholder="Enter Password" name="pass">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-block btn-warning" name="register"> Register</button>
                                            </div>
                                        </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--recover password modal-->
<div class="modal fade" id="forgot">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss='modal' aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
                <h4 class="modal-title" style="font-size: 32px; padding: 12px;"> Recover Your Password </h4>
            </div>

            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon iga2">
                                        <span class="glyphicon glyphicon-envelope"></span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Enter Your E-Mail ID" name="email">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon iga2">
                                        <span class="glyphicon glyphicon-lock"></span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Enter Your New Password" name="newpwd">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success"> Save <span class="glyphicon glyphicon-saved"></span></button>

                    <button type="button" data-dismiss="modal" class="btn btn-lg btn-default"> Cancel <span class="glyphicon glyphicon-remove"></span></button>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="js/login.js"></script>

</body>
</html>


<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{    

    if (isset($_POST['login'])) { //user logging in
        $my_post['key'] = "_loginPass";
        // include 'login.php';
        // include_once 'login.php';
        login();
    }
    
    elseif (isset($_POST['register'])) { //user registering
        $my_post['key'] = "_signupPass";
        include 'register.php';
    }
}


?>