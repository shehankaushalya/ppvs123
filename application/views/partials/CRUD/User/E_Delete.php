<div class="product-tab-list tab-pane fade " id="Delete1">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div class="row">
               
                            <?php echo form_open('User/deletedata'); ?>

                             <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2">Username
                                        </label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" name="UserName" id="E_D_UserName" readonly />
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2">Name</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" name="Name" id="E_D_Name" readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2">Category</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" placeholder="Enter Contact Number" name="Position" id="E_D_Position" readonly />
                                    </div>
                                </div>
                            </div>

                            <div class="form-group-inner">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <label class="login2">Contact Number</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <input type="text" class="form-control" id="E_D_ContactNumber" name="ContactNumber" readonly />
                                    </div>
                                </div>
                            </div>



                            <div class="login-btn-inner dropup">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                        <div class="login-horizental">
                                            <button type="button" class="btn btn-sm btn-primary login-submit-cs" data-toggle="dropdown">Delete

                                            </button>
                                            <ul class="dropdown-menu btn-dropdown-menu dropdown-menu-up" role="menu" style="min-width:130px;font-size:20px;padding:5px;">
                                                <li>
                                                    <center>Delete User?
                                                    </center><br>
                                                </li>
                                                <li>
                                                    <center><button type="submit" class="btn btn-sm btn-primary login-submit-cs" name="delete" id="btnSubmit">Yes</button>

                                                        <button type="button" class="btn btn-sm btn-primary login-submit-cs">No</button>
                                                    </center>
                                                </li>


                                            </ul>
                                            <?php echo form_close(); ?>
                                            <a data-dismiss="modal" href="#"><button class="btn btn-sm btn-primary login-submit-cs" type="button">Cancel</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
             

                </div>

            </div>
        </div>
    </div>
</div>