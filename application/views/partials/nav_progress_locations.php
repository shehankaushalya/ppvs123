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

    @media(min-width:991px) {
    #logo {
        visibility: hidden;
    }
    }


    @media(max-width:991px) {
    #logo {
        visibility: visible;
    }
    }

    @media(max-width:767px) {
    #logo {
        visibility: visible;
    }
    }

    @media(max-width:480px) {
    #logo {
        visibility: visible;
    }
    }

    @media(max-width:360px) {
    #logo {
        visibility: visible;
    }
    }

    @media(max-width:320px) {
    #logo {
        visibility: visible;
    }
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
                                        
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                                <center><h2 style="color:black;text-align: center;">NEM Project Progress Visualization System</h2></center>
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

            <div class="sparkline13-hd">
                <div class="main-sparkline13-hd">

                <div class="row" style="margin-top: 60px">


                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3" id="logo">
                    <center>
                        <img class="main-logo" src="<?php echo base_url(); ?>assets/new/img/logo/logo.jpg" alt="logo.png" style="height:50px" />
                       
                    </center>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="form-group-inner">
                                                                                 <div class="row">
                                                                                     <div
                                                                                         class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                                                                         <h3 style="color:#337ab7;text-align: center;">Project</h3>
                                                                                     </div>
                                                                                     <div
                                                                                         class="col-lg-8 col-md-8 col-sm-8 col-xs-8" name="ProjectCode">
                                                                                         <h3 style="text-align: center;"><?php echo($project_code); ?></h3>

                                                                                     </div>
                                                                                 </div>
                        </div>
                    </div>

                    
                    <div class="col-lg-4 col-md-4 col-sm-3 col-xs-3" id="logo">
                        <center>
                        <img class="main-logo" src="<?php echo base_url(); ?>assets/new/img/logo/logo.png" alt="logo.png" style="height:50px" />
                    
                        </center>
                    </div>
                    
                </div>

                <div class="row" style="margin-top: 50px">

                    <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <h3 style="color:#337ab7;"><center>Project</center></h3>
                    </div> -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h3 style="color:#337ab7;"><center>Location</center></h3>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h3 style="color:#337ab7;"><center>Status</center></h3>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                        <h3 style="color:#337ab7;"><center>Remark</center></h3>
                    </div>
                    
                </div>
                    
                
                    

                

                    
                    
                    <?php
                            if ($project_location_fetch_data->num_rows() > 0) {
                                foreach ($project_location_fetch_data->result() as $row) {
                                ?>
                                <?php if ($row->UserName == $this->session->userdata('username')) { ?>

                                    <div class="row" style="margin-top: 30px">
                                    <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="font-size: 18px;"><center><?php echo($project_code); ?></center></div> -->
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <a class="btn btn-primary btn-block btn-lg" href="<?php echo base_url(); ?>index.php/Home/ImageView/<?php echo($item_code); ?>/<?php echo($project_code); ?>/<?php echo $row->LocationCode ?>/<?php echo $row->Description  ?>" role="button">
                                    <?php echo $row->LocationCode  ?> 
                                    </a>
                                    </div>
                                
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size: 18px"><center><?php echo $row->Status  ?></center></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="font-size: 18px"><center><?php echo $row->Description  ?></center></div>
                                    
                               
                                    </div>
                                
                                <?php
                                }
                                }
                            } else {
                            ?>

                    <?php } ?>

                    
                

                    
                </div>


            </div>
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