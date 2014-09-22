<?php
include 'CommonPath.php';
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

        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/demo_page.css" rel="stylesheet" />
        <link href="css/demo_table.css" rel="stylesheet" />
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="css/dataTables.tableTools.css">
        <link href="css/common_style.css" rel="stylesheet">
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
            #btn12{
                background-color: #BBC4F6;
                width: 140px;
                height: 30px;
                font-size: 14px;
                color: #ffffff;
                outline: none !important;
                box-shadow: none !important;
                text-align: center;
            }
            #buttondiv{
                margin-top: 20px;
                text-align: center;
            }
        </style>


    </head>
    <body>
        <?php include 'popup.php'; ?>
        <?php include 'header.php'; ?>

        <div style="margin-top: 2%;padding-left: 40%;"><h1>Users Information</h1></div>
        <!--            <hr>-->

        <div id="table2" class="table-alignment">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example1">
                <thead>
                    <tr>
                        <th width="1%"><center> ID</center></th>
                <th width="3%"><center>Name</center></th>
                <th width="1%"><center>Image</center></th>
                <th width="4%"><center>Email</center></th>
                <th width="3%"><center>Phone No</center></th>
                <th width="2%"><center>DOB</center></th>
                <th width="4%"><center>Registration Date & Time</center></th>
                <th width="4%"><center>Last Login Date & Time</center></th>
                <th width="1%">Edit User</th> 

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



        <!-- Modal -->
        <div class="modal fade bs-example-modal-lg" id="basicModalEdit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">            
                    <div class="modal-body">
                        <div>
                            <div class="popup-header">
                                Edit User
                            </div>
                            <form id="userform" name="updateUser" enctype="multipart/form-data">
                                <div id="popup-body">
                                    <div class="form-group">
                                        <label for="Username">User Name</label>
                                    </div>
                                    <input type="text" class="form-control" name="user_name" id="editusername" placeholder="User Name">
                                    <input type="hidden" name="user_id" id="edituserid">
                                    <input type="hidden" name="access_token" id="editaccesstoken">
                                    <input type="hidden" name="phone" id="edit_phone">
                                    <input type="hidden" name="pic" id="editpicvar">
                                    <div class="form-group">
                                        <label for="Phone_no">Phone No</label>
                                    </div>
                                    <input type="text" class="form-control" style="width: 8%;" name="county_code" id="editcode" maxlength="3" placeholder="Code">
                                    <input type="text" class="form-control" style="width: 57%;" name="phone_no" id="editpno" maxlength="10" placeholder="Phone Number">

                                    <div class="form-group">
                                        <label for="dob">DOB</label>
                                    </div>
                                    <input type="text" class="form-control" name="dob" id="editdob" placeholder="DD/MM/YYYY">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                    </div>
                                    <input type="file" class="form-control file-control" name="image" id="editpic" value="">
                                    <span id="userpicname"></span>
                                </div>
                                <div id="buttondiv">
                                    <button type="button" id="btn12" data-loading-text="Saving..." class="update_user_btn">Update</button>
                                </div>
                                <div id="loader" style="margin-left: 46%;margin-top: 2%">
                                    <img src="assets/image/loader.gif" alt="processing">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <footer>
