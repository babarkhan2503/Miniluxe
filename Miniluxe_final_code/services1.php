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
        <div style="clear: both;"></div>
           <?php include 'popup.php'; ?>

           <div style="clear: both;"></div>

        <div style="margin-top: 5%;margin-left: 1.5%;z-index: +343435;">
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
            <span style="margin-right: 20px;"><input type="radio"  style="margin-left: 17%; margin-top: -4px;"name="colors" id="sales_report" value="" class="changingbuttons" >  Sales Report</span>
        </span><span><input type="radio" name="colors" id="tip_report" value="true" checked="checked" class="changingbuttons" style="margin-top: -4px;">  Tip Report</span>
<!--        <span><button type="button" class="btn btn-primary"  style="margin-left: 33%;">Export to .cvs</button></span>-->
    </div>






<!--    <hr>-->
    <div id="table1" class="table-alignment1">
        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
            <thead>
                <tr>

                    <th width="4%"><center>Order ID</center></th>
            <th width="3%"><center>Order Date</center></th>
            <th width="5%"><center>Technician ID</center></th>
            <th width="3%"><center>Technician First Name</center></th>
            <th width="2%"><center>Technician Last Name</center></th>
            <th width="4%"><center>Order Rating</center></th>
            <th width="4%"><center>Order Total</center></th>
            <th width="3%"><center>Tip Amount ($)</center></th>
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

    <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/popup.js"></script>
      <script type="text/javascript" charset="utf-8" language="javascript" src="js/dataTables.tableTools.js"></script>

    <script>
                    // Global Script variables
                    var date = [];
                    var count = 0;
                    var date = new Date();
                    var timeZone = -date.getTimezoneOffset();
                    var sdate;
                    var edate;
                    $(document).ready(function()
                    {
                        $("#activeservice").addClass('active');

                        $('#example').dataTable({
                            "bProcessing": true,
                            "bServerSide": true,
                            "bAutoWidth": false,
                            "pagingType": "full_numbers",
                            "sAjaxSource": "searchtip.php?timeZone=" + timeZone,
                            dom: 'T<"clear">lfrtip',
                            tableTools: {
                                "aButtons": [
                                    {
                                        "sExtends": "copy",
                                        "mColumns": [0,1,2, 3, 4, 5, 6, 8, 9]
                                    },
                                    {
                                        "sExtends": "csv",
                                        "mColumns":[0,1,2, 3, 4, 5, 6, 8, 9]
                                    },
//                                    {
//                                        "sExtends": "xls",
//                                        "mColumns": [0,1,2, 3, 4, 5, 6, 8, 9]
//                                    },
                                    
                                ],
                                "sSwfPath": "swf/copy_csv_xls_pdf.swf"
                            }


                        });

                        // This event is triggered when user click on datepicker
                        if ($("#tip_report").val() == 'true')
                            tipReportfilter();



                    });

                    // This event is triggered when user checked sales report radio button

                    $("#sales_report").change(function() {
                         window.open("http://admin.miniluxe.com/services.php","_self");
                        //window.open("http://localhost:8888/mini_luxe_adminnew/services.php", "_self");

                    });


                    // This function is used to change date format
                    //START*************************************************************

                    function changeDateformat(date)
                    {
                        var split_date = date.split('/');
                        var formatted_date = split_date[2] + "-" + split_date[1] + "-" + split_date[0];
                        return formatted_date;
                    }

                    //END****************************************************************    


                    // This function is used to generate filtered tip report date wise
                    //START*************************************************************   


                    function tipReportfilter()
                    {
                        // alert("hello");
                        $('.input-daterange').datepicker({
                            todayBtn: "linked",
                            format: 'dd/mm/yyyy'
                        });


                        $('#first_date').change(function() {
                            sdate = $(this).val();
                            sdate = changeDateformat(sdate);
                            $('#second_date').val("");
                        });
                        
                        $('#second_date').change(function() {
                            edate = $(this).val();
                            edate = changeDateformat(edate);
                             $('#submit_report').click(function()
                                 {
                                       // window.open("http://localhost:8888/mini_luxe_adminnew/tipreport.php?from=" + sdate + "&" + "to=" + edate, "_self");
                                        window.open("http://admin.miniluxe.com/tipreport.php?from=" + sdate + "&" + "to=" + edate, "_self");
                                 });
                            //window.open("http://localhost:8888/mini_luxe_adminnew/tipreport.php?from=" + sdate + "&" + "to=" + edate, "_self");
                            // var fdate = sdate + "  " + edate;
                            //alert(fdate);
                            //alert(sdate+" "+edate);
                        });

                    }

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
                   // });
//                    $('.close1, #fade').live('click', function() { //When clicking on the close or fade layer...
//                        $('#fade , .popup_block').fadeOut(function() {
//                           //$('#fade, a.close').remove();  //fade them both out                       });
////                        return false;
//
//                    });



    </script>

  

</body>
</html>
