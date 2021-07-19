 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

 <style>
tbody tr:not(:first-child) {
    cursor: pointer;
    transition: all .25s ease-in-out;
}

tbody tr:not(:first-child):hover {
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

.form-control {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 0px;
    width:300px;
}
.select2-container--default .select2-selection--single{
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 0px;
    width:300px;
    height:35px;
}
 </style>
 <script>
$(function() {
    $("table ").on("click", "tbody", function() {



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
                         <div class="main-sparkline13-hd">
                             <!-- check -->

                             <!-- check -->

                             <!-- <div id="topic">
                                 <h1>Location <span class="table-project-n">Details</span> </h1>
                             </div> -->
                         </div>
                     </div>
                     <div class="sparkline13-graph">
                         <div class="datatable-dashv1-list custom-datatable-overright">


                             <!-- Modal Form -->
                             <div class="sparkline11-graph">
                                 <div class="basic-login-form-ad">
                                     <div class="row">
                                         <div class="header-top-area" style="background-color:white">
                                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">

                                                 <?php if ($this->session->userdata('LocationNew') == "checked") { ?>
                                                 <a class="zoomInDown mg-t" href="#" data-toggle="modal"
                                                     data-target="#zoomInDown1">
                                                     <button type="button" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/New.png"><br>
                                                         New</button></a>
                                                 <?php
                                                    } ?>

                                                 <?php if ($this->session->userdata('LocationView') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown2" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/view.png"><br>
                                                         View</button></a>
                                                 <?php
                                                    } ?>

                                                 <?php if ($this->session->userdata('LocationEdit') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown3" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/edit.png"><br>
                                                         Edit</button></a>
                                                 <?php
                                                    } ?>

                                                 <?php if ($this->session->userdata('LocationDelete') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown4" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/delete.png"><br>
                                                         Delete</button></a>
                                                 <?php
                                                    } ?>
                                                 <button
                                                     onclick="exportExcel(document.getElementById('topic').innerText)"
                                                     type="button" class="btn btn-link">
                                                     <img
                                                         src="<?php echo base_url(); ?>assets/new/img/BodyPNG/Excel.png"><br>
                                                     Export Excel</button></a>
                                                 <a href="../Location/locationView">
                                                     <button type="submit" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/Refresh.png"><br>
                                                         Refresh</button></a>

                                             </div>
                                             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                 <button type="button" href="#" data-toggle="dropdown" role="button"
                                                     aria-expanded="false" class="btn btn-link">
                                                      <span class="step"><?php echo $this->session->userdata('name')[0]; ?></span><br></button>
                                                 <ul role="menu"
                                                     class="dropdown-toggle dropdown-menu animated dropdown-menu-right zoomIn">

                                                     <li><a class="zoomInDown mg-t" href="#" data-toggle="modal"
                                                             data-target="#zoomInDown10"><span
                                                                 class="edu-icon edu-settings author-log-ic"></span>Change
                                                             Password</a>
                                                     </li>

                                                     <li><a href="<?php
                                                                    echo base_url('index.php/User/LogoutUser');
                                                                    ?>"><span
                                                                 class="edu-icon edu-locked author-log-ic"></span>Log
                                                             Out</a>
                                                     </li>
                                             </div>
                                         </div>

                                         <div id="zoomInDown1" class="modal modal-edu-general modal-zoomInDown fade"
                                             role="dialog">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header header-color-modal bg-color-1">
                                                         <h4 class="modal-title">Add New Location</h4>
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
                                                                         <form method="post" action="../Location/add"
                                                                             class="locationAdd">

                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Location
                                                                                             Name</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="Enter Location Name"
                                                                                             name="locationname" id="locationname1"
                                                                                             required />
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Location
                                                                                             Code</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="Enter Location Code"
                                                                                             name="locationcode"
                                                                                             id="locationid1" />
                                                                                     </div>
                                                                                 </div>
                                                                             </div>

                                                                             <!-- <div class="form-group-inner">
                                                                                    <div class="row">
                                                                                        <div
                                                                                            class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                            <label
                                                                                                class="login2">Supplier Name</label>
                                                                                        </div>
                                                                                        <div
                                                                                            class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                            <input type="text"
                                                                                                class="form-control"
                                                                                                placeholder="Enter Supplier Name"name="suppliername" required />
                                                                                        </div>
                                                                                    </div>
                                                                                </div> -->
                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label
                                                                                             class="login2">Remark</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="Enter Remark"
                                                                                             name="description" />
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                             <!-- check -->
                                                                             <?php if ($this->session->userdata('ProjectName')) {
                                                                                    ?>
                                                                             <input type="hidden" class="form-control"
                                                                                 name="projectname"
                                                                                 value="<?php echo $this->session->userdata('ProjectName') ?>"
                                                                                 required />

                                                                             <?php
                                                                                } else { ?>
                                                                             <!-- check -->
                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Project
                                                                                             Code</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <select class="js-example-basic-multiple"
                                                                                             id="projectcode"
                                                                                             name="projectcode" required>
                                                                                             <option value="-1" >---
                                                                                                 Select the Project
                                                                                                 ---</option>
                                                                                             <?php
                                                                                                    if ($project_fetch_data->num_rows() > 0) {
                                                                                                        foreach ($project_fetch_data->result() as $row) {
                                                                                                            ?>
                                                                                             <?php if ($row->UserName == $this->session->userdata('username')) { ?>
                                                                                             <option>
                                                                                                 <?php echo $row->ProjectCode  ?>
                                                                                             </option>
                                                                                             <?php
                                                                                                            }
                                                                                                        }
                                                                                                    } else {
                                                                                                        ?>

                                                                                             <option></option>

                                                                                             <?php
                                                                                                    }
                                                                                                    ?>

                                                                                         </select>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>
                                                                             <?php
                                                                                } ?>


                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <?php if ($this->session->userdata('ProjectName')) {
                                                                                                ?>
                                                                                         <label class="login2">Project
                                                                                             Code</label>
                                                                                         <?php } else { ?>
                                                                                         <label class="login2">Project
                                                                                             Name</label>
                                                                                         <?php } ?>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <?php if ($this->session->userdata('ProjectName')) {
                                                                                                ?>
                                                                                         <input type="hidden"
                                                                                             class="form-control"
                                                                                             name="projectname"
                                                                                             value="<?php echo $this->session->userdata('ProjectName') ?>"
                                                                                             required />
                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             name="projectcode" readonly
                                                                                             value="<?php echo $this->session->userdata('ProjectCode') ?>"
                                                                                             required />

                                                                                         <?php
                                                                                            } else { ?>
                                                                                         <select class="js-example-basic-multiple"
                                                                                             id="projectname"
                                                                                             name="projectname">
                                                                                             <option value="-1">--- Project Name ---</option>
                                                                                         </select>

                                                                                         <?php } ?>

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
                                                                                                 type="submit">Add
                                                                                                 Location</button>

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
                                                         <h4 class="modal-title">Location</h4>
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
                                                                                                     <?php if ($this->session->userdata('LocationView') == "checked") { ?>
                                                                                                     <a href="#View"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('LocationEdit') == "checked") { ?>
                                                                                                     <a href="#Edit"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('LocationDelete') == "checked") { ?>
                                                                                                     <a href="#Delete"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/Location/V_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Location/V_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Location/V_Delete.php'); ?>

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
                                                         <h4 class="modal-title">Location</h4>
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
                                                                                                     <?php if ($this->session->userdata('LocationView') == "checked") { ?>
                                                                                                     <a href="#View1"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li class="active">
                                                                                                     <?php if ($this->session->userdata('LocationEdit') == "checked") { ?>
                                                                                                     <a href="#Edit1"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('LocationDelete') == "checked") { ?>
                                                                                                     <a href="#Delete1"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/Location/E_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Location/E_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Location/E_Delete.php'); ?>

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
                                                         <h4 class="modal-title">Location</h4>
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
                                                                                                     <?php if ($this->session->userdata('LocationView') == "checked") { ?>
                                                                                                     <a href="#View2"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('LocationEdit') == "checked") { ?>
                                                                                                     <a href="#Edit2"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li class="active">
                                                                                                     <?php if ($this->session->userdata('LocationDelete') == "checked") { ?>
                                                                                                     <a href="#Delete2"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/Location/D_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Location/D_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Location/D_Delete.php'); ?>

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
                         <!-- End modal -->

                         <div class="row">
                            
                             <form name="bulk_action_form" action="" method="post">
                                 <table id="table" class="table table-striped table-bordered" style="width:100%">
                                     <thead>
                                         <tr>
                                             <td colspan="4">
                                                
                                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                       <h4 id="topic" style="color:#337ab7;">Location Details</h4>
                                     </div> 
                              
                                             </td>
                                         </tr>
                                         <?php if ($this->session->userdata('ProjectName')) { ?>
                                         <tr style="color:#337ab7; font-size:14px">
                                             <td colspan="1"><b>Project</b> </td>
                                             <td colspan="3"><b> <?php echo $this->session->userdata('ProjectName'); ?></b>
                                             </td>
                                         </tr>
                                         <?php
                                            } ?>
                                         <tr>
                                             <th data-field="lcode">Location Code</th>
                                             <th data-field="lname">Location Name (Stockpile)</th>
                                             <th data-field="remark">Remark</th>
                                             <th data-field="project">Project Code</th>

                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php
                                            if ($location_fetch_data->num_rows() > 0) {
                                                foreach ($location_fetch_data->result() as $row) {
                                                    if ($row->ProjectName == $this->session->userdata('ProjectName') and $row->UserName == $this->session->userdata('username')) { ?>

                                         <tr>
                                             <td><?php echo $row->LocationCode ?></td>
                                             <td><?php echo $row->Location ?></td>
                                             <td><?php echo $row->Description ?></td>
                                             <td><?php echo $row->ProjectCode ?></td>

                                         </tr>
                                         <?php
                                                    } else if (!($this->session->userdata('ProjectName'))) { ?>
                                         <?php if ($row->UserName == $this->session->userdata('username')) { ?>
                                         <tr>
                                             <td><?php echo $row->LocationCode  ?></td>
                                             <td><?php echo $row->Location ?></td>
                                             <td><?php echo $row->Description  ?></td>
                                             <td><?php echo $row->ProjectCode ?></td>

                                         </tr>
                                         <?php
                                                        }
                                                    }
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



 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
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
        document.getElementById("V_V_Location").value = this.cells[1].innerHTML;
        document.getElementById("V_V_LocationCode").value = this.cells[0].innerHTML;
        document.getElementById("V_V_Description").value = this.cells[2].innerHTML;
        document.getElementById("V_V_ProjectName").value = this.cells[3].innerHTML;
        document.getElementById("V_E_Location").value = this.cells[1].innerHTML;
        document.getElementById("V_E_LocationCode").value = this.cells[0].innerHTML;

        document.getElementById("V_E_Description").value = this.cells[2].innerHTML;
        document.getElementById("V_E_ProjectName").value = this.cells[3].innerHTML;
        document.getElementById("V_D_Location").value = this.cells[1].innerHTML;
        document.getElementById("V_D_LocationCode").value = this.cells[0].innerHTML;
        document.getElementById("V_D_Description").value = this.cells[2].innerHTML;
        document.getElementById("V_D_ProjectName").value = this.cells[3].innerHTML;


        document.getElementById("E_V_Location").value = this.cells[1].innerHTML;
        document.getElementById("E_V_LocationCode").value = this.cells[0].innerHTML;
        document.getElementById("E_V_Description").value = this.cells[2].innerHTML;
        document.getElementById("E_V_ProjectName").value = this.cells[3].innerHTML;
        document.getElementById("E_E_Location").value = this.cells[1].innerHTML;
        document.getElementById("E_E_LocationCode").value = this.cells[0].innerHTML;
        document.getElementById("E_E_Description").value = this.cells[2].innerHTML;
        document.getElementById("E_E_ProjectName").value = this.cells[3].innerHTML;
        document.getElementById("E_D_Location").value = this.cells[1].innerHTML;
        document.getElementById("E_D_LocationCode").value = this.cells[0].innerHTML;
        document.getElementById("E_D_Description").value = this.cells[2].innerHTML;
        document.getElementById("E_D_ProjectName").value = this.cells[3].innerHTML;

        document.getElementById("D_V_Location").value = this.cells[1].innerHTML;
        document.getElementById("D_V_LocationCode").value = this.cells[0].innerHTML;
        document.getElementById("D_V_Description").value = this.cells[2].innerHTML;
        document.getElementById("D_V_ProjectName").value = this.cells[3].innerHTML;
        document.getElementById("D_E_Location").value = this.cells[1].innerHTML;
        document.getElementById("D_E_LocationCode").value = this.cells[0].innerHTML;
        document.getElementById("D_E_Description").value = this.cells[2].innerHTML;
        document.getElementById("D_E_ProjectName").value = this.cells[3].innerHTML;
        document.getElementById("D_D_Location").value = this.cells[1].innerHTML;
        document.getElementById("D_D_LocationCode").value = this.cells[0].innerHTML;
        document.getElementById("D_D_Description").value = this.cells[2].innerHTML;
        document.getElementById("D_D_ProjectName").value = this.cells[3].innerHTML;


    };
}
 </script>
 <script>
$(document).ready(function() {
$('.js-example-basic-multiple').select2();
});
</script>