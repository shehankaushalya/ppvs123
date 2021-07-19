<div class="product-tab-list tab-pane fade" id="Delete">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div class="row">

                    <?php echo form_open('Progress/deletedata'); ?>


                    <div class="form-group-inner">
                        <div class="row">
                            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">PPD Code</label>
                            </div> -->
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="hidden" class="form-control" 
                                    name="PpdCode" id="V_D_PpdCode" readonly />

                            </div>
                        </div>
                    </div>

                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Project Code</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" id="V_D_ProjectCode" readonly />

                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Location Code</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" id="V_D_LocationCode" readonly />
                            </div>
                        </div>
                    </div>



                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Status</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control"
                                    id="V_D_Status" readonly />
                            </div>
                        </div>
                    </div>


                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Photo Category</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" id="V_D_PhotoItem" readonly />
                            </div>
                        </div>
                    </div>
                    <div class="form-group-inner">
                        <div class="row">
                            <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Image</label>
                            </div> -->
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="hidden" class="form-control" placeholder="Enter Image Link" id="V_D_Image" name="Image"
                                    readonly />
                            </div>
                        </div>
                    </div>


                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Photo Capturing Date</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" placeholder="Enter Photo Capturing Date" id="V_D_ImgDate"
                                    name="ImgDate" readonly />
                            </div>
                        </div>
                    </div>








                    <div class="login-btn-inner dropup">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <div class="login-horizental">
                                    <button type="button" class="btn btn-sm btn-primary login-submit-cs"
                                        data-toggle="dropdown">Delete

                                    </button>
                                    <ul class="dropdown-menu btn-dropdown-menu dropdown-menu-up" role="menu"
                                        style="min-width:130px;font-size:20px;padding:5px;">
                                        <li>
                                            <center>Delete ?
                                            </center><br>
                                        </li>
                                        <li>
                                            <center><button type="submit" class="btn btn-sm btn-primary login-submit-cs"
                                                    name="delete" id="btnSubmit">Yes</button>

                                                <button type="button"
                                                    class="btn btn-sm btn-primary login-submit-cs">No</button>
                                            </center>
                                        </li>


                                    </ul>
                                    <?php echo form_close(); ?>
                                    <a data-dismiss="modal" href="#"><button
                                            class="btn btn-sm btn-primary login-submit-cs"
                                            type="button">Cancel</button></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>