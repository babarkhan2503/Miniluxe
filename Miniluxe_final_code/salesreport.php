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
        <link rel="stylesheet" type="text/css" href="css/daterangepicker-bs3.css" />
        <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.tableTools.css">
        <link href="assets/css/popup.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="assets/css/DT_bootstrap.css">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
        <link rel="stylesheet" href="css/datepicker.css">
         <link href="css/common_style.css" rel="stylesheet">



    </head>
    <body>
        <?php include 'header.php'; ?>
       <?php include 'popup.php'; ?>



 

        <div style="margin-left: 3%;margin-bottom: 30px;height: 39px;margin-top: 5%;">
            <div style="float:left; width: 470px;">
                <div style="float:left; margin-right: 10px;font-size: 18px; font-weight: bold;">Sales Report: </div>
                <div id="display_date" style="font-size: 17px; font-weight: bold;">

                </div>
            </div>
            
        </div>





 <div style="margin-top: -1%;margin-left: 2.5%;">
<!--            <button type="button" class="btn btn-primary" style="margin-left: 1%;" id="dateButton" >Date</button>-->
            <span style="float: left;
margin-right: 10px;
margin-top: 4px;
font-size: 16px;
margin-left: 10px;">Select Date</span><span><button type="button" id="submit_report" class="btn btn-primary" >Submit</button></span>
            <span style="float: left;">  <div class="input-daterange" id="datepicker" >
                    <input type="text" id="first_date" class="input-small" name="start" />
                    <span class="add-on" style="vertical-align: top;height:20px">to</span>
                    <input type="text" id="second_date" class="input-small" name="end" />
                </div></span>
            <span style="margin-right: 20px;"><input type="radio"  style="margin-left: 17%; margin-top: -4px;"name="colors" id="sales_report" value="true" class="changingbuttons" checked="checked">  Sales Report</span>
        <span><input type="radio" name="colors" id="tip_report" value="" class="changingbuttons" style="margin-top: -4px;">  Tip Report</span>
<!--        <span><button type="button" class="btn btn-primary"  style="margin-left: 33%;">Export to .cvs</button></span>-->
    </div>

        <div id="table2" class="table-alignment1">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                <thead>
                    <tr>

                        <th width="4%"><center>Order ID</center></th>
                <th width="1%"><center>Order Date</center></th>
                <th width="5%"><center>Service Start</center></th>
                <th width="3%"><center>Service End</center></th>
                <th width="2%"><center>Theoretical Duration</center></th>
                <th width="4%"><center>Payment Time</center></th>
                <th width="4%"><center>Customer First Name</center></th>
                <th width="3%"><center>Customer Last Name</center></th>
                <th width="2%"><center>Phone No</center></th>
                <th width="4%"><center>Email</center></th>
                <th width="4%"><center>Service</center></th>
                <th width="3%"><center>Service Revenue</center></th>
                <th width="2%"><center>Technician</center></th>
                <th width="2%"><center>Location</center></th>    

                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="14" class="dataTables_empty">Loading data from server</td>
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
<!--        <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" language="javascript" src="assets/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>-->
        <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript" language="javascript" src="assets/js/jquery-1.10.2.min.js"></script>





    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/popup.js"></script>
      <script type="text/javascript" charset="utf-8" language="javascript" src="js/dataTables.tableTools.js"></script>


        <script>
                    // Global Script variables
                    var date = new Date();
                    var timeZone = -date.getTimezoneOffset();   // generate timeZone is 
                    var from = "<?php echo $_GET['from'] ?>";  //get first date from url
                    var to = "<?php echo $_GET['to'] ?>";     // get second date from url
                    var sdate;
                    var edate;
                    document.getElementById('display_date').innerHTML = changeDateformat1(from) + "-" + changeDateformat1(to);
                    from = from + " " + "00:00:00";
                    to = to + " " + "23:59:59";
                     //alert(timeZone+"  "+from+"  "+to);

                    $(document).ready(function()
                    {

                        $("#activeservice").addClass('active');

                        $('#example2').dataTable({
                            "bProcessing": true,
                            "bServerSide": true,
                            "bAutoWidth": false,
                            "pagingType": "full_numbers",
                            "sAjaxSource": "searchreport.php?timeZone=" + timeZone + "&from=" + from + "&to=" + to,
                             dom: 'T<"clear">lfrtip',
                            tableTools: {
                                "aButtons": [
                                    {
                                        "sExtends": "copy",
                                        "mColumns": [0, 1, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13]
                                    },
                                    {
                                        "sExtends": "csv",
                                        "mColumns": [0, 1, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13]
                                    },
//                                    {
//                                        "sExtends": "xls",
//                                        "mColumns": [0, 1, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13]
//                                    },
                                   
                                ],
                                "sSwfPath": "swf/copy_csv_xls_pdf.swf"
                            }

                        });
                        
                        
                        if ($("#sales_report").val() == 'true')
                        {
                            salesReportfilter();
                        }
                              
                        

                        });
                   
                       
                       
                       
                       $('#tip_report').change(function()
                       {
                            //window.open("http://localhost:8888/mini_luxe_adminnew/services1.php", "_self");
                            window.open("http://admin.miniluxe.com/services1.php", "_self");
                       });
                       
                       
                       


                    // This function is used to change date format
                    //START*************************************************************
                    
                    function changeDateformat2(date)
                    {

                        var split_date = date.split('/');
                        var formatted_date = split_date[2] + "-" + split_date[1] + "-" + split_date[0];
                        return formatted_date;
                    }
                    
                    //END****************************************************************     
                    
                    
                    
                    
                     // This function is used to change date format
                    //START*************************************************************
                    
                    function changeDateformat1(date)
                    {

                        var split_date = date.split('-');
                        var formatted_date = split_date[2] + "/" + split_date[1] + "/" + split_date[0];
                        return formatted_date;
                    }
                    
                    //END****************************************************************     
                    
                    
                    
                    
                    
                    
                     
                    // This function is used to generate filtered sales report date wise
                    //START*************************************************************   

                    function salesReportfilter()
                    {
                            
        
                            $('.input-daterange').datepicker({
                                
                                todayBtn: "linked",
                                format: 'dd/mm/yyyy'
                            });
                            
                          
                            $('#first_date').change(function() {
                                 sdate = $(this).val();
                                 sdate=changeDateformat2(sdate);
                                 $('#second_date').val("");
                            });
                            $('#second_date').change(function() {
                                 edate = $(this).val();
                                 edate=changeDateformat2(edate);
                                 //alert(edate);
                                 $('#submit_report').click(function()
                                 {  //alert("hello");
                                   //alert(sdate+" "+edate);
                                     //window.open("http://localhost:8888/mini_luxe_adminnew/salesreport.php?from=" + sdate + "&" + "to=" + edate, "_self");
                                      window.open("http://admin.miniluxe.com/salesreport.php?from=" + sdate + "&" + "to=" + edate, "_self");
                                 });
                                
                               // var fdate = sdate + "  " + edate;
                                //alert(fdate);
                                //alert(sdate+" "+edate);
                            });
                        
                    }

                    //END****************************************************************    

                    
                    
