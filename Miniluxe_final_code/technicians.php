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
        <link href="css/common_style.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
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

        <?php include 'header.php'; ?>
        <?php include 'popup.php'; ?>


        <div style="padding-top:1%;margin-left: 34%;"><h1>Technicians Information</h1></div>

        <div id="table2" class="table-alignment">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                <thead>
                    <tr>

                        <th width="1%"> <center>ID</center></th>
                <th width="4%"><center>Name</center></th>
                <th width="1%"><center>Image</center></th>
                <th width="4%"><center>Email</center></th>
                <th width="5%"><center>Phone No</center></th>
                <th width="2%"><center>DOB</center></th>
                <th width="4%"><center>Today's Earnings($)</center></th>
                <th width="1%"><center>Last 7 Days Earnings($)</center></th>
                <th width="2%"><center>Last 30 Days Earnings($)</center></th>
                <th width="2%"><center>Last 90 Days Earnings($)</center></th>
                <th width="1%"><center>Rating</center></th>
                <th width="4%"><center>Registration Date & Time</center></th>
                <th width="5%"><center>Last Login Date & Time</center></th>
                <th width="4%"><center>Status</center></th>
                <th width="4%"><center>Location</center></th>
                <th width="3%"><center>Edit Technician</center></th>

                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="15" class="dataTables_empty">Loading data from server</td>
                    </tr>
                </tbody>
                <tfoot>

                </tfoot>
            </table>
        </div>

<!--        <div id="loader1" style="width: 5%;height: 5%;margin-left: 47%;margin-top: -7%;">
    <img src="assets/image/loader_123.gif" alt="processing">
</div>-->


        <div class="modal fade bs-example-modal-lg" id="basicModalEdit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">            
                    <div class="modal-body">
                        <div>
                            <div class="popup-header">
                                Edit Technician
                            </div>
                            <form id="userform" name="updateUser" enctype="multipart/form-data">
                                <div id="popup-body">
                                    <div class="form-group">
                                        <label for="Username">Technician Name</label>
                                    </div>
                                    <input type="text" class="form-control" name="user_name" id="editusername" placeholder="User Name">
                                    <input type="hidden" name="user_id" id="edituserid">
                                    <input type="hidden" name="access_token" id="editaccesstoken">
                                    <input type="hidden" name="phone" id="edit_phone">
                                    <input type="hidden" name="pic" id="editpicvar">
                                    <div class="form-group">
                                        <label for="Phone">Phone No</label>
                                    </div>
<!--                                    <input type="text" class="form-control" name="phone" id="editpno" placeholder="Phone Number">-->
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




        <!-- Le javascript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->



        <script>

            var date = new Date();
            var timeZone = -date.getTimezoneOffset();
            $(document).ready(function()
            {   
                $('#loader').hide();
                $("#activetechnician").addClass('active');
                
                $('#example2').dataTable({
                    "bProcessing": true,
                    "bServerSide": true,
                    "bAutoWidth": false,
                    "pagingType": "full_numbers",
                    "sAjaxSource": "searchtechnician.php?timeZone=" + timeZone,
                    dom: 'T<"clear">lfrtip',
                    tableTools: {
                        "aButtons": [
                            {
                                "sExtends": "copy",
                                "mColumns": [0,1,3,4,5,6,7,8,9,10,11,12,13,14]
                            },
                            {
                                "sExtends": "csv",
                                "mColumns": [0,1,3,4,5,6,7,8,9,10,11,12,13,14]
                            },
//                            {
//                                "sExtends": "xls",
//                                "mColumns": [0,1,3,4,5,6,7,8,9,10,11,12,13,14]
//                            },
                        ],
                        "sSwfPath": "swf/copy_csv_xls_pdf.swf"
                    }
                });
                
              
                
            });



            $("a.edituserdetails").live("click", function(e) {
                e.preventDefault();
                var split_code;
                var split_number;
                var phone_number;
                var fileInput = document.getElementById('editpic');
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

                if (fileInput.files[0].size > 0)
                    $("#editpicvar").val("1");
                else
                    $("#editpicvar").val("0");

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
                    url: 'http://dev.miniluxe.com:3002/edit_technician',
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


    </body>
</html>
