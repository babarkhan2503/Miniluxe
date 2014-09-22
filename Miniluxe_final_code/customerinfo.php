<!DOCTYPE html>
<?php
include 'CommonPath.php';
?>
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
        <link href="css/common_style.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/DT_bootstrap.css">

       
    </head>
    <body >
        <?php include 'header.php'; ?>
         <?php include 'popup.php'; ?>


        <div style="margin-top: 50px;"><h3 style="margin-top: -28px;"><center>User Profile</center></h3></div>
        <div style="clear: both;width:100%;margin-top: -82px;">
            <div id="info">
                <div id ="image_dynamic"></div>
                <div id ="relateddata">
                    <div id="user_profile" style="margin-top: 21%;">
                        <div id="data1">Name: <span id="usr_name" style=""></span></div>
                        <div id="data1">Email: <span id="usr_email" style=""></span></div>
                        <div id="data1">Phone No: <span id="usr_phone" style=""></span></div>
                    </div>
                </div>
                <div style="clear:both;"></div>
            </div>
        </div>
      

       
        <hr>

        <div id="table2" class="table-alignment">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                <thead><h3><center>Services History</center></h3>
                <tr>
                    <th width="1%"> Engage ID</th>
                    <th width="4%">Start Time</th>
                    <th width="4%">End Time</th>
                    <th width="1%">Rating</th>
                    <th width="5%">Cost ($)</th>
                    <th width="3%">Tip ($)</th>
                    <th width="2%">Technician Name</th>
                    <th width="4%">Services</th>
                    <th width="5%"><center>Location</center></th>
                  
                    


                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="9" class="dataTables_empty">Loading data from server</td>
                    </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>




        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script type="text/javascript" language="javascript" src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <script type="text/javascript" language="javascript" src="assets/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
        <script src="assets/js/jquery.cookie.js"></script>
        <script src="js/popup.js"></script>


        <script>
                        // Global script variables
                        var date = new Date();
                        var timeZone = -date.getTimezoneOffset();
                        $(document).ready(function()
                        {
                            $("#activeuser").addClass('active');

                            $('#example2').dataTable({
                                "bProcessing": true,
                                "bServerSide": true,
                                "bAutoWidth": false,
                                "pagingType": "full_numbers",
                                "sAjaxSource": "searchuserdetail.php?timeZone=" + timeZone + "&userId=<?php echo $_GET['action'] ?>",
                            });
                        });
        </script>


        <script>

            // Get parameters from url
            var customer_id = "<?php echo $_GET['action'] ?>";
            var admin_access_token;
            var username = "<?php echo $_GET['username'] ?>";
            username = username.replace("_", " ");
            var email = "<?php echo $_GET['email'] ?>";
            var phone_no = "+"+"<?php echo $_GET['phone_no'] ?>";
            var image_url = "<?php echo $_GET['image_url'] ?>";
            //image_url=image_url.replace("-","_ ");
            //alert(phone_no);

            $(document).ready(function() {

                admin_access_token = $.cookie('admin_access_token');

                if (admin_access_token == null)
                {
                    // if access token is not set in the cookies.
                    $('#loader-main').show();
                    $('.container').hide();
                    location.href = 'login.php'
                }

                // place user profile data
                $('#usr_name').html(username);
                $('#usr_email').html(email);
                $('#usr_phone').html(phone_no);
                document.getElementById("image_dynamic").innerHTML = "<img style='height: 200px; width: 200px;' src='" + image_url + "' class'img-responsive' />";




    //                $.ajax({
    //                    type: "POST",
    //                    //url: "index.php?action=request_user_info",
    //                    url: "<?php echo $BaseURL; ?>/user_details",
    //                    dataType: "JSON",
    //                    async: false,
    //                    data: {access_token: $.cookie('admin_access_token'),
    //                        user_id: customer_id
    //                    },
    //                    success: function(data) {
    //                        console.log(data);
    ////                            if (data['status'] == 0) {
    ////                                $('#status').html('Shop Closed');
    ////                                }
    ////                                else {
    ////                              $('#status').html('Shop Open');
    ////
    ////                            }
    //
    //                        $('#usr_name').html(data['user_data'][0]['user_name']);
    //                        $('#usr_email').html(data['user_data'][0]['user_email']);
    //                        $('#usr_phone').html(data['user_data'][0]['phone_no']);
    //                        document.getElementById("image_dynamic").innerHTML = "<img style='height: 200px; width: 200px;' src='" + data["user_data"][0]['user_image'] + "' class'img-responsive' />";

    //                                str = "<thead>";
    //                                str += "                                <tr>";
    //                                str += "                                      <th width='5%'>ID</th>";
    //                                str += "                                      <th width='15%'>Technician Name</th>";
    //                                str += "                                      <th width='15%'>Date</th>";
    //                                str += "                                      <th width='5%'>Rating</th>";
    //                                str += "                                      <th width='5%'>Tip</th>";
    //                                str += "                                      <th width='10%'>Charge</th>";
    //                                str += "                                      <th width='45%'>Services</th>";
    //                                str += "                                  </tr>";
    //                                str += "</thead>";
    //                                str += "  <tfoot>";
    //                                str += "    <tr>";
    //                                str += "                                      <th width='5%'>ID</th>";
    //                                str += "                                      <th width='15%'>Technician Name</th>";
    //                                str += "                                      <th width='15%'>Date</th>";
    //                                str += "                                      <th width='5%'>Rating</th>";
    //                                str += "                                      <th width='5%'>Tip</th>";
    //                                str += "                                      <th width='10%'>Charge</th>";
    //                                str += "                                      <th width='45%'>Services</th>";
    //                                str += "   </tr>";
    //                                str += " </tfoot>";
    //
    //
    //                                if (data["log"] != 0) {
    //                                    length = data["engagements_data"].length;
    //
    //                                    for (var i = 0; i < length; i++) {
    //                                        var j = i + 1;
    //
    //                                        str += "                               <tr>";
    //                                        str += "                                     <td>" + j + "</td>";
    //                                        str += "                                     <td>" + data["engagements_data"][i]['technician_name'] + "</td>";
    //                                        str += "                                     <td>" + data["engagements_data"][i]['start_time'] + "</td>";
    //                                        str += "                                     <td>" + data["engagements_data"][i]['rating'] + "</td>";
    //                                        str += "                                     <td>$" + data["engagements_data"][i]['tip'] + "</td>";
    //                                        str += "                                     <td>$" + data["engagements_data"][i]['total_cost'] + "</td>";
    //                                        str += "                                     <td>" + data["engagements_data"][i]['services'] + "</td>";
    //                                        str += "                                 </tr>";
    //
    //
    //
    //                                    }
    //
    //
    //                                }
    //                                else
    //                                {
    //                                    str += "                               <tr>";
    //                                    str += "                                     <td></td>";
    //                                    str += "                                     <td>No data available</td>";
    //                                    str += "                                     <td></td>";
    //                                    str += "                                     <td></td>";
    //                                    str += "                                     <td></td>";
    //                                    str += "                                     <td></td>";
    //                                    str += "                                     <td></td>";
    ////                                    str += "                                 </tr>";
    ////
    ////                                }
    ////                                str += "</tbody> ";
    ////                                $('#example1').html(str);
    //
    //                    },
    //                    error: function(error, b, c) {
    //                        alert(error + " " + b + " " + c)
    //                        alert("Something went wrong");
    //                    }
    //
    //                });

                var table = $('#example1').DataTable({
                    "iDisplayLength": [50],
                });

                // Setup - add a text input to each footer cell
                $('#example1 tfoot th').each(function() {
                    var title = $('#example1 thead th').eq($(this).index()).text();
                    $(this).html('<input type="text" placeholder="' + title + '" />');
                });

                // DataTable


                // Apply the filter
                table.columns().eq(0).each(function(colIdx) {
                    $('input', table.column(colIdx).footer()).on('keyup change', function() {
                        table
                                .column(colIdx)
                                .search(this.value)
                                .draw();
                    });
                });


    //                $('.close1, #fade').live('click', function() { //When clicking on the close or fade layer...
    //                    $('#fade , .popup_block').fadeOut(function() {
    //                        //$('#fade, a.close').remove();  //fade them both out
    //                    });
    //                    return false;
    //
    //                });



            });

