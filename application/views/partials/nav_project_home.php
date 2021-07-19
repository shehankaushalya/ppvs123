 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">


 <style>
table tr:not(:first-child) {
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
                     <!-- <div class="sparkline13-hd">
                         <div class="main-sparkline13-hd">
                             <div id="topic">
                                 <h1>Project <span class="table-project-n">Details</span> </h1>
                             </div>
                         </div>
                     </div> -->
                     <div class="sparkline13-graph">
                         <div class="datatable-dashv1-list custom-datatable-overright">


                             <!-- Modal Form -->
                             <div class="sparkline11-graph">
                                 <div class="basic-login-form-ad">

                                     <div class="row">
                                         <div class="header-top-area" style="background-color:white">
                                             <div class="col-lg-10 col-md-10 col-sm-10 col-xs-9">


                                                 <?php if ($this->session->userdata('ProjectNew') == "checked") { ?>
                                                 <a class="zoomInDown mg-t" href="#" data-toggle="modal"
                                                     data-target="#zoomInDown1">
                                                     <button type="button" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/New.png"><br>
                                                         New </button></a>
                                                 <?php
                                                    } ?>

                                                 <?php if ($this->session->userdata('ProjectView') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" class="btn btn-link" href="#"
                                                         data-toggle="modal" data-target="#zoomInDown2" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/view.png"><br>
                                                         View</button></a>
                                                 <?php
                                                    } ?>
                                                 <?php if ($this->session->userdata('ProjectEdit') == "checked") { ?>
                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" href="#" data-toggle="modal"
                                                         data-target="#zoomInDown3" class="btn btn-link" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/edit.png"><br>
                                                         Edit</button></a>
                                                 <?php
                                                    } ?>

                                                 <?php if ($this->session->userdata('ProjectDelete') == "checked") { ?>

                                                 <a class="zoomInDown mg-t">
                                                     <button type="button" href="#" data-toggle="modal"
                                                         data-target="#zoomInDown4" class="btn btn-link" disabled>
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/delete.png"><br>
                                                         Delete</button></a>
                                                 <?php
                                                    } ?>
                                                 <?php

                                                    ?>
                                                 <?php if ($this->session->userdata('LocationView') == "checked") { ?>

                                                 <form method='post' action='../Location/projectLocationView'
                                                     style='display: -webkit-inline-box;'>
                                                     <input type="hidden" class="form-control" name="ProjectName"
                                                         id="L_ProjectName" />

                                                     <button type="submit" class="btn btn-link">
                                                         <img
                                                             src="<?php echo base_url(); ?>assets/new/img/BodyPNG/location2.png"><br>
                                                         Locations</button>
                                                 </form>
                                                 <?php
                                                    }

                                                    ?>
                                                 <button
                                                     onclick="exportExcel(document.getElementById('topic').innerText)"
                                                     type="button" class="btn btn-link a">
                                                     <img
                                                         src="<?php echo base_url(); ?>assets/new/img/BodyPNG/Excel.png"><br>
                                                     Export
                                                     Excel</button>
                                                 <a href="../Project/projects">
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
                                                         <h4 class="modal-title">Add New Project</h4>
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
                                                                             action="../Project/register"
                                                                             class="projectAdd">

                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Project
                                                                                             Code</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="Enter Project Code"
                                                                                             name="projectcode"
                                                                                             id="projectcode1"
                                                                                             required />
                                                                                     </div>
                                                                                 </div>
                                                                             </div>

                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label class="login2">Project
                                                                                             Name</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="Enter Project Name"
                                                                                             name="projectname"
                                                                                             id="projectname1"
                                                                                             required />
                                                                                     </div>
                                                                                 </div>
                                                                             </div>



                                                                             <!-- <div class="form-group-inner">
                                                                                     <div class="row">
                                                                                         <div
                                                                                             class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                             <label class="login2">Main
                                                                                                 Location</label>
                                                                                         </div>
                                                                                         <div
                                                                                             class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                             <input type="text"
                                                                                                 class="form-control"
                                                                                                 placeholder="Enter Main Location"
                                                                                                 name="mainlocation"
                                                                                                 required />
                                                                                         </div>
                                                                                     </div>
                                                                                 </div> -->


                                                                             <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label
                                                                                             class="login2">Description</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                                                                         <input type="text"
                                                                                             class="form-control"
                                                                                             placeholder="Enter Description"
                                                                                             name="description" />
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
                                                                                                 Project</button>

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
                                                         <h4 class="modal-title">Project</h4>
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
                                                                                                     <?php if ($this->session->userdata('ProjectView') == "checked") { ?>
                                                                                                     <a href="#View"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('ProjectEdit') == "checked") { ?>
                                                                                                     <a href="#Edit"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('ProjectDelete') == "checked") { ?>
                                                                                                     <a href="#Delete"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/Project/V_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Project/V_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Project/V_Delete.php'); ?>

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
                                                         <h4 class="modal-title">Project</h4>
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
                                                                                                     <?php if ($this->session->userdata('ProjectView') == "checked") { ?>
                                                                                                     <a href="#View1"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li class="active">
                                                                                                     <?php if ($this->session->userdata('ProjectEdit') == "checked") { ?>
                                                                                                     <a href="#Edit1"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('ProjectDelete') == "checked") { ?>
                                                                                                     <a href="#Delete1"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/Project/E_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Project/E_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Project/E_Delete.php'); ?>

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
                                                         <h4 class="modal-title">Project</h4>
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
                                                                                                     <?php if ($this->session->userdata('ProjectView') == "checked") { ?>
                                                                                                     <a href="#View2"><i
                                                                                                             class="fas fa-search"></i>
                                                                                                         View</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li>
                                                                                                     <?php if ($this->session->userdata('ProjectEdit') == "checked") { ?>
                                                                                                     <a href="#Edit2"><i
                                                                                                             class="fas fa-edit"></i>
                                                                                                         Edit</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                                 <li class="active">
                                                                                                     <?php if ($this->session->userdata('ProjectDelete') == "checked") { ?>
                                                                                                     <a href="#Delete2"><i
                                                                                                             class="fas fa-trash-alt"></i>
                                                                                                         Delete</a>
                                                                                                     <?php
                                                                                                        } ?>
                                                                                                 </li>
                                                                                             </ul>
                                                                                             <div id="myTabContent"
                                                                                                 class="tab-content custom-product-edit">

                                                                                                 <?php $this->load->view('partials/CRUD/Project/D_View.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Project/D_Edit.php'); ?>
                                                                                                 <?php $this->load->view('partials/CRUD/Project/D_Delete.php'); ?>

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
                                 <!-- <div style="height:580px; overflow:auto;"> -->

                                 <table id="table" class="table table-striped table-bordered" style="width:100%;">
                                     <thead>

                                         <tr>
                                             <td colspan="3">
                                                
                                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                      <h4 id="topic" style="color:#337ab7;">Project Details</h4>
                                     </div> 
                         
                                             </td>
                                         </tr>

                                         <tr>
                                             <th data-field="code">Project Code</th>
                                             <th data-field="name">Project Name</th>
                                             <th data-field="Description">Description</th>
                                         </tr>
                                     </thead>

                                     <tbody>
                                         <?php

                                            if ($project_fetch_data->num_rows() > 0) {
                                                foreach ($project_fetch_data->result() as $row) {
                                                    ?>
                                         <?php if ($row->UserName == $this->session->userdata('username')) { ?>
                                         <tr>
                                             <td><?php echo $row->ProjectCode ?></td>
                                             <td><?php echo $row->ProjectName ?></td>
                                             <td><?php echo $row->Description ?></td>
                                         </tr>


                                         <?php
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

 <script>
$(document).ready(function() {
    var table = $('#table').DataTable({
        "pageLength": 10,
        //         "scrollY": 350,
        // "scrollX": true,

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
        document.getElementById("V_V_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("V_V_ProjectCode").value = this.cells[0].innerHTML;
        //  document.getElementById("V_V_MainLocation").value = this.cells[2].innerHTML;
        document.getElementById("V_V_Description").value = this.cells[2].innerHTML;
        document.getElementById("V_E_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("V_E_H_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("V_E_ProjectCode").value = this.cells[0].innerHTML;
        document.getElementById("V_E_H_ProjectCode").value = this.cells[0].innerHTML;
        //  document.getElementById("V_E_MainLocation").value = this.cells[2].innerHTML;
        document.getElementById("V_E_Description").value = this.cells[2].innerHTML;
        document.getElementById("V_D_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("V_D_H_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("V_D_ProjectCode").value = this.cells[0].innerHTML;
        //  document.getElementById("V_D_MainLocation").value = this.cells[2].innerHTML;
        document.getElementById("V_D_Description").value = this.cells[2].innerHTML;

        document.getElementById("E_V_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("E_V_ProjectCode").value = this.cells[0].innerHTML;
        //  document.getElementById("E_V_MainLocation").value = this.cells[2].innerHTML;
        document.getElementById("E_V_Description").value = this.cells[2].innerHTML;
        document.getElementById("E_E_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("E_E_H_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("E_E_ProjectCode").value = this.cells[0].innerHTML;
        document.getElementById("E_E_H_ProjectCode").value = this.cells[0].innerHTML;
        //  document.getElementById("E_E_MainLocation").value = this.cells[2].innerHTML;
        document.getElementById("E_E_Description").value = this.cells[2].innerHTML;
        document.getElementById("E_D_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("E_D_H_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("E_D_ProjectCode").value = this.cells[0].innerHTML;
        //  document.getElementById("E_D_MainLocation").value = this.cells[2].innerHTML;
        document.getElementById("E_D_Description").value = this.cells[2].innerHTML;

        document.getElementById("D_V_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("D_V_ProjectCode").value = this.cells[0].innerHTML;
        //  document.getElementById("D_V_MainLocation").value = this.cells[2].innerHTML;
        document.getElementById("D_V_Description").value = this.cells[2].innerHTML;
        document.getElementById("D_E_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("D_E_H_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("D_E_ProjectCode").value = this.cells[0].innerHTML;
        document.getElementById("D_E_H_ProjectCode").value = this.cells[0].innerHTML;
        //  document.getElementById("D_E_MainLocation").value = this.cells[2].innerHTML;
        document.getElementById("D_E_Description").value = this.cells[2].innerHTML;
        document.getElementById("D_D_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("D_D_H_ProjectName").value = this.cells[1].innerHTML;
        document.getElementById("D_D_ProjectCode").value = this.cells[0].innerHTML;
        //  document.getElementById("D_D_MainLocation").value = this.cells[2].innerHTML;
        document.getElementById("D_D_Description").value = this.cells[2].innerHTML;

        document.getElementById("L_ProjectName").value = this.cells[1].innerHTML;

    };
}
 </script>