//                    function removemodal() {
//                        $('#fade , .popup_block').fadeOut(function() {
//                            //$('#fade, a.close').remove();  //fade them both out
//                        });
//                    }
//
//
//                    function logoutadmin() {
//                        $.removeCookie('admin_access_token');
//                        location.href = 'login.php'
//                    }
//
//
//                    $('a.poplight5[href^=#]').click(function(e)
//                    {
//                        var popID = $(this).attr('rel'); //Get Popup Name
//                        var popURL = $(this).attr('href'); //Get Popup href to define size
//                        //Pull Query & Variables from href URL
//                        var query = popURL.split('?');
//                        var dim = query[1].split('&');
//                        var popWidth = dim[0].split('=')[1]; //Gets the first query string value
//                        //Fade in the Popup and add close button
//                        $('#' + popID).fadeIn().css({'width': Number(popWidth)}).prepend('<a href="#" class="close1" style="opacity: 1"></a>');
//                        //Define margin for center alignment (vertical   horizontal) - we add 80px to the height/width to accomodate for the padding  and border width defined in the css
//                        var popMargTop = ($('#' + popID).height() + 80) / 2;
//                        var popMargLeft = ($('#' + popID).width() + 80) / 2;
//                        //Apply Margin to Popup
//                        $('#' + popID).css({
//                            'margin-top': -popMargTop,
//                            'margin-left': -popMargLeft
//                        });
//                        //Fade in Background
//                        $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
//                        $('#fade').css({'filter': 'alpha(opacity=40)'}).fadeIn(); //Fade in the fade layer - .css({'filter' : 'alpha(opacity=80)'}) is used to fix the IE Bug on fading transparencies
//                        return false;
//
//                    });
////                    $('.close1, #fade').live('click', function() { //When clicking on the close or fade layer...
////                        $('#fade , .popup_block').fadeOut(function() {
////                            //$('#fade, a.close').remove();  //fade them both out
////                        });
////                        return false;
////
////                    });
//
//
//
//
//


        </script>


<!--        <script src="assets/js/jquery.cookie.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>-->
       



    </body>
</html>


