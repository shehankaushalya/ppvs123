<?php $this->load->view('partials/header_view'); ?>
<style>
.callout {
    position: fixed;
    bottom: 75%;
    right: 40%;
    /* margin-left: 20px; */
    max-width: 300px;

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

<body>

    <!-- BEGAIN PRELOADER -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- END PRELOADER -->

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="<?php echo base_url(); ?>#"><i class="fa fa-angle-up"></i></a>
    <!-- END SCROLL TOP BUTTON -->

    <!-- Start header -->

    <!-- End header -->

    <!-- Start login modal window -->
    <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
        <div class="modal-dialog">
            <!-- Start login section -->
            <div id="login-content" class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
                </div>
                <div class="modal-body">

                    <?php echo validation_errors(); ?>
                    <?php echo form_open('User/Login'); ?>
                    <div class="form-group">
                        <input type="text" placeholder="User Name" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control" name="password" required>
                    </div>
                    <div class="loginbox">

                        <button class="btn signin-btn" type="submit">SIGN IN</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>

            </div>
            <!-- Start signup section -->

        </div>
    </div>
    <!-- End login modal window -->

    <!-- BEGIN MENU -->
    <section id="menu-area">
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                        <!-- <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span> -->
                    </button>
                    <!-- LOGO -->
                    <!-- TEXT BASED LOGO -->

                    <!-- IMG BASED LOGO  -->
                    <!-- <a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="logo"></a> -->
                </div>

            </div>
        </nav>
    </section>
    <!-- END MENU -->

    <!-- Start slider -->
    <section id="slider">
        <div class="main-slider">
            <div class="single-slide">
                <img src="<?php echo base_url(); ?>assets/images/Poster.jpg" alt="img">
                <div class="slide-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="slide-article">
                                    <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Welcome to
                                        the Project Progress Visualization System</h1>
                                    <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Powered by
                                        NEM-ERP Engineering & Research Unit

                                        <br>
                                        <br>
                                        <a style="color:#ff9900; font-size:26px" class="login modal-form"
                                            data-target="#login-form" data-toggle="modal"
                                            href="<?php echo base_url(); ?>#">
                                            ENTRY


                                        </a>

                                    </p>
                                </div>

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="slider-img wow fadeInUp">

                                </div>
                            </div>
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



    </section>


    <!-- End slider -->

    <!-- Start Feature -->


    <!-- Start about  -->


    <!-- Start footer -->

    <!-- End footer -->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <!-- Slick Slider -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/slick.js"></script>
    <!-- mixit slider -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.mixitup.js"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.fancybox.pack.js"></script>
    <!-- counter -->
    <script src="<?php echo base_url(); ?>assets/js/waypoints.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.counterup.js"></script>
    <!-- Wow animation -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/wow.js"></script>
    <!-- progress bar   -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap-progressbar.js"></script>


    <!-- Custom js -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js" integrity="sha384-vhJnz1OVIdLktyixHY4Uk3OHEwdQqPppqYR8+5mjsauETgLOcEynD9oPHhhz18Nw" crossorigin="anonymous"></script> -->

    <script>
    var timeout = 2000; // in miliseconds (3*1000)

    $('.callout').delay(timeout).fadeOut(1000);
    </script>


</body>

</html>