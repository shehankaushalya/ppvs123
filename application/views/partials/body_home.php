<style>
.label {
    color: white;
    padding: 8px;
    font-family: Arial;
}

div.dataTables_wrapper div.dataTables_length label {
    /* font-weight: normal; */
    /* text-align: right; */
    /* white-space: nowrap; */
    /* margin-top: 6px; */
    /* padding-top: 0px; */
    /* position: absolute; */
    margin-left: 0%;
    background-color: #fff;
    /* margin-top: 450px; */
    /* margin-right: 2px; */
}

div.dataTables_wrapper div.dataTables_filter {
    text-align: right;
    /* white-space: nowrap; */
    /* margin-left: 60%; */
    /* margin-top: 30px; */
    background-color: #fff;
    /* position: fixed; */
    z-index: 1;
    /* margin-bottom: 10px; */
}

div.dataTables_wrapper div.dataTables_length label {
    /* font-weight: normal; */
    text-align: left;
    /* white-space: nowrap; */
    /* margin-left: 40px; */
    margin-top: 45px;
    background-color: #fff;
    /* padding-top: 0px; */
    position: fixed;
    z-index: 1;
}

table.dataTable thead>tr>th.sorting_asc,
table.dataTable thead>tr>th.sorting_desc,
table.dataTable thead>tr>th.sorting,
table.dataTable thead>tr>td.sorting_asc,
table.dataTable thead>tr>td.sorting_desc,
table.dataTable thead>tr>td.sorting {
    position: sticky;
    top: 182px;
}

.table>caption+thead>tr:first-child>td,
.table>caption+thead>tr:first-child>th,
.table>colgroup+thead>tr:first-child>td,
.table>colgroup+thead>tr:first-child>th,
.table>thead:first-child>tr:first-child>td,
.table>thead:first-child>tr:first-child>th {

    position: sticky;
    top: 105px;
    background-color: #fff;
    height: 60px;
}


.danger {
    background-color: #f44336;
}

li.highlight {
    background-color: red;
}

.form-control[readonly] {
    background-color: #fff;

}

div.dataTables_wrapper div.dataTables_filter label {
    /* font-weight: normal;
        white-space: nowrap; */
    text-align: right;
    margin-top: 4em;
    margin-left: -16em;
    z-index: 1;
    position: fixed;
}

.header-top-area {

    padding-top: 51px;
    border-bottom: #333333;
    border-bottom-style: groove;
}

button.btn.btn-link {
    padding: 0 4px;
}

@media(max-width: 1169px) and (min-width: 992px) {
    .header-top-area {
        position: fixed;
        left: 200px;
        border-bottom: #333333;
        border-bottom-style: groove;
    }

    button.btn.btn-link {
        padding: 0 2px;
    }
}

@media (max-width: 991px) and (min-width: 768px) {
    .mobile-menu-area {
        display: block;
        position: fixed;
        z-index: 10000;
        width: 100%;
        height: 43px;
        top: 0;
    }

    button.btn.btn-link {
        padding: 0 0;
    }

    .header-top-area {
        position: fixed;
        left: 0px;
        top: 5px;
        border-bottom: #333333;
        border-bottom-style: groove;
    }

}

@media (max-width: 767px) {
    .mobile-menu-area {
        display: block;
        position: fixed;
        z-index: 1000;
        width: 100%;
        top: 0;
        height: 40px;

    }

    button.btn.btn-link {
        padding: 0 0;
    }

    .header-top-area {
        position: fixed;
        left: 0px;
        top: 10px;
        overflow: auto;
        height: 100px;
    }

    .custom-datatable-overright .btn {
        padding: 0px 0px;
    }

}

@media screen and (max-width: 767px) {


    div.dataTables_wrapper div.dataTables_filter label,
        {
        text-align: right;
        margin-top: 10em;
        margin-left: 10em;
        z-index: 1;
        position: fixed;

    }
}

/* h1,
h2,
h4 {
    color: black;
} */

input[type="search"] {
    font-size: 14px;
}


.sidebar-nav .metismenu {
    /* top: -4px; */
    margin-top: 4px;
    background: #c2dce624;
    /* position: absolute; */
    border: none;
    /* height: 100%; */
}

.sidebar-nav .metismenu {

    margin-top: 4px;
    margin-left: -250px;
    left: 250px;
    width: 220px;
    background: #fff;
    position: absolute;
    z-index: 1000;
    display: block;

    /* transition: all 0.4s ease 0s; */
}

.mCustomScrollBox {

    /* width: 214px;
    background-color: #fff; */
}

.comment-scrollbar,
.timeline-scrollbar,
.messages-scrollbar,
.project-list-scrollbar {
    /* height: 580px; */
    /* width: 214px;
    background-color: #fff; */
}

@media (min-width: 1200px) {
    .col-lg-10 {

        top: -16px;
    }
        .col-lg-2 {
   
    left: 10%;
	}
	.dropdown-menu-right {
    right: 100px;
    left: auto;
	}
}

