<!-- Table Header Fixed -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<style>
html {
    box-sizing: border-box;
}

*,
*:before,
*:after {
    box-sizing: inherit;
}

.intro {
    max-width: 1280px;
    margin: 1em auto;
}

.table-scroll {
    position: relative;
    width: 100%;
    z-index: 1;
    margin: auto;
    overflow-x: scroll;
    overflow-y: scroll;
    height: 410px;

}

#myTable {
    font-size: 12px;
}

.table-scroll table {
    width: 100%;
    min-width: 1280px;
    margin: auto;
    border-collapse: separate;
    border-spacing: 0;
}

.table-wrap {
    position: relative;
}

.table-scroll thead th {
    background: #333;
    color: white;
    position: -webkit-sticky;
    /* Safari */
    position: sticky;
    top: 0;
}

.table-scroll thead .A {
    background: #333;
    color: white;
    position: -webkit-sticky;
    /* Safari */
    position: sticky;
    top: 33px;
}


a:focus {
    background: red;
}

/* testing links*/

th:first-child {
    position: -webkit-sticky;
    /* Safari */
    position: sticky;
    left: 0;
    z-index: 0;
    background: #f2f2f2;
}

thead .B {
    z-index: 2;
    background: #333;

}

.table>thead:first-child>tr:first-child>th {
    position: sticky;
    top: 0px;
    background-color: #333;
    height: 20px;
}
</style>
<style>
.header-top-area {
    padding-top: 86px;
}

.mCustomScrollBox {

    height: 0;

}

form {
    margin-top: 6px;
}

.form-control-inner {
    width: 40%;
    height: 30px;

}

.form-control {

    height: 30px;

}

button.btn.btn-link {

    margin-top: -51px;
}

.form-control {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 0px;
    /* width:300px; */
}

.select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 0px;
    /* width:300px; */
    height: 30px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<!-- END Table Header Fixed  -->

