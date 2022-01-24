 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


 <style>
table tr:not(:first-child) {
    cursor: pointer;
    transition: all .25s ease-in-out;
}

table tr:not(:first-child):hover {
    background-color: #ddd;
}

tbody tr:first-child:hover {
    background-color: #ddd;
}

table.dataTable {

    margin-top: 80px !important;
    clear: both;
    margin-bottom: 6px !important;
    max-width: none !important;
    border-collapse: separate !important;
    border-spacing: 0;

}
 </style>
 <script>
$(function() {
    $("table").on("click", "tbody", function() {
        $(':input[type="button"]').prop('disabled', false);
    });
});
 </script>
 <div class="data-table-area mg-b-15">
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="sparkline13-list">
                     <div class="sparkline13-hd">
                         <!-- <div class="main-sparkline13-hd">
                             <div id="topic">
                                 <h1>User <span class="table-project-n">Details</span> </h1>
                             </div>
                         </div> -->
                         
                         
                     </div>
                     <div class="sparkline13-graph">
                         <div class="datatable-dashv1-list custom-datatable-overright">

                             <!-- Modal Form -->
                             <div class="sparkline11-graph">
                                 <div class="basic-login-form-ad">
                                     <div class="row">
                                         <div class="header-top-area" style="background-color:white">
                                             <div class="col-lg-10 col-md-10 col-sm-11 col-xs-11">
                                                 <?php if ($this->session->userdata('UserNew') == "checked") { ?>
                                                 <a class="zoomInDown mg-t" href="#" data-toggle="modal"
                                                     data-target="#zoomInDown1">
                                                     <button type="button" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/New.png"><br>New</button></a>
                                                 <?php
                                                    } ?>
                                                 <?php if ($this->session->userdata('UserView') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown2" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/view.png"><br>
                                                         View </button></a>
                                                 <?php
                                                    } ?>
                                                 <?php if ($this->session->userdata('UserEdit') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown3" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/edit.png"><br>
                                                         Edit</button></a>
                                                 <?php
                                                    } ?>
                                                 <?php if ($this->session->userdata('UserDelete') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown4" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/delete.png">
                                                         <br>Delete</button></a>
                                                 <?php
                                                    } ?>
                                                 <?php if ($this->session->userdata('PermissionSetup') == "checked") { ?>
                                                 <a href="../Permission/permissionView">
                                                     <button type="submit" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/permission.png"><br>
                                                         Permission
                                                         Setup</button></a>
                                                 <?php
                                                    } ?>

                                                 <?php if ($this->session->userdata('ProjectAssign') == "checked") { ?>
                                                 <a href="../Assign/assignView">
                                                     <button type="submit" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/projectassign.png"><br>
                                                         Project Assigning</button></a>
                                                 <?php
                                                    } ?>
                                                 <?php if ($this->session->userdata('ResetPassword') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown5" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/password.png"><br>
                                                         Reset Password </button></a>
                                                 <?php
                                                    } ?>

                                                 <button
                                                     onclick="exportExcel(document.getElementById('topic').innerText)"
                                                     type="button" class="btn btn-link">
                                                     <img
                                                         src="<?php echo base_url(); ?>assets/new/img/BodyPNG/Excel.png"><br>
                                                     Export Excel</button></a>

                                                 <a href="../User/users">
                                                     <button type="submit" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/Refresh.png">
                                                         <br>Refresh</button></a>

                                             </div>
                                             <div class="col-lg-2 col-md-2 col-sm-1 col-xs-1">
                                                 <button type="button" href="#" data-toggle="dropdown" role="button"
                                                     aria-expanded="false" class="btn btn-link">
                                                      <span class="step"><?php echo $this->session->userdata('name')[0]; ?></span><br></button>
                                                 <ul role="menu"
                                                     class="dropdown-toggle dropdown-menu animated dropdown-menu-right zoomIn">

                                                     <?php if ($this->session->userdata('ResetPassword') == "checked") { ?>
                                                        <li><a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown10">
                                                            <span class="edu-icon edu-settings author-log-ic"></span>Change Password</a>
                                                        </li>
                                                     <?php } ?>

                                                     <li><a href="<?php
                                                                    echo base_url('index.php/User/LogoutUser');
                                                                    ?>"><span
                                                                 class="edu-icon edu-locked author-log-ic"></span>Log
                                                             Out</a>
                                                     </li>
                                             </div>
                                         </div>
