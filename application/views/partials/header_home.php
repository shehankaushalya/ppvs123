<!doctype html>
<html class="no-js" lang="en">
<style>
@media print {

    .pageBreak {
        page-break-before: always;
    }

    .QR,
    .QR1,
    .QR2,
    .QR3,
    .QR4,
    #doc,
    #back,
    #printButton,
    #settings,
    #hr,
    #qrp {
        display: none;
    }
}
</style>

<!-- Table Header Color -->
<style>
thead th {
    background: #333;
    color: white;
    position: -webkit-sticky;
    /* Safari */
    position: sticky;
    top: 0;
}
</style>
<!-- END Table Header Color  -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>NEM Constructions</title>
    <meta name="description" content="">

    <script src="<?php echo base_url(); ?>assets/new/js/lib/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/new/js/lib/jquery.mockjax.js"></script>
    <script src="<?php echo base_url(); ?>assets/new/js/lib/jquery.form.js"></script>
    <script src="<?php echo base_url(); ?>assets/new/js/dist/jquery.validate.js"></script>
    <!--  -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css'
        integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/new/img/logo.png">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/bootstrap.min.css" type="text/css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/font-awesome.min.css" type="text/css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/owl_carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/owl_theme.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/owl_transitions.css" type="text/css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/animate.css" type="text/css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/normalize.css" type="text/css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/meanmenu.min.css" type="text/css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/main.css" type="text/css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/educate-custon-icon.css" type="text/css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/morrisjs/morris.css" type="text/css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/scrollbar/jquery.mCustomScrollbar.min.css"
        type="text/css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/metisMenu/metisMenu.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/metisMenu/metisMenu-vertical.css"
        type="text/css">
    <!-- calendar CSS
		============================================ -->


    <!-- x-editor CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/editor/select2.css" type="text/css">
    <!-- normalize CSS
		============================================ -->


    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/style.css" type="text/css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/responsive.css" type="text/css">
    <!-- modernizr JS
		============================================ -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/vendor/modernizr-2.8.3.min.js"></script>



    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/bootstrap.min.css" type="text/css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/font-awesome.min.css" type="text/css">
    <!-- owl.carousel CSS
		============================================ -->

    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/animate.css" type="text/css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/normalize.css" type="text/css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/meanmenu.min.css" type="text/css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/main.css" type="text/css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/educate-custon-icon.css" type="text/css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/morrisjs/morris.css" type="text/css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/scrollbar/jquery.mCustomScrollbar.min.css"
        type="text/css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/metisMenu/metisMenu.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/metisMenu/metisMenu-vertical.css"
        type="text/css">
    <!-- calendar CSS
		============================================ -->

    <!-- modals CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/modals.css" type="text/css">
    <!-- forms CSS
		============================================ -->

    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/style.css" type="text/css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/new/css/responsive.css" type="text/css">
    <!-- modernizr JS
		============================================ -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/vendor/modernizr-2.8.3.min.js"></script>






<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">




</head>