<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-top-area" style="background-color:white">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                        <button type="button" href="#" data-toggle="dropdown" role="button" aria-expanded="false"
                            class="btn btn-link">
                            <span class="step"><?php echo $this->session->userdata('name')[0]; ?></span><br></button>
                        <ul role="menu" class="dropdown-toggle dropdown-menu animated dropdown-menu-right zoomIn">

                            <li><a class="zoomInDown mg-t" href="#" data-toggle="modal"
                                    data-target="#zoomInDown10"><span
                                        class="edu-icon edu-settings author-log-ic"></span>Change
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
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1 style="color:#337ab7;margin-top: 94px;">Permission <span
                                    class="table-project-n">Setup</span> </h1>


                        </div>

                        <?php echo form_open('Permission/userAdd'); ?>
                        <div class="form-group-inner">
                            <div class="row" style="height: 25px;">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <label class="login2">User Name</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <select class="js-example-basic-multiple" id="uname1" name="UserName"
                                        style="width:100%" required>
                                        <option value="">--- Select User ---</option>
                                        <?php
                                        if ($user_fetch_data->num_rows() > 0) {
                                            foreach ($user_fetch_data->result() as $row) {
                                                ?>

                                        <option><?php echo $row->UserName  ?></option>
                                        <?php
                                            }
                                        } else {
                                            ?>
                                        <option></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <div class="form-group-inner">
                            <div class="row" style="height: 25px;">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                    <label class="login2">Postion</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <select class="js-example-basic-multiple" id="position" name="Position"
                                        style="width:100%" required>
                                        <option value="">--- Select Position ---</option>  
                                    </select>



                                </div>
                            </div>
                        </div>



                        <div class="login-btn-inner">

                            <div class="row" style="height: 25px;">
                                <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                                    <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Add
                                    </button>


                                </div>
                            </div>
                        </div><br>
                        <?php echo form_close(); ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">

                        </div>

                        <div class="row" style="margin-top: -35px;">
                            <div class="pull-right search">
                                <input type="search" id="myInput" class="search" placeholder="Search..."></div>

                            <div class="table-scroll">
                                <table id="main-table" class="table table-striped table-bordered" style="width:2500px">
                                    <thead>

                                        <tr>

                                            <th class="B" rowspan=2 data-field="username">Username</th>
                                            <th rowspan=2 data-field="position">Position</th>
                                            <th colspan=4 data-field="projects">Projects</th>
                                            <th colspan=5 data-field="users">Users</th>
                                            
                                            <th colspan=4 data-field="locations">Locations</th>
                                            
                                            
                                            <th rowspan=2 data-field="permissoin">Permission Setup </th>
                                            <th rowspan=2 data-field="projassign">Project Assign</th>
                                            <th rowspan=2 data-field="reset">Reset Password</th>
                                            

                                            <th colspan=4 data-field="progress">Project Progress</th>


                                        </tr>
                                        <tr>

                                            <th class="A" data-field="prnew">New</th>
                                            <th class="A" data-field="prview">View</th>
                                            <th class="A" data-field="predit">Edit</th>
                                            <th class="A" data-field="prdelete">Delete</th>

                                            <th class="A" data-field="unew">New</th>
                                            <th class="A" data-field="uview">View</th>
                                            <th class="A" data-field="uedit">Edit</th>
                                            <th class="A" data-field="udelete">Delete</th>
                                            <th class="A" data-field="ublock">Block</th>





                                            <th class="A" data-field="locnew">New</th>
                                            <th class="A" data-field="locview">View</th>
                                            <th class="A" data-field="locedit">Edit</th>
                                            <th class="A" data-field="locdelete">Delete</th>









                                            <th class="A" data-field="progressnew">New</th>
                                            <th class="A" data-field="progressview">View</th>
                                            <th class="A" data-field="progressedit">Edit</th>
                                            <th class="A" data-field="progressdelete">Delete</th>


                                        </tr>

                                    </thead>
                                    <tbody id="myTable" style="font-size:11px">

                                        <?php
                                        if ($user_permission_data->num_rows() > 0) {
                                            foreach ($user_permission_data->result() as $row) {
                                                ?>

                                        <tr>

                                            <th><?php echo $row->UserName  ?></th>
                                            <td><?php echo $row->Position  ?></td>

                                            <?php
                                                    //echo form_open('Permission/grant'); 
                                                    ?>
                                            <form method="post" action="this.form.submit();" name="form1">
                                                <input type="hidden" name="UserName"
                                                    value="<?php echo $row->UserName  ?>">

                                                <td><input type="checkbox" id="ProjectNew" name="ProjectNew[]"
                                                        onclick="function1(this,'ProjectNew','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ProjectNew ?>><i></i></td>
                                                <td><input type="checkbox" id="ProjectView" name="ProjectView[]"
                                                        onclick="function1(this,'ProjectView','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ProjectView ?>><i></i> </td>
                                                <td><input type="checkbox" name="ProjectEdit[]" id="ProjectEdit"
                                                        onclick="function1(this,'ProjectEdit','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ProjectEdit ?>><i></i> </td>
                                                <td><input type="checkbox" name="ProjectDelete[]" id="ProjectDelete"
                                                        onclick="function1(this,'ProjectDelete','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ProjectDelete ?>><i></i> </td>

                                                <td><input type="checkbox" name="UserNew[]" id="UserNew"
                                                        onclick="function1(this,'UserNew','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->UserNew ?>><i></i> </td>
                                                <td><input type="checkbox" name="UserView[]" id="UserView"
                                                        onclick="function1(this,'UserView','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->UserView ?>><i></i> </td>
                                                <td><input type="checkbox" name="UserEdit[]" id="UserEdit"
                                                        onclick="function1(this,'UserEdit','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->UserEdit ?>><i></i> </td>
                                                <td><input type="checkbox" name="UserDelete[]" id="UserDelete"
                                                        onclick="function1(this,'UserDelete','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->UserDelete ?>><i></i> </td>
                                                <td><input type="checkbox" name="UserBlock[]" id="UserBlock"
                                                        onclick="function1(this,'UserBlock','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->UserBlock ?>><i></i> </td>

                                                
                                                

                                                
                                                


                                                <td><input type="checkbox" name="LocationNew[]" id="LocationNew"
                                                        onclick="function1(this,'LocationNew','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->LocationNew ?>><i></i> </td>
                                                <td><input type="checkbox" name="LocationView[]"
                                                        onclick="function1(this,'LocationView','<?php echo $row->UserName  ?>')"
                                                        id="LocationView" value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->LocationView ?>><i></i> </td>
                                                <td><input type="checkbox" name="LocationEdit[]"
                                                        onclick="function1(this,'LocationEdit','<?php echo $row->UserName  ?>')"
                                                        id="LocationEdit" value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->LocationEdit ?>><i></i> </td>
                                                <td><input type="checkbox" name="LocationDelete[]" id="LocationDelete"
                                                        onclick="function1(this,'LocationDelete','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->LocationDelete ?>><i></i> </td>

                                                
                                                




                                               
                                               

                                                <td><input type="checkbox" name="PermissionSetup[]" id="PermissionSetup"
                                                        onclick="function1(this,'PermissionSetup','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->PermissionSetup ?>><i></i> </td>


                                                <td><input type="checkbox" name="ProjectAssign[]"
                                                        onclick="function1(this,'ProjectAssign','<?php echo $row->UserName  ?>')"
                                                        id="ProjectAssign" value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ProjectAssign ?>><i></i> </td>

                                                <td><input type="checkbox" name="ResetPassword[]"
                                                        onclick="function1(this,'ResetPassword','<?php echo $row->UserName  ?>')"
                                                        id="ResetPassword" value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ResetPassword ?>><i></i> </td>

                                            
                                            

                                                <td><input type="checkbox" name="ProgressNew[]" id="ProgressNew"
                                                        onclick="function1(this,'ProgressNew','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ProgressNew ?>><i></i> </td>
                                                <td><input type="checkbox" name="ProgressView[]" id="ProgressView"
                                                        onclick="function1(this,'ProgressView','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ProgressView ?>><i></i> </td>
                                                <td><input type="checkbox" name="ProgressEdit[]" id="ProgressEdit"
                                                        onclick="function1(this,'ProgressEdit','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ProgressEdit ?>><i></i> </td>
                                                <td><input type="checkbox" name="ProgressDelete[]" id="ProgressDelete"
                                                        onclick="function1(this,'ProgressDelete','<?php echo $row->UserName  ?>')"
                                                        value="<?php echo $row->UserName  ?>"
                                                        <?php echo  $row->ProgressDelete ?>><i></i> </td>







                                                <?php
                                                        //echo form_close(); 
                                                        ?>

                                            </form>
                                        </tr>

                                        <?php
                                            }
                                        } else {
                                            ?>
                                        <tr>
                                            <td colspan="3"> No Data Found </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>







                                        <!-- //php if(isset()){  -->






                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <!-- <div id="demo"></div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function function1(check, $project, $name) {
    //var data = $("[id='ProjectNew']");
    if ($(check).is(':checked')) {
        $(check).siblings('#ProjectNew:first').find('.child').prop("checked", true);
        var project = $project;
        var name = $name;
        var status = 'checked';

        // alert(data);
        $.ajax({
            url: "grant1",
            type: "POST",
            async: true,
            cache: false,
            data: {
                project: project,
                name: name,
                status: status

            },
            success: function(data) {
                $("#demo").text(data);
                // alert(data)
            }
        });


    } else {
        $(check).siblings('#ProjectNew:first').find('.child').prop("checked", false);

        var project = $project;
        var name = $name;
        var status = 'unchecked';

        // alert(data);
        $.ajax({
            url: "grant1",
            type: "POST",
            async: true,
            cache: false,
            data: {
                project: project,
                name: name,
                status: status

            },
            success: function(data) {
                $("#demo").text(data);
                // alert(data)
            }
        });
    }
}

$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
</script>

<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>