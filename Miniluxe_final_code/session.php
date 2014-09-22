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
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
         <link href="css/common_style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.tableTools.css">
        <link href="assets/css/popup.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
        
        
        
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
         <script src="assets/js/jquery.cookie.js"></script>
            <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
            <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>
            <script type="text/javascript" charset="utf-8" language="javascript" src="js/dataTables.tableTools.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/popup.js"></script>
            <style>
                #nav{
                    min-width: 1320px;
                }
            </style>

        </head>
        <body>
        <?php include 'header.php'; ?>
         <?php include 'popup.php'; ?>

            <div style="margin-left: 39px;margin-top: 5%;">
                <div style="float:left; margin-right: 10px;margin-top: 5px;font-size: 16px;">Select Location: </div>
                <div>
                    <select id="locations" style="width: 175px;">
                        <option value="2">NEWBURY</option>
                        <option value="3">BROOKLINE</option>
                        <option value="4">CHESTNUT HILL</option>
                        <option value="5">HINGHAM</option>
                        <option value="6">LEXINGTON</option>
                        <option value="7">NEWTON</option>
                        <option value="8">WELLESLEY</option>
                        <option value="1">LYNNFIELD</option>
                    </select>
                </div>
            </div>
            
            
            
              <div style="margin-left: 19%;">
                <div>
                    <h3>Current Session</h3>
                </div>
            </div><span><div style="margin-left: 71%;margin-top: -3%;">
                <div >
                    <h3>Waitlist</h3>
                </div>
                </div></span>
            

            <div style="clear: both;min-width:1200px;">
                <div id="wrapper1" style="width: 52%;margin-left: -4%;float: left;margin-right: 22px;">
                    <div  id="session" style="margin-left: 10%;clear: both;" >
                        <table  cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="example1">

                        </table>
                    </div> <!-- Main Data -->

                </div>   



                <div id="wrapper2" style="width:0px; float:left;">
                    <div  id="session">
                        <table  cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped" id="example2" style="width: 710px;">

                        </table>
                    </div> <!-- Main Data -->

                </div>   
                <!--            <div style="clear: both;"></div>-->
            </div>




            <!-- Le javascript
            ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->


            <script>
            
                // Global Script variables
                var date = new Date();
                var timeZone = -date.getTimezoneOffset();
                var location_id;

                $("#locations").change(function() {
                     location_id = $("#locations").val();
               
               
                    $.ajax({
                       
                        type: "Post",
                        url: "http://dev.miniluxe.com:3002/sessions",
                        dataType: "JSON",
                        async: false,
                        data: {
                            'access_token': $.cookie('admin_access_token'),
                            'location_id': location_id,
                            'timeZone': timeZone
                        },
                        success: function(data) {
                            console.log(data);

                            showTable1(data);
                            showTable2(data);
                
                        },
                        error: function(error) {
                            alert("Something went wrong");
                        }

                    });


                });




             //   var admin_access_token;
           

                $(document).ready(function() {
                    $("#activesession").addClass('active');

                    if ($.cookie('admin_access_token') == null)
                    {
                        // if access token is not set in the cookies.
                        $('#loader-main').show();
                        $('.container').hide();
                        location.href = 'login.php'


                    }
                
                
                      // Ajax call to delete_session API
                      // START
                       $.ajax({
                        type: "Post",
                        url: "http://dev.miniluxe.com:3002/sessions",
                        dataType: "JSON",
                        async: false,
                        data: {
                            'access_token': $.cookie('admin_access_token'),
                            'location_id': 2,
                            'timeZone': timeZone
                        },
                        success: function(data) {
                            console.log(data);

                            showTable1(data);
                            showTable2(data);

                        },
                        error: function(error) {
                            alert("Something went wrong");
                        }

                    });
                
                   //END



                });

               
                 // This function is used to generate user session Table
                //START*************************************************************
                function showTable1(data)
                {

                    if (data['current_session'].length == 0)
                    {

                        var str;
                        str = "<thead>";
                        str += "                                <tr>";
                        str += "                                      <th width='1%'>Session ID</th>";
                        str += "                                      <th width='1%'>Customer Name</th>";
                        str += "                                      <th width='1%'>Tecnician Name</th>";
                        str += "                                      <th width='1%'>Technician ID</th>";
                        str += "                                      <th width='1%'>Time to Arrival </th>";
                        str += "                                      <th width='1%'>Start Time</th>";
                        str += "                                      <th width='1%'>Time until Finish</th>";
                        str += "                                      <th width='4%'>Cancel Session</th>";
                        str += "                                  </tr>";
                        str += "</thead>";

                        str += "<tbody> ";
                        str += "<tr>";
                        str += "<td colspan='8'>No data available in table </td>";
                        str += "</tr>";
                        str += "</tbody> ";
                        $('#example1').html(str);
                    }

                    else
                    {

                        str = "<thead>";
                        str += "                                <tr>";
                        str += "                                      <th width='1%'>Session ID</th>";
                        str += "                                      <th width='1%'>Customer Name</th>";
                        str += "                                      <th width='1%'>Tecnician Name</th>";
                        str += "                                      <th width='1%'>Technician ID</th>";
                        str += "                                      <th width='1%'>Time to Arrival </th>";
                        str += "                                      <th width='1%'>Start Time</th>";
                        str += "                                      <th width='2%'>Time until Finish</th>";
                        str += "                                      <th width='2%'>Cancel Session</th>";
                        str += "                                  </tr>";
                        str += "</thead>";
                        str += "<tbody> ";
                        for (var i = 0; i < data['current_session'].length; i++) {
                           // var j = i + 1;
                            str += "                               <tr>";

                            str += "                                     <td>" + data['current_session'][i]['engage_id'] + "</td>";
                            str += "                                     <td>" + data['current_session'][i]['user_name'] + "</td>";
                            str += "                                     <td>" + data['current_session'][i]['technician_name'] + "</td>";
                            str += "                                     <td>" + data['current_session'][i]['technician_id'] + "</td>";
                            str += "                                     <td>" + data['current_session'][i]['wait_time'] + "</td>";
                            str += "                                     <td>" + data['current_session'][i]['start_time'] + "</td>";

                            str += "                                     <td>" + data['current_session'][i]['end_time'] + "</td>";
                            str += "                                     <td><button"+" "+ "onclick="+"deleteSession("+data['current_session'][i]['engage_id']+")"+" "+"type="+"button"+" "+"class="+"btn-primary"+" "+"id="+ data['current_session'][i]['engage_id'] +">Cancel</button>"+"</td>";
                            str += "                                 </tr>";
                       
                        }
                        str += "</tbody> ";
                   
                        $('#example1').html(str);
                   
                    }

                }
                
                //END
            
                 

                  // This function is used to delete user session
                 // START********************************************************
               
                    function deleteSession(engage_id)
                    {
                    
                       // Ajax call to delete_session API
                      // START
                       $.ajax({
                        type: "Post",
                        url: "http://dev.miniluxe.com:3002/delete_session",
                        dataType: "JSON",
                        async: false,
                        data: {
                            'access_token': $.cookie('admin_access_token'),
                            'engage_id': engage_id
                        },
                        success: function(data) {
                            console.log(data);

                        },
                        error: function(error) {
                            alert("Something went wrong");
                        }

                    });
                    
                    //END
                
                
                    //Ajax call to session API 
                    //START
                    $.ajax({
                        type: "Post",
                        url: "http://dev.miniluxe.com:3002/sessions",
                        dataType: "JSON",
                        async: false,
                        data: {
                            'access_token': $.cookie('admin_access_token'),
                            'location_id': location_id,
                            'timeZone': timeZone
                        },
                        success: function(data) {
                            console.log(data);

                            showTable1(data);
                            showTable2(data);

                        },
                        error: function(error) {
                            alert("Something went wrong");
                        }

                    });
                    //END

                 }
             
                 //END**************************************************************
                
            
            
                // This function is used to generate waitlist Table
                //START*************************************************************
            
                function showTable2(data)
                {
                    console.log(data);


                    if (data['waitlist'].length == 0)
                    {
                        var str;
                        str = "<thead>";
                        str += "                                <tr>";
                        str += "                                      <th width='1%'>Customer ID</th>";
                        str += "                                      <th width='1%'>Customer Name</th>";
                        str += "                                      <th width='1%'>Time to Arrival</th>";
                        str += "                                      <th width='1%'>Service Required</th>";
                        str += "                                      <th width='1%'>Expected Wait Time </th>";
                        str += "                                  </tr>";
                        str += "</thead>";

                        str += "<tbody> ";
                        str += "<tr>";
                        str += "<td colspan='7'>No data available in table </td>";
                        str += "</tr>";
                        str += "</tbody> ";
                        $('#example2').html(str);
                    }


                    else
                    {
                        str = "<thead>";
                        str += "                                <tr>";
                        str += "                                      <th width='1%'>Customer ID</th>";
                        str += "                                      <th width='1%'>Customer Name</th>";
                        str += "                                      <th width='1%'>Time to Arrival</th>";
                        str += "                                      <th width='1%'>Service Required</th>";
                        str += "                                      <th width='1%'>Expected Wait Time </th>";

                        str += "                                  </tr>";
                        str += "</thead>";


                        str += "<tbody> ";
                        for (var i = 0; i < data['waitlist'].length; i++) {
                            var j = i + 1;
                            str += "                               <tr>";

                            str += "                                     <td>" + data['waitlist'][i]['user_id'] + "</td>";
                            str += "                                     <td>" + data['waitlist'][i]['user_name'] + "</td>";
                            str += "                                     <td>" + data['waitlist'][i]['wait_time'] + "</td>";
                            str += "                                     <td>" + data['waitlist'][i]['service_id'] + "</td>";
                            str += "                                     <td>" + data['waitlist'][i]['eta'] + "</td>";
                            str += "                                 </tr>";


                        }
                        str += "</tbody> ";
                        console.log(str);

                        $('#example2').html(str);



                    }

                }
            
                //END **************************************************************
    
            </script>      

        </body>
    </html>
