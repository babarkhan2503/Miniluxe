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
         <link href="css/common_style.css" rel="stylesheet">


    </head>
    <body >
        <?php include 'header.php'; ?>
         <?php include 'popup.php'; ?>
        <div style="margin-top: 50px;"><h3 style="margin-top: -28px;"><center>Technician Profile</center></h3></div>
        <div style="clear: both;width:100%;margin-top: -82px;">
            
            <div id="info">
                <div id ="image_dynamic"></div>
                <div id ="relateddata">
                    <div id="profile" style="margin-top: 21%;">
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
            <thead> <h3><center>Technician Information</center></h3>
                <tr>
                    <!-- ("technician_id", "technician_name", "technician_image","technician_email", "phone_no", "dob","is_logout","earnings","last_7_earnings","last_30_earnings","last_90_earnings","rating", "register_date", "login_date")-->
                    <th width="1%"><center>Engage ID</center></th>
                    <th width="2%"><center>Start Time</center></th>
                     <th width="2%">End Time</th>
                    <th width="1%"><center>Rating</center></th>
                    <th width="2%"><center>Cost($)</center></th>
                    <th width="2%"><center>Tip($)</center></th>
                    <th width="4%"><center>User Name</center></th>
                    <th width="5%"><center>Services</center></th>
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
        

    <footer>
<!--                <p align="center">&copy; 2014. All rights reserved.</p>-->
    </footer>


<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" language="javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="assets/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/jquery.dataTables.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<script src="js/popup.js"></script>

<script>

           var date = new Date();
           var timeZone = -date.getTimezoneOffset();
           $(document).ready(function()
           {
               $("#activetechnician").addClass('active');
               $('#example2').dataTable({
                   "bProcessing": true,
                   "bServerSide": true,
                   "bAutoWidth": false,
                   "pagingType": "full_numbers",
                   "sAjaxSource": "searchtechniciandetail.php?timeZone=" + timeZone + "&userId=<?php echo $_GET['action'] ?>",
                   dom: 'T<"clear">lfrtip',
                   tableTools: {
                       "aButtons": [
                           {
                               "sExtends": "copy",
                               "mColumns": [0, 1, 7, 3, 4, 5, 6, 8, 9, 10]
                           },
                           {
                               "sExtends": "csv",
                               "mColumns": [0, 1, 7, 3, 4, 5, 6, 8, 9, 10]
                           },
                           {
                               "sExtends": "xls",
                               "mColumns": [0, 1, 7, 3, 4, 5, 6, 8, 9, 10]
                           },
                           {
                               "sExtends": "print",
                               "mColumns": [0, 1, 7, 3, 4, 5, 6, 8, 9, 10]
                           },
                           {
                               "sExtends": "pdf",
                               "mColumns": [0, 1, 7, 3, 4, 5, 6, 8, 9, 10],
                               "sPdfOrientation": "landscape"
                           }
                       ],
                       "sSwfPath": "swf/copy_csv_xls_pdf.swf"
                   }
               });
           });
</script>


<script>
    var tech_id = "<?php echo $_GET['action'] ?>";
    var admin_access_token;
    var technician_name = "<?php echo $_GET['technician_name'] ?>";
    technician_name = technician_name.replace("_", " ");
    var email = "<?php echo $_GET['email'] ?>";
    var phone_no = "+"+"<?php echo $_GET['phone_no'] ?>";
    var image_url = "<?php echo $_GET['image_url'] ?>";
    //alert(email);
    $(document).ready(function() {

        admin_access_token = $.cookie('admin_access_token');

        if (admin_access_token == null)
        {
            // if access token is not set in the cookies.
            $('#loader-main').show();
            $('.container').hide();
            location.href = 'login.php'
        }


        $('#usr_name').html(technician_name);
        $('#usr_email').html(email);
        $('#usr_phone').html(phone_no);
        document.getElementById("image_dynamic").innerHTML = "<img style='height: 200px; width: 200px;' src='" + image_url + "' class'img-responsive' />";


        var table = $('#example1').DataTable({
            "iDisplayLength": [50],
        });
        // Setup - add a text input to each footer cell
        $('#example1 tfoot th').each(function() {
            var title = $('#example1 thead th').eq($(this).index()).text();
            $(this).html('<input type="text" placeholder="' + title + '" />');
        });


        // Apply the filter
        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).footer()).on('keyup change', function() {
                table
                        .column(colIdx)
                        .search(this.value)
                        .draw();
            });
        });

        
//                    $('.close1, #fade').live('click', function() { //When clicking on the close or fade layer...
//                        $('#fade , .popup_block').fadeOut(function() {
//                            //$('#fade, a.close').remove();  //fade them both out
//                        });
//                        return false;
//
//                    });

    });
    
    
//    
//    $('a.poplight5[href^=#]').click(function(e)
//        {
//            var popID = $(this).attr('rel'); //Get Popup Name
//            var popURL = $(this).attr('href'); //Get Popup href to define size
//            //Pull Query & Variables from href URL
//            var query = popURL.split('?');
//            var dim = query[1].split('&');
//            var popWidth = dim[0].split('=')[1]; //Gets the first query string value
//            //Fade in the Popup and add close button
//            $('#' + popID).fadeIn().css({'width': Number(popWidth)}).prepend('<a href="#" class="close1" style="opacity: 1"></a>');
//            //Define margin for center alignment (vertical   horizontal) - we add 80px to the height/width to accomodate for the padding  and border width defined in the css
//            var popMargTop = ($('#' + popID).height() + 80) / 2;
//            var popMargLeft = ($('#' + popID).width() + 80) / 2;
//            //Apply Margin to Popup
//            $('#' + popID).css({
//                'margin-top': -popMargTop,
//                'margin-left': -popMargLeft
//            });
//            //Fade in Background
//            $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
//            $('#fade').css({'filter': 'alpha(opacity=40)'}).fadeIn(); //Fade in the fade layer - .css({'filter' : 'alpha(opacity=80)'}) is used to fix the IE Bug on fading transparencies
//            return false;
//
//        });
//    
//    
//    
//
//    function removemodal() {
//        $('#fade , .popup_block').fadeOut(function() {
//            //$('#fade, a.close').remove();  //fade them both out
//        });
//    }
//
//    function logoutadmin() {
//        $.removeCookie('admin_access_token');
//        location.href = 'login.php'
//    }
//
//    function change_status() {
//
//
//        $.ajax({
//            type: "Post",
//            url: "index.php?action=change_shop_status",
//            dataType: "JSON",
//            async: false,
//            data: {admin_access_token: $.cookie('admin_access_token')},
//            success: function(data) {
//
//                if (data == 0) {
//                    $('#status').html('Shop Closed');
//                    $('#question').html('Are you sure to open the shop?')
//                }
//                else {
//                    $('#status').html('Shop Open');
//                    $('#question').html('Are you sure to close the shop?')
//                }
//
//                $('#fade , .popup_block').fadeOut(function() {
//                    //$('#fade, a.close').remove();  //fade them both out
//                });
//
//
//            },
//            error: function(error) {
//                alert("Something went wrong");
//            }
//
//        });
//
//    }
//









</script>      


</body>
</html>