<h3 style="color:red"> </h3>
                                         <div id="zoomInDown1" class="modal modal-edu-general modal-zoomInDown fade"
                                             role="dialog">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header header-color-modal bg-color-1">
                                                         <h4 class="modal-title">Add New User </h4>
                                                         <div class="modal-close-area modal-close-df">
                                                             <a class="close" data-dismiss="modal" href="#"><i
                                                                     class="fa fa-close"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="modal-body">
                                                         <div class="modal-login-form-inner">

                                                             <div class="row">
                                                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="basic-login-inner modal-basic-inner">

                                                                         <form method="post" action="../User/register"
                                                                             class="userAdd">

                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">
                                                                                             Name</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text" name="name"
                                                                                             id="name"
                                                                                             class="form-control"
                                                                                             placeholder="Full Name" />
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Username

                                                                                         </label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             name="username"
                                                                                             id="username1"
                                                                                             placeholder="Username"
                                                                                             autocomplete="off" />



                                                                                     </div>

                                                                                 </div>
                                                                             </div>


                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Password
                                                                                         </label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="password"
                                                                                             class="form-control"
                                                                                             name="password" id="pwd1"
                                                                                             placeholder="Password" />
                                                                                     </div>

                                                                                 </div>
                                                                             </div>
                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label
                                                                                             class="login2">Catagory</label>
                                                                                     </div>

                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <select class="form-control"
                                                                                             id="sel1" name="catagory">
                                                                                             <option>Other
                                                                                             </option>
                                                                                             <option>Director
                                                                                             </option>
                                                                                             <option>GM
                                                                                             </option>
                                                                                             <option>CFO
                                                                                             </option>
                                                                                             <option>DGM
                                                                                             </option>
                                                                                             <option>Head Office Manager
                                                                                             </option>
                                                                                             <option>System Admin
                                                                                             </option>
                                                                                             <option>Head Office User
                                                                                             </option>
                                                                                             <option>Project Manager
                                                                                             </option>
                                                                                             <option>Site QS
                                                                                             </option>
                                                                                             <option>Site ASK
                                                                                             </option>
                                                                                             
                                                                                         </select>

                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Contact
                                                                                             Number</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="Contact Number"
                                                                                             name="contact"
                                                                                             id="contact1"
                                                                                             autocomplete="off" />

                                                                                         <div role="alert" id="cont">
                                                                                         </div>

                                                                                     </div>
                                                                                 </div>
                                                                             </div>

                                                                             <div class="login-btn-inner">

                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <div class="login-horizental">
                                                                                             <button
                                                                                                 class="btn btn-sm btn-primary login-submit-cs"
                                                                                                 type="submit"
                                                                                                 name="submit">Add
                                                                                                 User</button>

                                                                                             <a data-dismiss="modal"
                                                                                                 href="#"><button
                                                                                                     class="btn btn-sm btn-primary login-submit-cs"
                                                                                                     type="button">Cancel</button></a>

                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>

                                                                         </form>







                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <!--Add Model END-->
                                         <!--Reset Model END-->
                                         <div id="zoomInDown5" class="modal modal-edu-general modal-zoomInDown fade"
                                             role="dialog">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header header-color-modal bg-color-1">
                                                         <h4 class="modal-title">Reset Password</h4>
                                                         <div class="modal-close-area modal-close-df">
                                                             <a class="close" data-dismiss="modal" href="#"><i
                                                                     class="fa fa-close"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="modal-body">
                                                         <div class="modal-login-form-inner">

                                                             <div class="row">
                                                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="basic-login-inner modal-basic-inner">

                                                                         <form method="post" action="../User/reset"
                                                                             class="reset">

                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">
                                                                                             Username</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text"
                                                                                             name="Username"
                                                                                             id="R_T_Username"
                                                                                             class="form-control"
                                                                                             readonly />
                                                                                     </div>
                                                                                 </div>
                                                                             </div>



                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">New
                                                                                             Password
                                                                                         </label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="password"
                                                                                             class="form-control"
                                                                                             name="password"
                                                                                             id="password5"
                                                                                             placeholder="New Password"
                                                                                             required />
                                                                                     </div>

                                                                                 </div>
                                                                             </div>
                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Retype
                                                                                             Password
                                                                                         </label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="password"
                                                                                             class="form-control"
                                                                                             name="Re_Password"
                                                                                             id="Re_password"
                                                                                             placeholder="Retype Password"
                                                                                             required />
                                                                                     </div>

                                                                                 </div>
                                                                             </div>


                                                                             <div class="login-btn-inner">

                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <div class="login-horizental">
                                                                                             <button
                                                                                                 class="btn btn-sm btn-primary login-submit-cs"
                                                                                                 type="submit"
                                                                                                 name="submit">Reset
                                                                                                 Password
                                                                                             </button>

                                                                                             <a data-dismiss="modal"
                                                                                                 href="#"><button
                                                                                                     class="btn btn-sm btn-primary login-submit-cs"
                                                                                                     type="button">Cancel</button></a>

                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>

                                                                         </form>







                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <!--View Model Start-->
                                         <div id="zoomInDown2" class="modal modal-edu-general modal-zoomInDown fade"
                                             role="dialog">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header header-color-modal bg-color-1">
                                                         <h4 class="modal-title">User

                                                         </h4>
                                                         <div class="modal-close-area modal-close-df">
                                                             <a class="close" data-dismiss="modal" href="#"><i
                                                                     class="fa fa-close"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="modal-body">
                                                         <div class="modal-login-form-inner">

                                                             <div class="row">
                                                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="basic-login-inner modal-basic-inner">

                                                                         <!-- Single pro tab review Start-->
                                                                         <div
                                                                             class="single-pro-review-area mt-t-30 mg-b-15">
                                                                             <div class="container-fluid">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                         <div
                                                                                             class="product-payment-inner-st">
                                                                                             <ul id="myTabedu1"
                                                                                                 class="tab-review-design">
                                                                                                 <li class="active">
                                                                                                     <?php if ($this->session->userdata('UserView') == "checked") { ?>
                                                                                                     <a href="#View"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('UserEdit') == "checked") { ?>
                                                                                                     <a href="#Edit"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit

                                                                                                     </a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('UserDelete') == "checked") { ?>
                                                                                                     <a href="#Delete"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/User/V_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/User/V_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/User/V_Delete.php'); ?>

                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <!--END Single pro tab review Start-->


                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--END View Model-->


                                         <!--Edit Model Start-->
                                         <div id="zoomInDown3" class="modal modal-edu-general modal-zoomInDown fade"
                                             role="dialog">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header header-color-modal bg-color-1">
                                                         <h4 class="modal-title">User </h4>
                                                         <div class="modal-close-area modal-close-df">
                                                             <a class="close" data-dismiss="modal" href="#"><i
                                                                     class="fa fa-close"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="modal-body">
                                                         <div class="modal-login-form-inner">

                                                             <div class="row">
                                                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="basic-login-inner modal-basic-inner">

                                                                         <!-- Single pro tab review Start-->
                                                                         <div
                                                                             class="single-pro-review-area mt-t-30 mg-b-15">
                                                                             <div class="container-fluid">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                         <div
                                                                                             class="product-payment-inner-st">
                                                                                             <ul id="myTabedu1"
                                                                                                 class="tab-review-design">
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('UserView') == "checked") { ?>
                                                                                                     <a href="#View1"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li class="active">

                                                                                                     <?php if ($this->session->userdata('UserEdit') == "checked") { ?>
                                                                                                     <a href="#Edit1"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('UserDelete') == "checked") { ?>
                                                                                                     <a href="#Delete1"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/User/E_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/User/E_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/User/E_Delete.php'); ?>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <!--END Single pro tab review Start-->


                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--END Edit Model-->


                                         <!--Delete Model Start-->
                                         <div id="zoomInDown4" class="modal modal-edu-general modal-zoomInDown fade"
                                             role="dialog">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header header-color-modal bg-color-1">
                                                         <h4 class="modal-title">User</h4>
                                                         <div class="modal-close-area modal-close-df">
                                                             <a class="close" data-dismiss="modal" href="#"><i
                                                                     class="fa fa-close"></i></a>
                                                         </div>
                                                     </div>
                                                     <div class="modal-body">
                                                         <div class="modal-login-form-inner">

                                                             <div class="row">
                                                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                     <div class="basic-login-inner modal-basic-inner">

                                                                         <!-- Single pro tab review Start-->
                                                                         <div
                                                                             class="single-pro-review-area mt-t-30 mg-b-15">
                                                                             <div class="container-fluid">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                         <div
                                                                                             class="product-payment-inner-st">
                                                                                             <ul id="myTabedu1"
                                                                                                 class="tab-review-design">
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('UserView') == "checked") { ?>
                                                                                                     <a href="#View2"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('UserEdit') == "checked") { ?>
                                                                                                     <a href="#Edit2"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li class="active">

                                                                                                     <?php
                                                                                                        if ($this->session->userdata('UserDelete') == "checked") {
                                                                                                            ?>
                                                                                                     <a href="#Delete2"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete

                                                                                                     </a>
                                                                                                     <?php
                                                                                                        }
                                                                                                        ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/User/D_View.php'); ?>
                                                                                                 <?php
                                                                                                    $this->load->view('partials/CRUD/User/D_Edit.php');
                                                                                                    ?>
                                                                                                 <?php $this->load->view('partials/CRUD/User/D_Delete.php'); ?>
                                                                                             </div>
                                                                                         </div>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <!--END Single pro tab review Start-->


                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                         <!--END Delete Model-->
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <!-- </div> -->

                         <!--END Modal Form -->

                         <div class="row" style="margin-top: -10px;">

                             <form name="bulk_action_form" action="" method="post">

                                 <table id="table" class="table table-striped table-bordered" style="width:100%">

                                     <thead>
                 
                                         <tr>
                                             <td colspan="5">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <h4 id="topic" style="color:#337ab7;">User Details</h4>
                                     </div> 
                                
                                             </td>
                                         </tr>
                                         <tr>

                                             <th data-field="id">Name</th>
                                             <th data-field="name">Username</th>
                                             <th data-field="catergory">Catergory</th>
                                             <th data-field="phone">Contact No</th>
                                             <th data-field="status">Status</th>

                                         </tr>
                                     </thead>
                                     <tbody>

                                         <?php
                                            if ($user_fetch_data->num_rows() > 0) {
                                                foreach ($user_fetch_data->result() as $row) {
                                                    ?>

                                         <tr>

                                             <td><?php echo $row->Name ?></td>
                                             <td><?php echo $row->UserName ?></td>

                                             <td><?php echo $row->Position ?></td>
                                             <td class="phone"><?php echo $row->ContactNumber  ?></td>
                                             <td <?php if ($row->Status == 'BLOCK') { ?> class=" label-danger"
                                                 <?php } ?>><?php if ($row->Status == 'BLOCK') { ?><?php echo "Blocked" ?><?php } else {  ?><?php echo "Active" ?><?php    } ?>
                                             </td>
                                         </tr>


                                         <?php
                                                }
                                            } else {
                                                ?>
                                         <tr>
                                             <td colspan="3"> No Data Found </td>
                                         </tr>
                                         <?php
                                            }
                                            ?>

                                     </tbody>
                                 </table>

                             </form>
                         </div>




                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>

 <script>
$(document).ready(function() {
    var table = $('#table').DataTable({
        "pageLength": 10,

        language: {
            search: "",
            searchPlaceholder: "Search..."
        },
        // lengthChange: true,
        aLengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        iDisplayLength: -1

    });


});



var table = document.getElementById('table');

for (var i = 2; i < table.rows.length; i++) {
    table.rows[i].onclick = function() {
        //rIndex = this.rowIndex;
        document.getElementById("V_V_Name").value = this.cells[0].innerHTML;
        document.getElementById("V_V_UserName").value = this.cells[1].innerHTML;
        document.getElementById("V_V_Position").value = this.cells[2].innerHTML;
        document.getElementById("V_V_ContactNumber").value = this.cells[3].innerHTML;
        document.getElementById("V_E_Name").value = this.cells[0].innerHTML;
        document.getElementById("V_E_UserName").value = this.cells[1].innerHTML;
        document.getElementById("V_E_Status").value = this.cells[4].innerHTML;
        document.getElementById("V_E_Position").value = this.cells[2].innerHTML;
        document.getElementById("V_E_ContactNumber").value = this.cells[3].innerHTML;
        document.getElementById("V_D_Name").value = this.cells[0].innerHTML;
        document.getElementById("V_D_UserName").value = this.cells[1].innerHTML;
        document.getElementById("V_D_Position").value = this.cells[2].innerHTML;
        document.getElementById("V_D_ContactNumber").value = this.cells[3].innerHTML;

        document.getElementById("E_V_Name").value = this.cells[0].innerHTML;
        document.getElementById("E_V_UserName").value = this.cells[1].innerHTML;
        document.getElementById("E_V_Position").value = this.cells[2].innerHTML;
        document.getElementById("E_V_ContactNumber").value = this.cells[3].innerHTML;
        document.getElementById("E_E_Name").value = this.cells[0].innerHTML;
        document.getElementById("E_E_UserName").value = this.cells[1].innerHTML;
        document.getElementById("E_E_Status").value = this.cells[4].innerHTML;
        document.getElementById("E_E_Position").value = this.cells[2].innerHTML;
        document.getElementById("E_E_ContactNumber").value = this.cells[3].innerHTML;
        document.getElementById("E_D_Name").value = this.cells[0].innerHTML;
        document.getElementById("E_D_UserName").value = this.cells[1].innerHTML;
        document.getElementById("E_D_Position").value = this.cells[2].innerHTML;
        document.getElementById("E_D_ContactNumber").value = this.cells[3].innerHTML;

        document.getElementById("D_V_Name").value = this.cells[0].innerHTML;
        document.getElementById("D_V_UserName").value = this.cells[1].innerHTML;
        document.getElementById("D_V_Position").value = this.cells[2].innerHTML;
        document.getElementById("D_V_ContactNumber").value = this.cells[3].innerHTML;
        document.getElementById("D_E_Name").value = this.cells[0].innerHTML;
        document.getElementById("D_E_UserName").value = this.cells[1].innerHTML;
        document.getElementById("D_E_Status").value = this.cells[4].innerHTML;
        document.getElementById("D_E_Position").value = this.cells[2].innerHTML;
        document.getElementById("D_E_ContactNumber").value = this.cells[3].innerHTML;
        document.getElementById("D_D_Name").value = this.cells[0].innerHTML;
        document.getElementById("D_D_UserName").value = this.cells[1].innerHTML;
        document.getElementById("D_D_Position").value = this.cells[2].innerHTML;
        document.getElementById("D_D_ContactNumber").value = this.cells[3].innerHTML;

        document.getElementById("R_T_Username").value = this.cells[1].innerHTML;

    };
}
 </script>