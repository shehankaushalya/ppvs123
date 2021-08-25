<div class="product-tab-list tab-pane fade" id="Edit">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div class="row">



                    <form method="post" action="../Progress/updatedata" class="progress_Edit">



                        <div class="form-group-inner">
                            <div class="row">
                                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">PPD Code</label>
                                </div> -->
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                    <input type="hidden" class="form-control" 
                                        name="PpdCode" id="V_E_PpdCode" readonly />
                                </div>
                            </div>
                        </div>


                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Project Code</label>
                                </div>


                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                <select class="js-example-basic-multiple"
                                        style="color:#337ab7; border:1px solid #ddd"
                                        onchange="document.getElementById('V_E_ProjectCode').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                                        <option value="-1"></option>
                                        <?php if ($this->session->userdata('ProjectCode')) {

                                            ?>
                                        <option>
                                            <?php echo $this->session->userdata('ProjectCode'); ?>
                                        </option>
                                        <?php
                                        } else { ?>
                                        <?php
                                                if ($project_fetch_data->num_rows() > 0) {
                                                    foreach ($project_fetch_data->result() as $row) {
                                                        ?>
                                        <?php if ($row->UserName == $this->session->userdata('username')) { ?>
                                        <option>
                                            <?php echo $row->ProjectCode  ?>
                                        </option>
                                        <?php
                                                    }
                                                }
                                            }
                                        }   ?>
                                    </select>


                                    <input class="form-control" name="ProjectCode" id="V_E_ProjectCode" 
                                    style="position:absolute;top:0px;width:240px;width:180px\9;#width:180px; border:1px solid #ddd; 
                                    border-right:0;" onfocus="this.select()" type="text" readonly>

                                </div>
                            </div>
                        </div>




                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Location Code</label>
                                </div>


                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


                                <select class="js-example-basic-multiple"
                                        style="color:#337ab7; border:1px solid #ddd"
                                        onchange="document.getElementById('V_E_LocationCode').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                                        <option value="-1"></option>
                                        <?php if ($this->session->userdata('LocationCode')) {

                                            ?>
                                        <option>
                                            <?php echo $this->session->userdata('LocationCode'); ?>
                                        </option>
                                        <?php
                                        } else { ?>
                                        <?php
                                                if ($location_fetch_data->num_rows() > 0) {
                                                    foreach ($location_fetch_data->result() as $row) {
                                                        ?>
                                        <?php if ($row->UserName == $this->session->userdata('username')) { ?>
                                        <option>
                                            <?php echo $row->LocationCode  ?>
                                        </option>
                                        <?php
                                                    }
                                                }
                                            }
                                        }   ?>
                                    </select>

                                    <input class="form-control" name="LocationCode" id="V_E_LocationCode" 
                                    style="position:absolute;top:0px;width:240px;width:180px\9;#width:180px; border:1px solid #ddd; 
                                    border-right:0;" onfocus="this.select()" type="text" readonly>

                                </div>
                            </div>
                        </div>



                        <!-- <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Status</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


                                <select class="js-example-basic-multiple" style="color:#337ab7; border:1px solid #ddd;" 
                                    onchange="document.getElementById('V_E_Status').value=this.options[this.selectedIndex].text; 
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
                                    <input class="form-control" name="Status" id="V_E_Status" 
                                    style="position:absolute;top:0px;width:240px;width:180px\9;#width:180px; border:1px solid #ddd; 
                                    border-right:0;" onfocus="this.select()" type="text" readonly>

                                </div>
                            </div>
                        </div> -->



                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Photo Category</label>
                                </div>


                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


                                    <select class="js-example-basic-multiple" style="color:#337ab7; border:1px solid #ddd;" 
                                    onchange="document.getElementById('V_E_PhotoItem').value=this.options[this.selectedIndex].text; 
                                    document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                                        <option value="-1"></option>
                                        <option>Bridge
                                                                                             </option>
                                                                                             <option>Culvert
                                                                                             </option>
                                                                                             <option>Retaining_Wall
                                                                                             </option>
                                                                                             <option>Other
                                                                                             </option>
                                                                                             


                                    </select>
                                    <input class="form-control" name="PhotoItem" id="V_E_PhotoItem" 
                                    style="position:absolute;top:0px;width:240px;width:180px\9;#width:180px; border:1px solid #ddd; 
                                    border-right:0;" onfocus="this.select()" type="text" readonly>

                                </div>
                            </div>
                        </div>


                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Working Side</label>
                                </div>


                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">


                                    <select class="js-example-basic-multiple" style="color:#337ab7; border:1px solid #ddd;" 
                                    onchange="document.getElementById('V_E_WorkSide').value=this.options[this.selectedIndex].text; 
                                    document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                                        <option value="-1"></option>
                                        
                                                                                             <option>LHS
                                                                                             </option>
                                                                                             <option>RHS
                                                                                             </option>
                                                                                             <option>None
                                                                                             </option>


                                    </select>
                                    <input class="form-control" name="WorkSide" id="V_E_WorkSide" 
                                    style="position:absolute;top:0px;width:240px;width:180px\9;#width:180px; border:1px solid #ddd; 
                                    border-right:0;" onfocus="this.select()" type="text" readonly>

                                </div>
                            </div>
                        </div>







                        <div class="form-group-inner">
                            <div class="row">
                                <!-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Image</label>
                                </div> -->
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="hidden" class="form-control" placeholder="Enter Image Link" name="Image"
                                        id="V_E_Image" readonly/>
                                </div>
                            </div>
                        </div>



                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Photo Capturing Date</label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="date" class="form-control" id="V_E_ImgDate" name="ImgDate" />
                                    <!-- <input type="text" class="form-control" placeholder="Enter Photo Capturing Date" name="ImgDate"
                                        id="V_E_ImgDate"/> -->
                                </div>
                            </div>
                        </div>


                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Remark
                                    </label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Enter Remark" name="Remark" id="V_E_Remark" required />
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
                                                <center>Save the changes </center><br>
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