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
    #logo1 {
        visibility: visible;
    }
    }


    @media(max-width:991px) {
    #logo {
        visibility: visible;
    }
    #logo1 {
        visibility: hidden;
    }
    }

    @media(max-width:767px) {
    #logo {
        visibility: visible;
    }
    #logo1 {
        visibility: hidden;
    }
    }

    @media(max-width:480px) {
    #logo {
        visibility: visible;
    }
    #logo1 {
        visibility: hidden;
    }
    }

    @media(max-width:360px) {
    #logo {
        visibility: visible;
    }
    #logo1 {
        visibility: hidden;
    }
    }

    @media(max-width:320px) {
    #logo {
        visibility: visible;
    }
    #logo1 {
        visibility: hidden;
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
                    <br><br><br><br>


                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="logo">
                    <center>
                        <img class="main-logo" src="<?php echo base_url(); ?>assets/new/img/logo/logo.jpg" alt="logo.png" style="height:50px" />
                       
                    </center>
                    
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <h3 style="color:#337ab7;text-align: center;">Projects</h3>
                    </div>

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="logo">
                    <center>
                        <img class="main-logo" src="<?php echo base_url(); ?>assets/new/img/logo/logo.png" alt="logo.png" style="height:50px" />
                    
                    </center>
                    
                    </div>




                <div class="row" style="margin-top: 60px">

                    
                        
                        <?php
                            if ($project_progress_fetch_data->num_rows() > 0) {
                                foreach ($project_progress_fetch_data->result() as $row) {
                                ?>
                                <?php if ($row->UserName == $this->session->userdata('username')) { ?>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 17px;">
                                    <a class="btn btn-primary btn-block btn-lg" href="../Home/ItemView/<?php echo $row->ProjectCode  ?>" role="button">
                                    <?php echo $row->ProjectCode  ?>
                                    </a> 
                                </div>
                                <?php
                                }
                                }
                            } else {
                            ?>

                        <?php } ?>

                         
                    

                </div>

                
                </div>

                
                <br><br><br><br><br><br><br><br><br><br><br><br>


            </div>
        </div>
    </div>
</div>

</div>
<!-- </div>
</div> -->





<div class="footer-copyright-area" style="background-color:#fff">

                <!-- <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12"></div> -->
                <!-- <div class="col-lg-2 col-md-2"></div>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-2" id="logo">
                    <center>
                        <img class="main-logo" src="<?php echo base_url(); ?>assets/new/img/logo/logo.jpg" alt="logo.png" style="height:100px" />
                       
                    </center>
                <br>
                </div> -->
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="logo1">
                    <center>
                        <img class="main-logo" src="<?php echo base_url(); ?>assets/new/img/logo/logo.png" alt="logo.png" style="height:75px" />
                        <h6>NEM Construction (Pvt) Ltd <br>
                        Project Progress Visualization System</h6>

                    </center>
                <br>
                </div>

    <br>
    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12"></div>
    
</div>

</div>