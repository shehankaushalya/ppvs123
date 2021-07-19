<div class="product-tab-list tab-pane fade active in" id="Delete2">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div class="row">

                    <?php echo form_open('Project/deletedata'); ?>

                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Project Code</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" name="ProjectCode" id="D_D_ProjectCode"
                                    readonly />
                            </div>
                        </div>
                    </div>

                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Project
                                    Name</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" id="D_D_ProjectName" readonly />
                                <input type="hidden" class="form-control" name="ProjectName" id="D_D_H_ProjectName"
                                    required />
                            </div>
                        </div>
                    </div>


                    <div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <label class="login2">Description</label>
                            </div>
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <input type="text" class="form-control" id="D_D_Description" name="Description"
                                    readonly />
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
                                            <center>Delete Project ?
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