//            $('a.poplight5[href^=#]').click(function(e)
//            {
//                var popID = $(this).attr('rel'); //Get Popup Name
//                var popURL = $(this).attr('href'); //Get Popup href to define size
//                //Pull Query & Variables from href URL
//                var query = popURL.split('?');
//                var dim = query[1].split('&');
//                var popWidth = dim[0].split('=')[1]; //Gets the first query string value
//                //Fade in the Popup and add close button
//                $('#' + popID).fadeIn().css({'width': Number(popWidth)}).prepend('<a href="#" class="close1" style="opacity: 1"></a>');
//                //Define margin for center alignment (vertical   horizontal) - we add 80px to the height/width to accomodate for the padding  and border width defined in the css
//                var popMargTop = ($('#' + popID).height() + 80) / 2;
//                var popMargLeft = ($('#' + popID).width() + 80) / 2;
//                //Apply Margin to Popup
//                $('#' + popID).css({
//                    'margin-top': -popMargTop,
//                    'margin-left': -popMargLeft
//                });
//                //Fade in Background
//                $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
//                $('#fade').css({'filter': 'alpha(opacity=40)'}).fadeIn(); //Fade in the fade layer - .css({'filter' : 'alpha(opacity=80)'}) is used to fix the IE Bug on fading transparencies
//                return false;
//
//            });
//
//
//
//
//            function removemodal() {
//                $('#fade , .popup_block').fadeOut(function() {
//                    //$('#fade, a.close').remove();  //fade them both out
//                });
//            }
//
//            function logoutadmin() {
//                $.removeCookie('admin_access_token');
//                location.href = 'login.php'
//            }

    //        function change_status() {
    //
    //
    //            $.ajax({
    //                type: "Post",
    //                url: "index.php?action=change_shop_status",
    //                dataType: "JSON",
    //                async: false,
    //                data: {admin_access_token: $.cookie('admin_access_token')},
    //                success: function(data) {
    //
    //                    if (data == 0) {
    //                        $('#status').html('Shop Closed');
    //                        $('#question').html('Are you sure to open the shop?')
    //                    }
    //                    else {
    //                        $('#status').html('Shop Open');
    //                        $('#question').html('Are you sure to close the shop?')
    //                    }
    //
    //                    $('#fade , .popup_block').fadeOut(function() {
    //                        //$('#fade, a.close').remove();  //fade them both out
    //                    });
    //
    //
    //                },
    //                error: function(error) {
    //                    alert("Something went wrong");
    //                }
    //
    //            });
    //
    //        }



        </script>      



    </body>
</html>
