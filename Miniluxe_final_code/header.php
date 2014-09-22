<style>
    .navbar-default {
                background-color:#EDF0FD;
            }
            .navbar-default .navbar-nav>li>a {
                color: #8393E9 ! important;
            }
            .navbar-default .navbar-nav>li>a:hover{
                color: #8393E9 ! important;
            }
            .dropdown-menu {
                margin: 5px 0 0;
                border-radius:0px;
                box-shadow: 4px 4px 1px rgba(0,0,0,0.2) ! important;
            }
            .navbar-collapse {     
               background-color: rgb(237, 240, 252);
                padding-right: 50px;
                padding-left: 50px;
                padding-top: 11px;
            }
            .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav>.active>a:focus{
                background:#bbc4f6 ! important;
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
            .dropdown-toggle{
              -webkit-box-shadow:none;
              box-shadow: none;
              border-radius: 4px;
              width: 115px;" 
            }
            .btn-group.open .btn.dropdown-toggle {
              background-color: #bbc4f6;
            }
</style>
<div id="nav">
            <div class="navbar navbar-default">                 
                <div id="navigation" role="navigation">
                    <div class="collapse navbar-collapse" style="height: 105px;">
                        <div id="logo" style="float:left;">
                            <img src="assets/image/logo.png" id="logo_cntr">
                        </div>
                        <ul class="nav navbar-nav" style="margin: 19px ! important;">

                            <li id="activeuser"><a href="users.php">Users</a></li>

                            <li id="activetechnician"><a href="technicians.php">Technicians</a></li>

                            <li id="activeservice"><a href="services.php">Services</a></li>



                            <li id="activesession"><a href="session.php" >Sessions</a>

                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3" position="relative">

                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="closesessions.php">In Sessions</a></li>

                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="busytechnician.php">Busy Technician</a></li>

                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="idletechnician.php">Idle Technician</a></li>

                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="waitinguser.php">Current Waitlist</a></li>

                                </ul>

                            </li>

                        </ul>
                        <div class="btn-group pull-right" style="margin-top: 5px;">
                            <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                                 Admin	<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" style="min-width: 120px;height: 48px;">
                                <li><a style="padding-left: 12px;" data-toggle="modal" data-target="#basicModal"><span id="edit_form">Change Password</span></a></li>
                                <li><a href="#?w=400" rel="popup_name5" class="poplight5" style="padding: 3px 12px;">Logout</a></li>
                            </ul>
                            
                        </div>

                    </div> 

                </div>
               <div style="height: 5px;width:100%;background: #bbc4f6;"></div>
            </div>
        </div>