@media(max-width: 1200px) and (min-width: 992px) {
    .col-lg-10 {

        top: -16px;
    }
}


span.step {
    background: #000;
    border-radius: 1.2em;
    -moz-border-radius: 1.2em;
    -webkit-border-radius: 1.2em;
    color: #ffffff;
    display: inline-block;
    font-weight: bold;
    line-height: 2.5em;
    margin-left: 10px;
    text-align: center;
    width: 2.5em;
    text-transform: uppercase;
}

/* Red */
</style>
<style>
.callout {
    position: fixed;
    top: 110px;
    right: 40%;
    /* margin-left: 20px; */
    max-width: 300px;
    z-index: 100000000;
}

.callout-header {
    padding: 25px 15px;
    background: #555;
    font-size: 30px;
    color: white;
}

.callout-container {
    padding: 15px;
    /* background-color: #ccc;
    color: black; */
    font-size: 16px;
}

.closebtn {
    position: absolute;
    top: 5px;
    right: 15px;
    color: white;
    font-size: 24px;
    cursor: pointer;
}

.closebtn:hover {
    color: lightgrey;
}
</style>
<style>

@media (max-width: 990px) {
.sidenav {
display:none;
}
}
/* Fixed sidenav, full height */
.sidenav {
  height: 98%;
  width: 215px;
  position: fixed;
  z-index: 1000;
  top: -12px;
  left: 0;
  background-color: #fff;
  overflow-x: hidden;
  padding-top: 0px;
  border-right-style: groove;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */


/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}


/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.sidebar-nav .metismenu ul a {
    padding: 5px;
}

.rotateimg90 {
  -webkit-transform:rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  transform: rotate(90deg);
}
</style>
<body>

    <!-- Start Left menu area -->
  <div class="sidenav">
   
            <div class="">
         <a href="../Home/PpvsHome"><img class="main-logo" style="margin-left:40px"
                        src="<?php echo base_url(); ?>assets/new/img/logo/logo.jpg" alt="" /></a>
               
            </div>

            <div class="">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">


                        <?php if ($this->session->userdata('ProjectView') == "checked") { ?>
                        <li>

                            <a href="../Project/projects" <?php if (uri_string() == 'Project/projects') { ?>
                                style="color:#337ab7; border:outset" <?php } ?>>
                                <img src="<?php echo base_url(); ?>assets/new/img/BodyPNG/project.png">
                                <span class="mini-click-non" style='font-size:12px;'>Projects</span>
                            </a>

                        </li>
                        <?php
                        } ?>
                        <?php if ($this->session->userdata('LocationView') == "checked") { ?>
                        <li>
                            <a href="../Location/ClearLacation" <?php if (uri_string() == 'Location/locationView') { ?>
                                style="color:#337ab7;border:outset" <?php } ?> aria-expanded="false">
                                <img src="<?php echo base_url(); ?>assets/new/img/BodyPNG/location.png"> <span
                                    class="mini-click-non" style='font-size:12px;'>Location</span></a>
                        </li>
                        <?php
                        } ?>

                        <?php if ($this->session->userdata('UserView') == "checked") { ?>
                        <li>
                            <a href="../User/users"
                                <?php if (uri_string() == 'User/users' || uri_string() == 'Permission/permissionView' || uri_string() == 'Assign/assignView') { ?>
                                style="color:#337ab7;border:outset" <?php } ?> aria-expanded="false"></span>
                                <img src="<?php echo base_url(); ?>assets/new/img/BodyPNG/User.png">
                                <span class="mini-click-non" style='font-size:12px;'>Users</span></a>

                        </li>
                        <?php
                        } ?>
                        
                        

                        <?php if ($this->session->userdata('ProgressView') == "checked") { ?>
                        <li>
                            <a href="../Progress/progresses" <?php if (uri_string() == 'Progress/progresses') { ?>
                                style="color:#337ab7;border:outset" <?php } ?>>
                                <img src="<?php echo base_url(); ?>assets/new/img/BodyPNG/report.png">
                                <span class="mini-click-non" style='font-size:12px;'>Project Progress</span>
                            </a>

                        </li>
                        <?php
                        } ?>


                        <li>
                            <a href="../Home/PpvsHome" <?php if (uri_string() == 'Home/PpvsHome') { ?>
                                style="color:#337ab7;border:outset" <?php } ?>></span>
                                <img src="<?php echo base_url(); ?>assets/new/img/BodyPNG/Home.png">
                                <span class="mini-click-non" style='font-size:12px;'>Home</span></a>
                        </li>
                        <li>
                           <br>
                        </li>



                    </ul>
                </nav>
            </div>
        </nav>


    </div>
