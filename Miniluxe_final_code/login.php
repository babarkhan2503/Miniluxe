<?php
include 'CommonPath.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="css/bootstrap.css" rel="stylesheet">

        <script src="js/jquery.js"></script>  
        <script src="js/bootstrap.js"></script>  

        <style type="text/css">
            body {
                background:url(assets/image/bg_pattern.png);
            }
            .form-signin-heading{
                font-size: 22px;
                font-family: sans-serif;
                font-weight: lighter;
                text-align: center;
                background: #8595ec;
                width: 300px;
                margin: 0 auto;
                border-top-left-radius: 4px;
                padding: 21px 30px;
                border-top-right-radius: 4px;
                color: #fff;
                letter-spacing: 1px;

            }
            #submit{
                width: 100%;
                background: #8595ec;
                border-bottom: none;
                box-shadow: none;
                border:0px;
                color: #fff;
                text-shadow: none;
                height: 45px;
                font-size: 20px;
                border-radius: 3px;
                letter-spacing: 1px;
                font-weight: 200;
                margin-top:10px;
            }
            #login_form{
                width:300px;
                margin:0 auto;
                background: #fff;
                padding:35px 30px;
                border-radius: 3px;
                margin-bottom:80px;
                box-shadow: 0px 1px 2px rgba(0,0,0,.3);
                border-top-left-radius: 0px;
                border-top-right-radius: 0px;
            }
            #submit:focus,
            #submit:active,
            #submit:hover
            {
                outline:0px !important;
                -webkit-appearance:none;
            }
            #logo_bg{
                width:100%;
                background:#fff;
                padding-bottom: 15px;
                margin-bottom:80px;
                box-shadow:0px 1px 2px rgba(0,0,0,.2);
            }
            #logo{
                width:256px;
                height:80px;
                margin:0 auto;

            }
            #email{
                height:40px;
                width: 90%;
                margin-bottom:10px;
            }
            #password{
                height:40px;
                width:90%;
            }
            .glyphicon{
                top:10px;
            }
        </style>
        <script>
            $(document).ready(function()
            {
                    
                    $(document).keypress(function(e) {
                        if (e.which == 13) { login(); }; 
                      });
                    
                    
                $('#submit').click(function()
                {
                    login();
                });
            });
            
            function login(){
                          var pattern = new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
                    var email = $('#email').val();
                    var password = $('#password').val();
                    if (email.length == 0 && password.length == 0)
                    {
                        $('#errorfielddiv').show();
                        $('#errorfielddiv').html("Please fill all the fields.");
                        return false;
                    }
                    if (email.length == 0 && password.length != 0)
                    {
                        $('#errorfielddiv').show();
                        $('#errorfielddiv').html("Please fill in an email.");
                        return false;
                    }
                    if (email.length != 0 && password.length == 0)
                    {

                        $('#errorfielddiv').show();
                        if (pattern.test(email))
                        {
                            $('#errorfielddiv').html("Please fill in a password to login.");
                        }
                        else
                        {
                            $('#errorfielddiv').html("Please fill in a valid email address.");
                        }
                        return false;
                    }
                    if (email.length != 0 && password.length != 0)
                    {

                        if (!pattern.test(email))
                        {
                            $('#errorfielddiv').show();
                            $('#errorfielddiv').html("Please fill in a valid email address.");
                            return false;
                        }
                    }
                    $('#errorfielddiv').hide();
//                    $('#submit').hide();
                    $('#loader').show();
                    
                    var link  = '<?php echo $BaseURL ?>';
                    
                    $.ajax({
                        type: "POST",
                        url:link+'/email_login',
                        //url: 'http://dev.miniluxe.com:3002/email_login',
                        dataType: "json",
                        data: {email: email, password: password},
                        async: false,
                        success: function(logindata) {
//                            console.log(logindata["data"]);
                            console.log(logindata);
                            
                            if (logindata['log'] == 0)
                            {
                                $('#errordiv').show('slide');
                                setTimeout(function() {
                                    $('#errordiv').hide();
                                }, 3000);
//                                $('#submit').show();
                                $('#loader').hide();

                            }
//                            else if (logindata['error'] == 'Email not registered.')
//                            {
//                                $('#errordiv2').show('slide');
//                                setTimeout(function() {
//                                    $('#errordiv').hide();
//                                }, 3000);
////                                $('#submit').show();
//                                $('#loader').hide();
//
//                            }
                            else
                            {  
                                //$.cookie('admin_access_token', logindata['data']);
                                $.cookie('admin_access_token', logindata['access_token']);
                                
                                location.href = 'users.php';
                                

                            }
                        },
                        error: function(status,b,c) {
                           
                        }
                    });
            }
        </script>
    </head>
    <body>

        <!-- This is a very simple parallax effect achieved by simple CSS 3 multiple backgrounds, made by http://twitter.com/msurguy -->

        <div>
            <div>
                <div id="logo_bg">
                    <div id="logo">
                        <img src="assets/image/logo.png" id="logo_cntr">
                    </div>
                </div>
                <p class="form-signin-heading">Please Sign In</p>
                <form id="login_form">

                    <div class="alert alert-error" style="display:none" id="errordiv">
                        Incorrect Username or Password!
                    </div>
                    <div class="alert alert-error" style="display:none" id="errordiv1">
                        Something went wrong!
                    </div>
                    <div class="alert alert-error" style="display:none" id="errordiv2">
                        Unauthorized Access!
                    </div>
                    <div class="alert alert-error" style="display:none" id="errordiv2">
                        Email not registered!
                    </div>
                    <div class="alert alert-error" style="display:none" id="errorfielddiv">

                    </div>


                    
                        <span class="glyphicon glyphicon-user" style="float:left;margin-right: 10px;"></span>
                        <input type="email" id="email" class="input-block-level form-control" placeholder="Email address" style="float:left">
                        <div style="clear:both"></div>
                    
                        <span class="glyphicon glyphicon-lock" style="float:left;margin-right: 10px;"></span>
                        <input type="password" id="password" class="input-block-level form-control" placeholder="Password" style="float:left">
                        <div style="clear:both"></div>




                    <input class="btn btn-default" type="button" value="Sign in" id ="submit">
                     <!--<center><img src="assets/img/loader.gif" style="display:none" id="loader" /></center>-->
                </form>
            </div>


        </div> <!-- /container -->

        <script src="assets/js/jquery.cookie.js"></script>

    </body>
</html>
