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

    .btn:focus, .btn:active, button:focus, button:active {
  outline: none !important;
  box-shadow: none !important;
}

#image-gallery .modal-footer{
  display: block;
}

.thumb{
  margin-top: 15px;
  margin-bottom: 15px;
}

.modal-dialog1 {
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
}

.modal-content {
  height: auto;
  min-height: 100%;
  border-radius: 0;
}

#image-gallery-image{
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
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

        <div class="main-sparkline13-hd">


                <div class="row" style="margin-top: 60px">

                    
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" id="logo">
                    <center>
                        <img class="main-logo" src="<?php echo base_url(); ?>assets/new/img/logo/logo.jpg" alt="logo.png" style="height:50px" />
                       
                    </center>
                    </div>
                    
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="font-size: 20px; color:#337ab7;">
                      <center><b><?php echo($item_code); ?>-<?php echo($project_code); ?>-<?php echo($location_code); ?>-<?php echo($remark); ?> </b></center></div>
                    
                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1" id="logo">
                        <center>
                        <img class="main-logo" src="<?php echo base_url(); ?>assets/new/img/logo/logo.png" alt="logo.png" style="height:50px" />
                    
                        </center>
                    </div>
                    
                </div>

                <!-- <div class="row">

                    
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                        <h3 style="color:#337ab7;"><center>Location</center></h3>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="font-size: 18px"><center><b><?php echo($location_code); ?></b></center></div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    </div>
                    
                </div> -->

        <br>      
        <div class="row">
            

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 thumb">
            <?php
                            if ($project_image_fetch_data_lhs->num_rows() > 0) {

                              ?>
                              <h4 style="color:#337ab7;"><center><b>LHS</b></center></h4>
                              <?php
                                foreach ($project_image_fetch_data_lhs->result() as $row) {
                                ?>
                                <?php if ($row->UserName == $this->session->userdata('username')) { ?>


                                  <!-- <h4 style="color:#337ab7;"><center><b><?php echo $row->WorkSide ?></b></center></h4> -->
                                  

                                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $row->Remark ?> <?php echo $row->ImgDate ?>"
                                    data-image="<?php echo $row->Image ?>"
                                    data-target="#image-gallery">

                                    <img class="img-thumbnail"
                                    src="<?php echo $row->Image ?>"
                                    alt="Another alt text">

                                    <br>

                                    <!-- <h5><center><b><?php echo $row->ProjectCode ?> <?php echo $row->LocationCode ?> <?php echo $row->ImgDate ?></b></center></h5></a> -->
                                    <h5><center><b><?php echo $row->Remark ?> <?php echo $row->ImgDate ?></b></center></h5></a>
                                    </a>
            
                                    
                                    
                                
                                <?php
                                }
                                }
                              
                            ?>

                    <?php } ?>
                    </div>
                    <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 thumb">
                              </div> -->

                              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 thumb">
                            <?php
                            if ($project_image_fetch_data_rhs->num_rows() > 0) {
                              ?>
                              <h4 style="color:#337ab7;"><center><b>RHS</b></center></h4>
                              <?php
                                foreach ($project_image_fetch_data_rhs->result() as $row) {
                                ?>
                                <?php if ($row->UserName == $this->session->userdata('username')) { ?>

                                  
                                  <!-- <h4 style="color:#337ab7;"><center><b><?php echo $row->WorkSide ?></b></center></h4> -->
                                  

                                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $row->Remark ?> <?php echo $row->ImgDate ?>"
                                    data-image="<?php echo $row->Image ?>"
                                    data-target="#image-gallery">

                                    <img class="img-thumbnail"
                                    src="<?php echo $row->Image ?>"
                                    alt="Another alt text">

                                    <br>

                                    <!-- <h5><center><b><?php echo $row->ProjectCode ?> <?php echo $row->LocationCode ?> <?php echo $row->ImgDate ?></b></center></h5></a> -->
                                    <h5><center><b><?php echo $row->Remark ?> <?php echo $row->ImgDate ?></b></center></h5></a>
                                    </a>
            
                                    
                                    
                                
                                <?php
                                }
                                }
                              
                            ?>

                    <?php } ?>
                    </div>

                              </div>


                              <div class="row">
            

            <?php
                            if ($project_image_fetch_data_none->num_rows() > 0) {

                              ?>
                              <!-- <h4 style="color:#337ab7;"><center><b>None</b></center></h4> -->

                              <?php

                                foreach ($project_image_fetch_data_none->result() as $row) {
                                ?>
                                <?php if ($row->UserName == $this->session->userdata('username')) { ?>

                                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 thumb">

                                  <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="<?php echo $row->ProjectCode ?> <?php echo $row->LocationCode ?> <?php echo $row->ImgDate ?>"
                                    data-image="<?php echo $row->Image ?>"
                                    data-target="#image-gallery">

                                    <img class="img-thumbnail"
                                    src="<?php echo $row->Image ?>"
                                    alt="Another alt text">

                                    <br>

                                    <h5><center><b><b><?php echo $row->Remark ?> <?php echo $row->ImgDate ?></b></b></center></h5></a>
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

            
           



        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog1 modal-lg">
                <div class="modal-content">
                <br><br><br><br><br>
                    <div class="modal-header">
                    <center>
                        <h4 class="modal-title" id="image-gallery-title" style="font-size:28px;color:#337ab7"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </center>
                    </div>
                    <div class="modal-body">
                        <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                    </div>
                    <div class="modal-footer">
                        <center>
                        <button type="button" class="btn btn-secondary float-left btn-lg" id="show-previous-image" style="font-size: 28px;"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right btn-lg" style="font-size: 28px;"><i class="fa fa-arrow-right"></i>
                        </button>
                        </center>
                    </div>
                </div>
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


<script>
    
    let modalId = $('#image-gallery');

$(document)
  .ready(function () {

    loadGallery(true, 'a.thumbnail');

    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current) {
      $('#show-previous-image, #show-next-image')
        .show();
      if (counter_max === counter_current) {
        $('#show-next-image')
          .hide();
      } else if (counter_current === 1) {
        $('#show-previous-image')
          .hide();
      }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */

    function loadGallery(setIDs, setClickAttr) {
      let current_image,
        selector,
        counter = 0;

      $('#show-next-image, #show-previous-image')
        .click(function () {
          if ($(this)
            .attr('id') === 'show-previous-image') {
            current_image--;
          } else {
            current_image++;
          }

          selector = $('[data-image-id="' + current_image + '"]');
          updateGallery(selector);
        });

      function updateGallery(selector) {
        let $sel = selector;
        current_image = $sel.data('image-id');
        $('#image-gallery-title')
          .text($sel.data('title'));
        $('#image-gallery-image')
          .attr('src', $sel.data('image'));
        disableButtons(counter, $sel.data('image-id'));
      }

      if (setIDs == true) {
        $('[data-image-id]')
          .each(function () {
            counter++;
            $(this)
              .attr('data-image-id', counter);
          });
      }
      $(setClickAttr)
        .on('click', function () {
          updateGallery($(this));
        });
    }
  });

// build key actions
$(document)
  .keydown(function (e) {
    switch (e.which) {
      case 37: // left
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
          $('#show-previous-image')
            .click();
        }
        break;

      case 39: // right
        if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
          $('#show-next-image')
            .click();
        }
        break;

      default:
        return; // exit this handler for other keys
    }
    e.preventDefault(); // prevent the default action (scroll / move caret)
  });
</script>