<!--                <p align="center">&copy; 2014. All rights reserved.</p>-->
        </footer>


        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->



        <script>

            var date = new Date();
            var timeZone = -date.getTimezoneOffset();

            $(document).ready(function()
            {
                $('#loader').hide();
                $("#activeuser").addClass('active');
                $('#example1').dataTable({
                    "bProcessing": true,
                    "bServerSide": true,
                    "bAutoWidth": false,
                    "pagingType": "full_numbers",
                    "sAjaxSource": "searchuser.php?timeZone=" + timeZone,
                    dom: 'T<"clear">lfrtip',
                    tableTools: {
                        "aButtons": [
                            {
                                "sExtends": "copy",
                                "mColumns": [0,1,3,4,5,6,7]
                            },
                            {
                                "sExtends": "csv",
                                "mColumns": [0,1,3,4,5,6,7]
                            },
//                            {
//                                "sExtends": "xls",
//                                "mColumns": [0,1,3,4,5,6,7]
//                            },
                        ],
                        "sSwfPath": "swf/copy_csv_xls_pdf.swf"
                    }
                });
            });


            $("a.edituserdetails").live("click", function(e) {
                e.preventDefault();
                var fileInput = document.getElementById('editpic');
                var split_code;
                var split_number;
                var phone_number;
                $("#edituserid").val("");
                $("#editusername").val("");
                $("#editcode").val("");
                $("#editpno").val("");
                $("#editdob").val("");
                $("#userpicname").html("");
                var data = $(this).attr("myvalues").split("sepa###rator");
                $("#edituserid").val(data[0]);
                $("#editusername").val(data[1]);

                split_code = data[2].substring(0, 3);
                split_number = data[2].substring(3, data[2].length);

                $("#editcode").val(split_code);
                $("#editpno").val(split_number);

                $("#editdob").val(data[3]);
                $("#editaccesstoken").val($.cookie("admin_access_token"));

            });

            //========= Update user details==========
            $("button.update_user_btn").live("click", function() {

                $('#buttondiv').hide();
                $('#loader').show();

                phone_number = $("#editcode").val() + $("#editpno").val();
                $("#edit_phone").val(phone_number);


                var fileInput = document.getElementById('editpic');
                if (fileInput.files.length > 0)
                    $("#editpicvar").val("1");
                else
                    $("#editpicvar").val("0");

                var formData = new FormData(document.forms.namedItem("updateUser"));
                $.ajax({
                    type: "POST",
                    url: 'http://dev.miniluxe.com:3002/edit_user',
                    dataType: "json",
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {

                        if (response["error"])
                        {

                            $("#basicModalEdit").modal('hide');
                            $("#msgModal").modal();
                            $("#msg-body").html(response["error"]);
                        }

                        else
                        {
                            $('#loader').hide();
                            $("#basicModalEdit").modal('hide');
                            $("#msgModal").modal();
                            $("#msg-body").html("Your Profile Updated Successfully");

                            $(document).click(function() {
                                window.location.reload();
                            });

                            setTimeout(function() {
                                window.location.reload();
                            }, 4000);
                        }


                    }
                });
            });


        </script>


        <!--        
                <script>
                    var admin_access_token;
                    $(document).ready(function() {
        
        //                 admin_access_token = $.cookie('admin_access_token');
                    if ($.cookie('admin_access_token') == null)
                    {
                    // if access token is not set in the cookies.
                    $('#loader-main').show();
                            $('.container').hide();
                            location.href = 'login.php'
        
        
                    }
        
        
        
        
        //                    $.ajax({
        //                        type: "Post",
        //                        url: "index.php?action=request_all_user_info",
        //                        dataType: "JSON",
        //                        async: false,
        //                        data: {admin_access_token: $.cookie('admin_access_token')},
        //                        success: function(data) {
        //                            console.log(data);
        //                            if (data['status'] == 0) {
        //                                $('#status').html('Shop Closed');
        //                            }
        //                            else {
        //                                $('#status').html('Shop Open');
        //
        //                            }
        //
        //                            str = "<thead>";
        //                            str += "                                <tr>";
        //                            str += "                                      <th width='5%'>ID</th>";
        //                            str += "                                      <th width='10%'>Image</th>";
        //                            str += "                                      <th width='20%'>Name</th>";
        //                            str += "                                      <th width='20%'>Email</th>";
        //                            str += "                                      <th width='10%'>Phone No.</th>";
        //                            str += "                                      <th width='5%'>Date of Birth</th>";
        //                            str += "                                      <th width='10%'>Registration Date</th>";
        //                            str += "                                      <th width='10%'>Login Date</th>";
        //                            str += "                                      <th width='10%'></th>";
        //                            str += "                                  </tr>";
        //                            str += "</thead>";
        //                            str += "  <tfoot>";
        //                            str += "    <tr>";
        //                            str += "                                      <th width='5%'>Id</th>";
        //                            str += "                                      <th width='10%'  style='visibility:hidden'>Image</th>";
        //                            str += "                                      <th width='20%'>Name</th>";
        //                            str += "                                      <th width='20%'>Email</th>";
        //                            str += "                                      <th width='10%'>Phone No.</th>";
        //                            str += "                                      <th width='5%'>Date of Birth</th>";
        //                            str += "                                      <th width='10%'>Registration Date</th>";
        //                            str += "                                      <th width='10%'>Login Date</th>";
        //                            str += "                                      <th width='10%'></th>";
        //                            str += "   </tr>";
        //                            str += " </tfoot>";
        //
        //                            str += "<tbody> ";
        //                            for (var i = 0; i < data['response']['data'].length; i++) {
        //                                var j = i+1;
        //                                str += "                               <tr>";
        //                                str += "                                     <td>" + j + "</td>";
        //                                str += "                                     <td><img src='http://miniluxe.s3.amazonaws.com/user_profile/" + data['response']['data'][i]['user_image'] + "' width='42' height='42'></td>";
        //                                str += "                                     <td>" + data['response']['data'][i]['user_name'] + "</td>";
        //                                str += "                                     <td>" + data['response']['data'][i]['user_email'] + "</td>";
        //                                str += "                                     <td>" + data['response']['data'][i]['phone_no'] + "</td>";
        //                                str += "                                     <td>" + data['response']['data'][i]['dob'] + "</td>";
        //                                str += "                                     <td>" + data['response']['data'][i]['register_date'] + "</td>";
        //                                str += "                                     <td>" + data['response']['data'][i]['login_date'] + "</td>";
        //                                str += "                                     <td><a href='customerinfo?action=" + data['response']['data'][i]['user_id'] + "'>view</a></td>";
        //                                str += "                                 </tr>";
        //
        //
        //                            }
        //                            str += "</tbody> ";
        //
        //                            $('#example').html(str);
        //
        //
        //                        },
        //                        error: function(error) {
        //                            alert("Something went wrong");
        //                        }
        //
        //                    });
        
                    // DataTable
        //                    var table = $('#example').DataTable({
        //                        "iDisplayLength": [50],
        //                    });
        //
        //                    // Setup - add a text input to each footer cell
        //                    $('#example tfoot th').each(function() {
        //                        var title = $('#example thead th').eq($(this).index()).text();
        //                        $(this).html('<input type="text" placeholder="' + title + '" />');
        //                    });
        //
        //                    // Apply the filter
        //                    table.columns().eq(0).each(function(colIdx) {
        //                        $('input', table.column(colIdx).footer()).on('keyup change', function() {
        //                            table
        //                                    .column(colIdx)
        //                                    .search(this.value)
        //                                    .draw();
        //                        });
        //                    });
        
        
        
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
        //                    $('.close1, #fade').live('click', function() { //When clicking on the close or fade layer...
        //                        $('#fade , .popup_block').fadeOut(function() {
        //                            //$('#fade, a.close').remove();  //fade them both out
        //                        });
        //                        return false;
        //
        //                    });
        //
        //
        //
        //
        //
        //                });
        //
        //                function removemodal() {
        //                    $('#fade , .popup_block').fadeOut(function() {
        //                        //$('#fade, a.close').remove();  //fade them both out
        //                    });
        //                }
        //
        //
        //                function logoutadmin() {
        //                    $.removeCookie('admin_access_token');
        //                    location.href = 'login.php'
        //                }
        //
        //                function change_status() {
        //
        //
        //                    $.ajax({
        //                        type: "Post",
        //                        url: "index.php?action=change_shop_status",
        //                        dataType: "JSON",
        //                        async: false,
        //                        data: {admin_access_token: $.cookie('admin_access_token')},
        //                        success: function(data) {
        //                            if (data == 0) {
        //                                $('#status').html('Shop Closed');
        //                                $('#question').html('Are you sure to open the shop?')
        //                            }
        //                            else {
        //                                $('#status').html('Shop Open');
        //                                $('#question').html('Are you sure to close the shop?')
        //                            }
        //
        //                            $('#fade , .popup_block').fadeOut(function() {
        //                                //$('#fade, a.close').remove();  //fade them both out
        //                            });
        //
        //
        //
        //
        //
        //                        },
        //                        error: function(error) {
        //                            alert("Something went wrong");
        //                        }
        //
        //                    });
        //
        //                }
        //
        //
        //
        //
        //
        //
        //
        
        
        
                </script>    -->


    </body>
</html>
