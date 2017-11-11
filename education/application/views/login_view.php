<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>
        <!-- META SECTION -->
        <title>Candahar - Project Web Education</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="<?php echo base_url();?>/assets/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->

        <script type="text/javascript">

            function OnMessageFailure(MsgType, UserContext)
            {
              document.getElementById('FailureMsgType').innerHTML = MsgType;
              document.getElementById('FailureUserContext').innerHTML = UserContext;
              $("div[id*=FailureMsgDialog]").modal("show");
            }

            function checkInputForm()
            {
              if(!$("#userEmail").val())
              {
                OnMessageFailure("Something went wrong", "please review your entry on email");
                $("#userEmail").focus();
                return false;
              }
              if(!$("#userPassword").val())
              {
                OnMessageFailure("Something went wrong", "please review your entry on password");
                $("#userPassword").focus();
                return false;
              }
            }
        </script>
    </head>
    <body>

        <div class="login-container lightmode">

            <div class="login-box animated fadeInDown">
                <!-- <div class="login-logo"></div>-->
                <div class="login-body">
                    <div class="login-title"><strong>Log In</strong> to your account</div>
                    <form method="POST"
                        class="form-horizontal"
                        action="<?php echo base_url();?>index.php/login/getLogin"
                        onsubmit="return checkInputForm();">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" id="userEmail" name="userEmail" class="form-control" placeholder="E-mail"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" id="userPassword" name="userPassword" class="form-control" placeholder="Password"/>
                            <?php
                              $info = $this->session->flashdata('info');
                              if(!empty($info))
                              {
                                echo '<div><label class="btn btn-link btn-block">'.$info.'</label></div>';
                              }
                            ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <a href="#" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-info btn-block" >Log In</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2014 Candahar
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>

        </div>

        <div id="FailureMsgDialog" class="message-box message-box-warning animated fadeIn" data-sound="alert">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-info"></span><strong><label id="FailureMsgType"></label></strong></div>
                    <div class="mb-content">
                        <p><label id="FailureUserContext"></label></p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <button class="btn btn-default btn-lg" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- START PLUGINS -->
        <script type="text/javascript" src="<?php echo base_url();?>/assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/assets/js/plugins/bootstrap/bootstrap.min.js"></script>
        <!-- END PLUGINS -->

    </body>
</html>
