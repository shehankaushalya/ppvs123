<style>
    .header-top-area {
        padding-top: 52px;
    }

    .mCustomScrollBox {

        height: 0;

    }

    .footer-copyright-area {

        z-index: 1;
    }

    button.btn.btn-link {
        padding: 0px 4px 18px;
    }

    .comment-scrollbar,
    .timeline-scrollbar,
    .messages-scrollbar,
    .project-list-scrollbar {
        /* height: 580px; */
        /* width: 214px; */
        background-color: #fff0;
    }
</style>

<div class="data-table-area mg-b-15">
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div class="sparkline11-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                        <div class="header-top-area" style="background-color:white">
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                                            </div>
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <button type="button" href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="btn btn-link">
                                                    <span class="step"><?php echo $this->session->userdata('name')[0]; ?></span><br></button>
                                                <ul role="menu" class="dropdown-toggle dropdown-menu animated dropdown-menu-right zoomIn">

                                                    <li><a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown10"><span class="edu-icon edu-settings author-log-ic"></span>Change
                                                            Password</a>
                                                    </li>

                                                    <li><a href="<?php
                                                                    echo base_url('index.php/User/LogoutUser');
                                                                    ?>"><span class="edu-icon edu-locked author-log-ic"></span>Log
                                                            Out</a>
                                                    </li>
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

    <hr>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="sparkline13-list">

        
                <div class="main-sparkline13-hd">
                    <br><br>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                                         <label
                                                                                             class="login2">Project</label>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-12" name="ProjectCode">
                                                                                         <?php echo($project_code); ?>

                                                                                     </div>
                                                                                 </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>

                    <br><br>
            </div>
        </div>
<br><br><br><br>
        <div class="main-sparkline13-hd">
                    <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a href="<?php echo base_url(); ?>index.php/Home/LocationView/Bridge/<?php echo($project_code); ?>"><center><img src="<?php echo base_url(); ?>assets/new/img/1.png"></center>
                                <br><h5><center><b>Bridge</b></center></h5></a>
                                <!-- <br><h5><center><b>Bridge --- <?php echo($product_id); ?></b></center></h5></a>    -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a><center><img src="<?php echo base_url(); ?>assets/new/img/2.png"></center>
                                <br><h5><center><b>Culvert</b></center></h5></a>  
                    </div>
                    

                </div>

                <br>

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a><center><img src="<?php echo base_url(); ?>assets/new/img/3.png"></center>
                                <br><h5><center><b>Embankment</b></center></h5></a>  
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <a><center><img src="<?php echo base_url(); ?>assets/new/img/4.png"></center>
                                <br><h5><center><b>Retaining Wall</b></center></h5></a>    
                    </div>
                    

                </div>

                    
                   

        </div>










</div>
<!-- </div>
</div> -->



<div class="footer-copyright-area" style="background-color:#fff">


    <br>
    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12"></div>
    
</div>

</div>