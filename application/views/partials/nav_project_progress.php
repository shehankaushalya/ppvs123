 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

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
 <style>
     .form-control {
         background-color: #fff;
         border: 1px solid #ddd;
         border-radius: 0px;
         width: 300px;
     }

     .select2-container--default .select2-selection--single {
         background-color: #fff;
         border: 1px solid #ddd;
         border-radius: 0px;
         width: 300px;
         height: 35px;
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

                     <div class="sparkline13-graph">
                         <div class="datatable-dashv1-list custom-datatable-overright">


                             <!-- Modal Form -->
                             <div class="sparkline11-graph">
                                 <div class="basic-login-form-ad">
                                     <div class="row">
                                     
                                         <div class="header-top-area" style="background-color:white">
                                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">

                                                 <?php if ($this->session->userdata('ProgressNew') == "checked") { ?>
                                                 <a class="zoomInDown mg-t" href="#" data-toggle="modal"
                                                     data-target="#zoomInDown1">
                                                     <button type="button" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/New.png"><br>
                                                         New </button></a>
                                                 <?php
                                                    } ?>

                                                 <?php if ($this->session->userdata('ProgressView') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown2" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/view.png"><br>
                                                         View</button></a>
                                                 <?php
                                                    } ?>

                                                 <?php if ($this->session->userdata('ProgressEdit') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown3" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/edit.png"><br>
                                                         Edit</button></a>
                                                 <?php
                                                    } ?>
                                                 <?php if ($this->session->userdata('ProgressDelete') == "checked") { ?>
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

                                                 <a href="../Progress/progresses">
                                                     <button type="submit" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/Refresh.png"><br>
                                                         Refresh</button></a>

                                             </div>
                                             <div class="col-lg-2 col-md-2 col-sm-2 col-xs-3">
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
                                                         <h4 class="modal-title">Add New Progress Detail</h4>
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


                                                                         <form method="post"
                                                                             action="../Progress/register" enctype="multipart/form-data"
                                                                             class="progressAdd">

                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <!-- <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">PPD Code</label>
                                                                                     </div> -->
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="hidden"
                                                                                             class="form-control"
                                                                                             name="ppdcode"
                                                                                             id="ppdcode1"
                                                                                             readonly />
                                                                                     </div>
                                                                                 </div>
                                                                             </div>


                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Project Code</label>
                                                                                     </div>
                                                                                    
                                                                                     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
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


                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Location Code</label>
                                                                                     </div>
                                                                                    
                                                                                     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                     
                                                                                     <select class="js-example-basic-multiple"
                                                                                             id="locationcode"
                                                                                             name="locationcode" required>
                                                                                             <option value="-1" >---
                                                                                                 Select the Location
                                                                                                 ---</option>
                                                                                             <?php
                                                                                                    if ($location_fetch_data->num_rows() > 0) {
                                                                                                        foreach ($location_fetch_data->result() as $row) {
                                                                                                            ?>
                                                                                             <?php if ($row->UserName == $this->session->userdata('username')) { ?>
                                                                                             <option>
                                                                                                 <?php echo $row->LocationCode  ?>
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








                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Status</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <select class="form-control"
                                                                                             id="status1" name="status" >
                                                                                             
                                                                                             <option>Not Yet Started
                                                                                             </option>
                                                                                             <option>Initiated
                                                                                             </option>
                                                                                             <option>Work In Progress
                                                                                             </option>
                                                                                             <option>Completed
                                                                                             </option>
                                                                                             <option>Hold
                                                                                             </option>

                                                                                         </select>
                                                                                         
                                                                                     </div>
                                                                                 </div>
                                                                             </div>


                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Photo Category</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <select class="form-control"
                                                                                             id="photoitem1" name="photoitem" >
                                                                                             
                                                                                             <option>Bridge
                                                                                             </option>
                                                                                             <option>Culvert
                                                                                             </option>
                                                                                             <option>Embankment
                                                                                             </option>
                                                                                             <option>Retaining Wall
                                                                                             </option>

                                                                                         </select>
                                                                                     </div>
                                                                                 </div>
                                                                             </div>


                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Image</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <!-- <input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="Enter Image Link"
                                                                                             name="image"
                                                                                             id="image1"
                                                                                             required /> -->

                                                                                             <input type="file"
                                                                                             class="form-control"
                                                                                             name="image"
                                                                                             id="image1"
                                                                                             required />
                                                                                     </div>
                                                                                 </div>
                                                                             </div>

                                                                            
                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label
                                                                                             class="login2">Photo Capturing Date</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="Enter Photo Capturing Date"
                                                                                             name="imgdate"
                                                                                             id="imgdate1" 
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
                                                                                            
                                                                                            <input type="submit" value="Add Progress Detail" class="btn btn-sm btn-primary login-submit-cs" />
                                                                                             <!-- <button
                                                                                                 class="btn btn-sm btn-primary login-submit-cs"
                                                                                                 type="submit">Add
                                                                                                 Progress Detail</button> -->

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

                                         <!--View Model Start-->
                                         <div id="zoomInDown2" class="modal modal-edu-general modal-zoomInDown fade"
                                             role="dialog">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header header-color-modal bg-color-1">
                                                         <h4 class="modal-title"> Progress Detail </h4>
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
                                                                                                     <?php if ($this->session->userdata('ProgressView') == "checked") { ?>
                                                                                                     <a href="#View"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('ProgressEdit') == "checked") { ?>
                                                                                                     <a href="#Edit"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('ProgressDelete') == "checked") { ?>
                                                                                                     <a href="#Delete"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/Progress/V_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Progress/V_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Progress/V_Delete.php'); ?>
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
                                                         <h4 class="modal-title"> Progress Detail</h4>
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
                                                                                                     <?php if ($this->session->userdata('ProgressView') == "checked") { ?>
                                                                                                     <a href="#View1"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li class="active">

                                                                                                     <?php if ($this->session->userdata('ProgressEdit') == "checked") { ?>
                                                                                                     <a href="#Edit1"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('ProgressDelete') == "checked") { ?>
                                                                                                     <a href="#Delete1"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/Progress/E_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Progress/E_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Progress/E_Delete.php'); ?>
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


                                         <!--Edit Model Start-->
                                         <div id="zoomInDown4" class="modal modal-edu-general modal-zoomInDown fade"
                                             role="dialog">
                                             <div class="modal-dialog">
                                                 <div class="modal-content">
                                                     <div class="modal-header header-color-modal bg-color-1">
                                                         <h4 class="modal-title"> Progress Detail</h4>
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
                                                                                                     <?php if ($this->session->userdata('ProgressView') == "checked") { ?>
                                                                                                     <a href="#View2"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('ProgressEdit') == "checked") { ?>
                                                                                                     <a href="#Edit2"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li class="active">

                                                                                                     <?php if ($this->session->userdata('ProgressDelete') == "checked") { ?>
                                                                                                     <a href="#Delete2"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/Progress/D_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Progress/D_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Progress/D_Delete.php'); ?>
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
                                                 <h4 id="topic" style="color:#337ab7;">Project Progress Details</h4>
                                             </td>
                                         </tr>
                                         <tr>
                                            
                                             <th data-field="PpdCode">PPD Code</th>
                                             <th data-field="ProjectCode">Project Code</th>
                                             <th data-field="LocationCode">Location Code</th>
                                             <th data-field="Status">Status</th>
                                             <th data-field="PhotoItem">Photo Category</th>
                                             <th data-field="Image">Image</th>
                                             <th data-field="ImgDate">Photo Capturing Date</th>

                                         </tr>
                                     </thead>
                                     <tbody>
                                         <?php
                                            if ($progress_fetch_data->num_rows() > 0) {
                                                foreach ($progress_fetch_data->result() as $row) {
                                                    ?>
                                           <?php if ($row->UserName == $this->session->userdata('username')) { ?>         
                                         <tr>

                                             <td><?php echo $row->PpdCode ?></td>
                                             <td><?php echo $row->ProjectCode ?></td>
                                             <td><?php echo $row->LocationCode  ?></td>
                                             <td><?php echo $row->Status  ?></td>
                                             <td><?php echo $row->PhotoItem  ?></td>
                                             
                                             
                                             <td>
                                             <a style="font-size:12px;color:#337ab7" data-toggle="modal"
                                                    href="#dispaly-employee" title="View Employee"
                                                    class="display-emp ml-1 btn-ext-small btn btn-sm btn-link"
                                                    data-geteid="<?php echo $row->Image ?>"
                                                    rel="noopener noreferrer">View</a>
                                             </td>
                                             <td><?php echo $row->ImgDate  ?></td>


                                         </tr>


                                         <?php
                                                    }
                                                }
                                            } else {
                                                ?>
                                         <tr>
                                             <td colspan="7"> No Data Found </td>
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
        document.getElementById("V_V_PpdCode").value = this.cells[0].innerHTML;
        document.getElementById("V_V_ProjectCode").value = this.cells[1].innerHTML;
        document.getElementById("V_V_LocationCode").value = this.cells[2].innerHTML;
        document.getElementById("V_V_Status").value = this.cells[3].innerHTML;
        document.getElementById("V_V_PhotoItem").value = this.cells[4].innerHTML;
        document.getElementById("V_V_Image").value = this.cells[5].innerHTML;
        document.getElementById("V_V_ImgDate").value = this.cells[6].innerHTML;

        document.getElementById("V_E_PpdCode").value = this.cells[0].innerHTML;
        document.getElementById("V_E_ProjectCode").value = this.cells[1].innerHTML;
        document.getElementById("V_E_LocationCode").value = this.cells[2].innerHTML;
        document.getElementById("V_E_Status").value = this.cells[3].innerHTML;
        document.getElementById("V_E_PhotoItem").value = this.cells[4].innerHTML;
        document.getElementById("V_E_Image").value = this.cells[5].innerHTML;
        document.getElementById("V_E_ImgDate").value = this.cells[6].innerHTML;

        document.getElementById("V_D_PpdCode").value = this.cells[0].innerHTML;
        document.getElementById("V_D_ProjectCode").value = this.cells[1].innerHTML;
        document.getElementById("V_D_LocationCode").value = this.cells[2].innerHTML;
        document.getElementById("V_D_Status").value = this.cells[3].innerHTML;
        document.getElementById("V_D_PhotoItem").value = this.cells[4].innerHTML;
        document.getElementById("V_D_Image").value = this.cells[5].innerHTML;
        document.getElementById("V_D_ImgDate").value = this.cells[6].innerHTML;

        document.getElementById("E_V_PpdCode").value = this.cells[0].innerHTML;
        document.getElementById("E_V_ProjectCode").value = this.cells[1].innerHTML;
        document.getElementById("E_V_LocationCode").value = this.cells[2].innerHTML;
        document.getElementById("E_V_Status").value = this.cells[3].innerHTML;
        document.getElementById("E_V_PhotoItem").value = this.cells[4].innerHTML;
        document.getElementById("E_V_Image").value = this.cells[5].innerHTML;
        document.getElementById("E_V_ImgDate").value = this.cells[6].innerHTML;

        document.getElementById("E_E_PpdCode").value = this.cells[0].innerHTML;
        document.getElementById("E_E_ProjectCode").value = this.cells[1].innerHTML;
        document.getElementById("E_E_LocationCode").value = this.cells[2].innerHTML;
        document.getElementById("E_E_Status").value = this.cells[3].innerHTML;
        document.getElementById("E_E_PhotoItem").value = this.cells[4].innerHTML;
        document.getElementById("E_E_Image").value = this.cells[5].innerHTML;
        document.getElementById("E_E_ImgDate").value = this.cells[6].innerHTML;

        document.getElementById("E_D_PpdCode").value = this.cells[0].innerHTML;
        document.getElementById("E_D_ProjectCode").value = this.cells[1].innerHTML;
        document.getElementById("E_D_LocationCode").value = this.cells[2].innerHTML;
        document.getElementById("E_D_Status").value = this.cells[3].innerHTML;
        document.getElementById("E_D_PhotoItem").value = this.cells[4].innerHTML;
        document.getElementById("E_D_Image").value = this.cells[5].innerHTML;
        document.getElementById("E_D_ImgDate").value = this.cells[6].innerHTML;

        document.getElementById("D_V_PpdCode").value = this.cells[0].innerHTML;
        document.getElementById("D_V_ProjectCode").value = this.cells[1].innerHTML;
        document.getElementById("D_V_LocationCode").value = this.cells[2].innerHTML;
        document.getElementById("D_V_Status").value = this.cells[3].innerHTML;
        document.getElementById("D_V_PhotoItem").value = this.cells[4].innerHTML;
        document.getElementById("D_V_Image").value = this.cells[5].innerHTML;
        document.getElementById("D_V_ImgDate").value = this.cells[6].innerHTML;

        document.getElementById("D_E_PpdCode").value = this.cells[0].innerHTML;
        document.getElementById("D_E_ProjectCode").value = this.cells[1].innerHTML;
        document.getElementById("D_E_LocationCode").value = this.cells[2].innerHTML;
        document.getElementById("D_E_Status").value = this.cells[3].innerHTML;
        document.getElementById("D_E_PhotoItem").value = this.cells[4].innerHTML;
        document.getElementById("D_E_Image").value = this.cells[5].innerHTML;
        document.getElementById("D_E_ImgDate").value = this.cells[6].innerHTML;

        document.getElementById("D_D_PpdCode").value = this.cells[0].innerHTML;
        document.getElementById("D_D_ProjectCode").value = this.cells[1].innerHTML;
        document.getElementById("D_D_LocationCode").value = this.cells[2].innerHTML;
        document.getElementById("D_D_Status").value = this.cells[3].innerHTML;
        document.getElementById("D_D_PhotoItem").value = this.cells[4].innerHTML;
        document.getElementById("D_D_Image").value = this.cells[5].innerHTML;
        document.getElementById("D_D_ImgDate").value = this.cells[6].innerHTML;




    };
}
 </script>

 <script>
$(document).ready(function() {
$('.js-example-basic-multiple').select2();
});
</script>







<!--image rotation function is included-->

    <div class="modal fade rotate" id="dispaly-employee" style="display:none;">
        <div class="modal-dialog" id="EditRecord">
            <div class="modal-content panel panel-primary">



                <!-- <img alt="Image" class="img-thumbnail rotateimg90" style="width:600px; height:600px;" id="image" /> -->
                <img alt="Image" class="img-thumbnail" style="width:600px; height:600px;" id="image" />
                
                
            </div>
            <div align="center">
                <input type="button" class="btnRotate" value="UP" onClick="rotateImage(90);" />
                <input type="button" class="btnRotate" value="DOWN" onClick="rotateImage(-90);" />
                <input type="button" class="btnRotate" value="RIGHT" onClick="rotateImage(180);" />
                <input type="button" class="btnRotate" value="LEFT" onClick="rotateImage(360);" />
                <input type="button" class="btnRotate" value="RESET" onClick="rotateImage(90);" />
            </div>

        </div>
    </div>
   <!--  <script>
    function myFunction() {
        $('.js-example-basic-multiple').select2();
    }    </script> -->
    <script>
    $(document).on("click", ".display-emp", function() {
        var ids = $(this).attr('data-geteid');
        console.log(ids);
        // $(".modal-dialog #idkl").val(ids);
        $('#EditRecord .img-thumbnail').attr('src', ids);
    });
    </script>

    <script>
        function rotateImage(degree) {
            $('#EditRecord .img-thumbnail').animate({  transform: degree }, {
                step: function(now,fx) {
                    $(this).css({
                        '-webkit-transform':'rotate('+now+'deg)', 
                        '-moz-transform':'rotate('+now+'deg)',
                        'transform':'rotate('+now+'deg)'
        });
    }
    });
    }
    </script>

    <!--image rotation function is included-->
    