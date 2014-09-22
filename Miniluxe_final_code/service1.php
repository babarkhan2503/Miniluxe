<?php

include 'checkcookie.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Miniluxe</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/demo_page.css" rel="stylesheet" />
        <link href="css/demo_table.css" rel="stylesheet" />
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="assets/css/popup.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/css/DT_bootstrap.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">


        <style type="text/css">

            body {
                margin:0;
                padding:0;
            }
            #wrapper{
                margin-top:100px;
            }
            .form-signin {
                max-width: 300px;
                padding: 19px 29px 29px;
                margin: 100px auto 20px;
                background-color: #fff;
                border: 1px solid #e5e5e5;
                -webkit-border-radius: 10px;
                -moz-border-radius: 10px;
                border-radius: 10px;
                -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
            }
            .form-signin .form-signin-heading,
            .form-signin .checkbox {
                margin-bottom: 10px;
            }
            .form-signin input[type="text"],
            .form-signin input[type="password"] {
                font-size: 16px;
                height: auto;
                margin-bottom: 15px;
                padding: 7px 9px;
            }
            .wrapper{width: 80%;margin: 0 auto;}
            #data{ margin-top:20px; }
            .go-top {
                position: fixed;
                bottom: 2em;
                right: 2em;
                text-decoration: none;
                color: white;

                font-size: 12px;
                padding: 1em;
                display: none;
            }
            media
            {
                /*box-shadow:0px 0px 4px -2px #000;*/
                margin: 20px 0;
                padding:30px;

            }
            .media:first-child {
                margin-top: 0;
                margin-left: 80px !important;
            }
            .navbar-default {
                background-color:#EDF0FD;;
            }
            .navbar-default .navbar-nav>li>a {
                color: #8393E9;
            }
            .navbar-default .navbar-nav>li>a:hover{
                color: #8393E9;
            }
            .btn-group>.btn, .btn-group-vertical>.btn {


                background: #bbc4f6;
                color: #fff;
                border-radius:0px;
                font-size: 20px;
                letter-spacing: 1px;
            }
            .pull-right {
                float: right!important;
                margin-top: 38px;
            }
            .dropdown-menu {

                margin: 5px 0 0;
                border-radius:0px;
                box-shadow: 4px 4px 1px rgba(0,0,0,0.2);
            }
            .navbar-collapse {
                max-height: 340px;
                padding-right: 50px;
                padding-left: 50px;
            }
            .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus{
                background:#bbc4f6;
            }
            .navbar-default .navbar-nav>li>a {

                font-size: 18px;
                letter-spacing: 1px;
            }
            .navbar-nav>li {
                float: left;
                margin-top: 30px;
                margin-left: 27px;
            }

            tfoot {
                display: table-header-group;
            }

        </style>


    </head>
    <body>
        <div id="nav">
            <div class="navbar navbar-default navbar-fixed-top">
                <div id="navigation" role="navigation">

                    <div class="navbar-header">

                        <button id="btn_collapse" type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>



                    </div>
                    <div class="collapse navbar-collapse">
                        <div id="logo" style="float:left;">
                            <img src="assets/image/logo.png" id="logo_cntr">
                        </div>
                        <ul class="nav navbar-nav">

                            <li><a href="users.php">Users</a></li>

                            <li><a href="technicians.php">Technician</a></li>

                            <li class="active"><a href="services.php">Services</a></li>


                            <li><a href="session.php" >Sessions</a>

                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3" position="relative">

                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="closesessions.php">In Sessions</a></li>

                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="busytechnician.php">Busy Technician</a></li>

                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="idletechnician.php">Idle Technician</a></li>

                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="waitinguser.php">Current Waitlist</a></li>

                                </ul>

                            </li>

                        </ul>
                        <div class="btn-group pull-right">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#" style="-webkit-box-shadow:none;box-shadow: none;">
                                <i class="icon-user"></i> Admin	<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#?w=400" rel="popup_name5" class="poplight5"><i class="icon-off"></i> Logout</a></li>
                                <li><a href="#?w=400" rel="popup_name_shop_status" class="poplight5"><i class="icon-off"></i><span id="status"> Shop Open</span></a></li>
                            </ul>
                        </div>

                    </div> 

                </div>
                <div style="height: 5px;width:100%;background: #bbc4f6;"></div>
            </div>
        </div>





        <div id="wrapper" style="clear: both;width:100%">
            <div  id="users" style="margin-left: 5%;margin-right: 5%;clear: both;" >
                <table  cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="example1">

                </table>
            </div> <!-- Main Data -->
        </div>


        <div id="popup_name5" class="popup_block" style="height:140px;">
            <br>
            <font face="Gill Sans MT" style="margin-left:44px;"><b>Are you sure you want to logout? </b></font><br><br>
            <center><input type="button" onclick="logoutadmin()" value="Yes" style="background-color: #08c;
                           color: #FFF;
                           width:80px;
                           height: 32px;
                           font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                           border: none;
                           outline: none;
                           opacity:5;">
                <input type="button" onclick="removemodal()" value="No" style="background-color: #08c;
                       color: #FFF;
                       width:80px;
                       height: 32px;
                       font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                       border: none;
                       outline: none;
                       opacity:5;" ></center>
        </div>

        <div id="popup_name_shop_status" class="popup_block" style="height:140px;">
            <br>
            <span id="question"><font face="Gill Sans MT" style="margin-left:40px;"><b>Are you sure you want to close the shop? </b></font></span><br><br>
            <center><input  type="button" onClick="change_status()" value="Yes" style="background-color: #0088cc;
                            color: #FFF;
                            width:80px;
                            height: 32px;
                            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                            border: none;
                            outline: none;
                            opacity:5;"/>
                <input type="button" onclick="removemodal()" value="No" style="background-color: #0088cc;
                       color: #FFF;
                       width:80px;
                       height: 32px;
                       font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
                       border: none;
                       outline: none;
                       opacity:5;" ></center>
            <input type="hidden" name="hiddenorderid" id="hiddenorderid" </input>
        </div>


        <div><button type="button" class="btn btn-primary" style="margin-left: 1%;" id="dateButton" >Date</button><span><input type="text" style="margin-top: 7px;" value=" " id="datepicker"></span><span><input type="radio"  style="margin-left: 25%; "name="colors" id="sales_report" value="true" class="changingbuttons" checked="checked">  Sales Report</span>
        </span><span><input type="radio" name="colors" id="tip_report" value="" class="changingbuttons" checked="checked">  Tip Report</span><span><button type="button" class="btn btn-primary"  style="margin-left: 28%;">Export to .cvs</button></span>
        <span><button type="button" class="btn btn-primary">View in Window</button></span></div>


    <hr>
    <div id="table1">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>

                    <th width="4%"><center>Order Id</center></th>
            <th width="1%"><center>Order Date</center></th>
            <th width="5%"><center>Technician Id</center></th>
            <th width="3%"><center>Technician First Name</center></th>
            <th width="2%"><center>Technician Last Name</center></th>
            <th width="4%"><center>Order Rating</center></th>
            <th width="4%"><center>Order Total</center></th>
            <th width="3%"><center>Tip Amount</center></th>
            <th width="2%"><center>Tip Percentage</center></th>
            <th width="4%"><center>Services</center></th>


            </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="10" class="dataTables_empty">Loading data from server</td>
                </tr>
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
    
    <footer>
    <!--                <p align="center">&copy; 2014. All rights reserved.</p>-->
    </footer>


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" language="javascript" src="assets/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>


    <script>

                    var date = new Date();
                    var timeZone = -date.getTimezoneOffset();
                    $(document).ready(function()
                    {
                        //+$("#table1").hide();
                        $('#example').dataTable({
                            "bProcessing": true,
                            "bServerSide": true,
                            "bAutoWidth": false,
                            "pagingType": "full_numbers",
                            "sAjaxSource": "searchtip.php?timeZone="+timeZone
                        });
                        
                        if($("#tip_report").val()=='true')
                               tipReportfilter();
                        
                       
                        
                    });


