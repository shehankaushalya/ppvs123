<div class="product-tab-list tab-pane fade" id="Edit2">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div class="row">


                    <form method="post" action="../Location/updatedata" class="locationD_Edit">

                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Location Code
                                    </label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" id="D_E_LocationCode" name="LocationCode"
                                        readonly />
                                </div>

                            </div>
                        </div>

                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Location</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Enter Location" name="Location"
                                        id="D_E_Location" readonly />
                                </div>
                            </div>
                        </div>

                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Remark</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Enter Remark"
                                        name="Description" id="D_E_Description" />

                                </div>
                            </div>
                        </div>


                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Project Code
                                    </label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" name="ProjectCode" id="D_E_ProjectName"
                                        readonly />
                                </div>

                            </div>
                        </div>
                        


                       

                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Status</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                <select class="js-example-basic-multiple" style="color:#337ab7; border:1px solid #ddd;" 
                                    onchange="document.getElementById('D_E_Status').value=this.options[this.selectedIndex].text; 
                                    document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                                        <option value="-1"></option>
                                        <option>Not_Yet_Started
                                                                                             </option>
                                                                                             <option>Initiated
                                                                                             </option>
                                                                                             <option>Work_In_Progress
                                                                                             </option>
                                                                                             <option>Completed
                                                                                             </option>
                                                                                             <option>Hold
                                                                                             </option>


                                    </select>
                                    <input class="form-control" name="Status" id="D_E_Status" 
                                    style="position:absolute;top:0px;width:240px;width:180px\9;#width:180px; border:1px solid #ddd; border-right:0;" 
                                    onfocus="this.select()" type="text" readonly required>

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
                                                <center>Save the changes to the location
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