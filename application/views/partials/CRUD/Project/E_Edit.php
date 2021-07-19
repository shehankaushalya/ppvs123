<div class="product-tab-list tab-pane fade active in" id="Edit1">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div class="row">

                    <form method="post" action="../Project/updatedata" class="projectE_Edit">

                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Project Code</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="hidden" class="form-control" placeholder="Enter Project Code"
                                        id="E_E_H_ProjectCode" name="ProjectCode" />
                                    <input type="text" class="form-control" placeholder="Enter Project Code"
                                        id="E_E_ProjectCode" name="ProjectCode" readonly />
                                </div>
                            </div>
                        </div>

                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Project Name</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" id="E_E_ProjectName" readonly />
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="hidden" class="form-control" name="ProjectName"
                                        id="E_E_H_ProjectName" />
                                </div>
                            </div>
                        </div>


                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Description</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Enter Description"
                                        name="Description" id="E_E_Description" />

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
                                            data-toggle="dropdown">Update

                                        </button>
                                        <ul class="dropdown-menu btn-dropdown-menu dropdown-menu-up" role="menu"
                                            style="min-width:130px;font-size:20px;padding:5px;">
                                            <li>
                                                <center>Save the changes to the Project
                                                </center><br>
                                            </li>
                                            <li>
                                                <center><button type="submit"
                                                        class="btn btn-sm btn-primary login-submit-cs"
                                                        id="btnSubmit">Yes</button>

                                                    <button type="button"
                                                        class="btn btn-sm btn-primary login-submit-cs">No</button>
                                                </center>
                                            </li>


                                        </ul>
                    </form>
                    <a data-dismiss="modal" href="#"><button class="btn btn-sm btn-primary login-submit-cs"
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