//                        var date = [];
//                        var count = 0;
//                    $('#sales_report').change(function()
//                    {
//                          salesReportfilter();
//                            $('#dateButton').click(function() {
//
//                                $('#datepicker').datepicker();
//                                $('#datepicker').datepicker('show');
//
//                            });
//
//
//
//                            $('#datepicker').change(function() {
//                                date[count] = $('#datepicker').val();
//                                date[count] = changeDateformat(date[count]);
//                                count++;
//                                //date[count - 1] = date[count - 1];
//                                // alert(date[count - 1] + " " + count);
//
//                                if (count == 2)
//                                {
//                                    //alert("hello");
//                                    window.open("http://localhost:8888/mini_luxe_adminnew/salesreport.php?from=" + date[0] + "&" + "to=" + date[1], "_self");
//
//                                }
//
//
//                            });

//                    });
                    
                    
                    $("#sales_report").change(function(){
                        //tipReportfilter();
                         window.open("http://54.186.183.150/v1/mini_luxe_adminnew/service.php"_self");
                        
                    });

//                    $(".changingbuttons").change(function() {
//                        var ids = $(this).attr('id');
//                        if (ids == 'sales_report') {
//                           // alert("In");
//                            $("#table1").hide();
//                            $("#table2").show();
//                        }
//                        if (ids == 'tip_report') {
//                            //alert("here");
//                            $("#table2").hide();
//                            $('#example').dataTable({
//                                "bProcessing": true,
//                                "bServerSide": true,
//                                "bAutoWidth": false,
//                                "pagingType": "full_numbers",
//                                "sAjaxSource": "searchtip.php?timeZone=" + timeZone,
//                            });
//                            $("#table1").show();
//
//                        }
//                    });


                    //                    $('#tip_report').change(function()
                    //                    {
                    //
                    //                        $('#dateButton').click(function() {
                    //
                    //                            $('#datepicker').datepicker();
                    //                            $('#datepicker').datepicker('show');
                    //
                    //                        });
                    //
                    //
                    //
                    //                        $('#datepicker').change(function() {
                    //                            date[count] = $('#datepicker').val();
                    //                            count++;
                    //                            date[count - 1] = date[count - 1];
                    //                            //alert(date[count - 1] + " " + count);
                    //
                    //                            if (count == 2)
                    //                            {
                    //                                //alert("hello");
                    //                                window.open("http://localhost:8888/mini_luxe_adminnew/tipreport.php?from=" + date[0] + "&" + "to=" + date[1], "_self");
                    //
                    //                            }
                    //
                    //
                    //                        });
                    //
                    //                    });



                    function changeDateformat(date)
                    {
                        var split_date = date.split('/');
                        var formatted_date = split_date[2] + "-" + split_date[0] + "-" + split_date[1];
                        return formatted_date;
                    }

                    function tipReportfilter()
                    {
                        var date = [];
                        var count = 0;
                        $('#dateButton').click(function() {

                            $('#datepicker').datepicker();
                            $('#datepicker').datepicker('show');

                        });



                        $('#datepicker').change(function() {
                            date[count] = $('#datepicker').val();
                            date[count] = changeDateformat(date[count]);
                            count++;
                            //date[count - 1] = date[count - 1];
                            // alert(date[count - 1] + " " + count);

                            if (count == 2)
                            {
                                //alert("hello");
                                window.open("http://54.186.183.150/v1/mini_luxe_adminnew/tipreport.php?from=" + date[0] + "&" + "to=" + date[1], "_self");

                            }


                        });
                    }
                    
                    
                    
//                    function tipReportfilter()
//                    {
//                        var date = [];
//                        var count = 0;
//                        $('#dateButton').click(function() {
//
//                            $('#datepicker').datepicker();
//                            $('#datepicker').datepicker('show');
//
//                        });
//
//
//
//                        $('#datepicker').change(function() {
//                            date[count] = $('#datepicker').val();
//                            date[count] = changeDateformat(date[count]);
//                            count++;
//                            //date[count - 1] = date[count - 1];
//                            // alert(date[count - 1] + " " + count);
//
//                            if (count == 2)
//                            {
//                                //alert("hello");
//                                window.open("http://54.186.183.150/v1/mini_luxe_adminnew/tipreport.php?from=" + date[0] + "&" + "to=" + date[1], "_self");
//
//                            }
//
//
//                        });
//                    }





    </script>


    <script src="assets/js/jquery.cookie.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>


</body>
</html>
