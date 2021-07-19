<div class="product-tab-list tab-pane fade active in" id="Edit1">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div class="row">

                    <form method="post" action="../User/updatedata" class="userEdit">
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Username

                                    </label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" name="UserName" id="E_E_UserName"
                                        readonly />
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Name
                                    </label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Enter Name" name="Name"
                                        id="E_E_Name" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Category
                                    </label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">

                                    <select class="form-control" style="color:#337ab7; border:1px solid #ddd;"
                                        onchange="document.getElementById('E_E_Position').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                                        <option value="-1"></option>
                                        <option>Director
                                        </option>
                                        <option>GM
                                        </option>
                                        <option>CFO
                                        </option>
                                        <option>DGM
                                        </option>
                                        <option>Head Office Manager
                                        </option>
                                        <option>System Admin
                                        </option>
                                        <option>Head Office User
                                        </option>
                                        <option>Project Manager
                                        </option>
                                        <option>Site QS
                                        </option>
                                        <option>Site ASK
                                        </option>
                                        <option>Other
                                        </option>

                                    </select>
                                    <input class="form-control" name="Position" id="E_E_Position"
                                        style="position:absolute;top:0px;width:240px;width:180px\9;#width:180px; border:1px solid #ddd;border-right:0;"
                                        onfocus="this.select()" type="text" readonly>

                                </div>

                            </div>
                        </div>
                        <?php

                        if ($this->session->userdata('UserBlock') == "checked") {
                            ?>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Status
                                    </label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <select class="form-control" style="color:#337ab7; border:1px solid #ddd;"
                                        onchange="document.getElementById('E_E_Status').value=this.options[this.selectedIndex].text; document.getElementById('idValue').value=this.options[this.selectedIndex].value;">
                                        <option value="-1"></option>
                                        <option>ACTIVE
                                        </option>
                                        <option>BLOCK
                                        </option>


                                    </select>
                                    <input class="form-control" name="Status" id="E_E_Status"
                                        style="position:absolute;top:0px;width:240px;width:180px\9;#width:180px; border:1px solid #ddd;border-right:0;"
                                        onfocus="this.select()" type="text" readonly>


                                </div>

                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <input type="hidden" name="Status" id="E_E_Status">
                        <?php
                    }
                    ?>
                        <div class="form-group-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <label class="login2">Contact Number
                                    </label>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Enter Contact Number"
                                        name="ContactNumber" id="E_E_ContactNumber" required />
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
                                                <center>Save the changes
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
                    <a data-dismiss="modal" href="#">
                        <button class="btn btn-sm btn-primary login-submit-cs" type="button">Cancel
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>