</div>

    <!-- End Left menu area -->

    <!-- Start Welcome area -->

    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-1 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">

                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <!-- <div class="header-top-area"> -->


            <!-- Mobile Menu start -->
            <div class="QR1">
                <div class="mobile-menu-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="mobile-menu">
                                    <nav id="dropdown">
                                        <ul class="mobile-menu-nav">

                                            <?php if ($this->session->userdata('ProjectView') == "checked") { ?>
                                            <li><a data-toggle="collapse" data-target="#Charts"
                                                    href="../Project/projects">Projects
                                                    <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul class="collapse dropdown-header-top">

                                                </ul>
                                            </li>
                                            <?php
                                            } ?>
                                            <?php if ($this->session->userdata('LocationView') == "checked") { ?>
                                            <li><a data-toggle="collapse" data-target="#demoevent"
                                                    href="../Location/ClearLacation">Location
                                                    <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demoevent" class="collapse dropdown-header-top">

                                                </ul>
                                            </li>
                                            <?php
                                            } ?>
                                            <?php if ($this->session->userdata('UserView') == "checked") { ?>
                                            <li><a data-toggle="collapse" data-target="#demopro"
                                                    href="../User/users">Users
                                                    <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demopro" class="collapse dropdown-header-top">

                                                </ul>
                                            </li>
                                            <?php
                                            } ?>

                                            <?php if ($this->session->userdata('ProgressView') == "checked") { ?>
                                            <li><a data-toggle="collapse" data-target="#demopro1"
                                                    href="../Progress/progresses">Project Progress
                                                    <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="demopro" class="collapse dropdown-header-top">

                                                </ul>
                                            </li>
                                            <?php
                                            } ?>

                                            
                                            <li><a data-toggle="collapse" data-target="#formsmob"
                                                    href="../Home/PpvsHome">Home <span
                                                        class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                                <ul id="formsmob" class="collapse dropdown-header-top">

                                                </ul>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <!-- change password modal start -->
            <div id="zoomInDown10" class="modal modal-edu-general modal-zoomInDown fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header header-color-modal bg-color-1">
                            <h4 class="modal-title">Change Password

                            </h4>
                            <div class="modal-close-area modal-close-df">
                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="modal-login-form-inner">

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="basic-login-inner modal-basic-inner">

                                            <form method="post" action="../User/changepassword" class="changepassword">
                                                <div class="form-group-inner">
                                                    <div class="row">

                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                                            <input type="hidden" class="form-control" name="UserName"
                                                                value="<?php echo $this->session->userdata('username');
                                                                                                                                ?>"
                                                                required />

                                                        </div>

                                                    </div>

                                                </div>


                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <label class="login2">Old
                                                                Password
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <input type="password" class="form-control"
                                                                name="old_password" id="password1"
                                                                placeholder="Old Password" required />

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <label class="login2">New
                                                                Password
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <input type="password" class="form-control"
                                                                name="New_password" id="New_password1"
                                                                placeholder="New Password" required />

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group-inner">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                            <label class="login2">Confirm
                                                                Password
                                                            </label>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <input type="password" class="form-control"
                                                                name="re_password" id="password2"
                                                                placeholder="Confirm Password" required />
                                                            <input type="hidden" class="form-control" name="current_url"
                                                                placeholder="Confirm Password"
                                                                value="<?php echo current_url(); ?>" required />
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="login-btn-inner dropup">
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                            <div class="login-horizental">
                                                                <button type="button"
                                                                    class="btn btn-sm btn-primary login-submit-cs"
                                                                    data-toggle="dropdown">Save

                                                                </button>
                                                                <ul class="dropdown-menu btn-dropdown-menu dropdown-menu-up"
                                                                    role="menu" style="min-width:130px;font-size:20px">
                                                                    <li>
                                                                        <center>
                                                                            <b><?php echo $this->session->userdata('username'); ?></b>
                                                                            Are
                                                                            You
                                                                            sure to change the password?
                                                                        </center><br>
                                                                    </li>
                                                                    <li>
                                                                        <center><button type="submit"
                                                                                class="btn btn-sm btn-primary login-submit-cs"
                                                                                id="btnSubmit">Yes</button>

                                                                            <button type="button"
                                                                                class="btn btn-sm btn-primary login-submit-cs">No</button>
                                                                        </center>
                                                                    </li>


                                                                </ul>
                                            </form>
                                            <a data-dismiss="modal" href="#"><button
                                                    class="btn btn-sm btn-primary login-submit-cs"
                                                    type="button">Cancel</button></a>

                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <!-- change password modal end -->

    <div class="breadcome-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">




                </div>
            </div>
        </div>
    </div>
    </div>

    <?php if ($this->session->flashdata('errmsg')) { ?>
    <div class="callout">

        <div class="callout-container" style="background-color: #f10f0f26; color: #f10f0f;">
            <p><?php echo $this->session->flashdata('errmsg'); ?></p>
        </div>
    </div>
    <?php } ?>

    <?php if ($this->session->flashdata('msg')) { ?>
    <div class="callout">

        <div class="callout-container" style="background-color: #46dc4926; color: #128e0b;">
            <p><?php echo $this->session->flashdata('msg'); ?></p>
        </div>
    </div>
    <?php } ?>