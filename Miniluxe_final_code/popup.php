
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

<!--            <div id="popup_name_shop_status" class="popup_block" style="height:140px;">
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
            </div>-->


<!--<div id="popup_name_shop_status" class="popup_block" style="height:259px;">
    <div style="margin-left: 20%;">
        <form>
            <div class="form-group">
                <label for="oldpassword">Old Password</label>
                <input type="password" class="form-control" name="oldpassword" placeholder="Old Password">
            </div>
            <div class="form-group">
                <label for="newpassword">New Password</label>
                <input type="password" class="form-control" name="newpassword" placeholder="New Password">
            </div>

            <div class="form-group">
                <label for="confirmpassword">Confirm Password</label>
                <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password">
            </div>


            <button type="button" id="submit_form" class="btn btn-primary">Login</button>
        </form>
    </div>

</div>-->
<!--<link href="css/common_style.css" rel="stylesheet" type="text/css"/>-->
<div class="modal fade bs-example-modal-lg" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">            
            <div class="modal-body">
                <div class="popup-header">
                    Change Password
                </div>
                <div  id="body_panel">
                    <label style="color: green;" id="changeSuccess"></label>
                    <form>
                        <div id="old_password" class="form-group">
                            <label for="oldpassword">Old Password</label>
                        </div>
                        <input type="password" class="form-control" name="oldpassword" id="oldpassword" placeholder="Old Password">
                        <div id="new_password" class="form-group">
                            <label for="newpassword">New Password</label>
                        </div>
                        <input type="password" class="form-control" name="newpassword" id="newpassword" placeholder="New Password">
                        <div id="confirm_password"  class="form-group">
                            <label for="confirmpassword">Confirm Password</label>
                        </div>
                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" placeholder="Confirm Password">
                        <div id="button">
                            <button type="button" id="submit_form" class="btn1">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade bs-example-modal-lg" id="msgModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" id="msg-body">

            </div>
        </div>
    </div>
</div>


<div id="password_changed" class="popup_block" style="height:259px;">
    <div style="margin-left: 20%;">
        Password updated
    </div>

</div>


<div id="edit_user_form" class="popup_block" style="height:259px;">

    <form role="form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" 
                   placeholder="Enter Name">
        </div>
        <div class="form-group">
            <label for="inputfile">File input</label>
            <input type="file" id="inputfile">
            <p class="help-block">Example block-level help text here.</p>
        </div>
        <div class="checkbox">
            <label>
                <input type="checkbox"> Check me out
            </label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>


</div>



