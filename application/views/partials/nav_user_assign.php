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
    overflow: scroll;
    height: 400px;

}

.table {
    font-size: 12px;

}

.table-scroll table {
    width: 100%;
    min-width: 1280px;
    margin: auto;
    border-collapse: separate;
    border-spacing: 0;
    padding: 0;
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
    top: 0;
    background-color: #00020e;
    height: 60px;
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
<!-- END Table Header Fixed  -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

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
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1 style="color:#337ab7;margin-top: 94px;">Users <span
                                    class="table-project-n">Assign</span> </h1>
                        </div>

                        <?php echo form_open('Assign/userAdd'); ?>
                        <div class="form-group-inner">
                            <div class="row" style="height: 25px;">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="login2">Name</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <select class="js-example-basic-multiple" id="name1" name="name" style="width:100%"
                                        required>
                                        <option value="">--- Select Name ---</option>
                                        <?php
                                        if ($user_fetch_data->num_rows() > 0) {
                                            foreach ($user_fetch_data->result() as $row) {
                                                ?>

                                        <option><?php echo $row->Name  ?></option>
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
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <label class="login2">User Name</label>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <select class="js-example-basic-multiple" id="uname" name="username"
                                        style="width:100%" required>
                                        <option value="">--- Select User Name ---</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="login-btn-inner">

                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="login-horizental">
                                        <button class="btn btn-sm btn-primary login-submit-cs" type="submit">Add
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                        <br>
                        <div class="row">
                            <div class="pull-right search">
                                <input type="search" id="myInput" class="search" placeholder="Search..."></div>

                            <div id="table-scroll" class="table-scroll">
                                <table id="main-table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="B" style="height:50px;  text-align: center "> Name </th>
                                            <th style="  text-align: center "> Username </th>
                                            <?php
                                            if ($project_assign_data->num_rows() > 0) {
                                                foreach ($project_assign_data->result() as $row) {
                                                    ?>

                                            <th style="border-right: 1px solid #ccc;  text-align: center ">
                                                <?php echo $row->ProjectCode ?> </th>

                                            <?php

                                                }
                                            }
                                            ?>


                                        </tr>

                                    </thead>
                                    <tbody id="myTable">
                                        <?php
                                        if ($user_assign_data->num_rows() > 0) {
                                            foreach ($user_assign_data->result() as $row1) {
                                                ?>

                                        <tr>
                                            <th><?php echo $row1->Name  ?></th>
                                            <td><?php echo $row1->UserName  ?></td>

                                            <?php
                                                    // echo form_open('Assign/userAssign'); 
                                                    ?>
                                            <form method="post" action="this.form.submit();" name="form1">

                                                <?php
                                                        if ($project_assign_data->num_rows() > 0) {
                                                            foreach ($project_assign_data->result() as $row) {
                                                                ?>
                                                <td><input type="checkbox" name="ProjectName[]"
                                                        onclick="function1(this,'<?php echo $row->ProjectName ?>','<?php echo $row1->UserName  ?>','<?php echo $row->ProjectCode  ?>')"
                                                        value="<?php echo $row->ProjectName ?>:<?php echo $row1->UserName  ?>"
                                                        <?php
                                                                                                                                                                                                                                                                                                                        if ($userproject_fetch_data->num_rows() > 0) {
                                                                                                                                                                                                                                                                                                                            foreach ($userproject_fetch_data->result() as $row2) {

                                                                                                                                                                                                                                                                                                                                if ($row2->UserName == $row1->UserName && $row2->ProjectName == $row->ProjectName) {

                                                                                                                                                                                                                                                                                                                                    ?>
                                                        <?php echo $row2->status  ?>
                                                        <?php

                                                                                                                                                                                                                                                                                                                                                                                            }
                                                                                                                                                                                                                                                                                                                                                                                        }
                                                                                                                                                                                                                                                                                                                                                                                    }
                                                                                                                                                                                                                                                                                                                                                                                    ?>><i></i>
                                                </td>


                                                <?php

                                                            }
                                                        }
                                                        ?>

                                                <?php
                                                        // echo form_close(); 
                                                        ?>
                                            </form>
                                        </tr>


                                        <?php

                                            }
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
function function1() {
    var data = $("[name='form1']").serialize();
    alert(data)
    $.ajax({
        url: "userAssign",
        type: "POST",
        async: true,
        cache: false,
        data: data,
        success: function(data) {
            $("#demo").text(data);
            //  alert(data)
        }
    });
}

function function1(check, $project, $name, $ProjectCode) {
    //var data = $("[id='ProjectNew']");
    if ($(check).is(':checked')) {
        $(check).siblings('#ProjectNew:first').find('.child').prop("checked", true);
        var project = $project;
        var name = $name;
        var status = 'checked';
        var ProjectCode = $ProjectCode

        // alert(data);
        $.ajax({
            url: "userAssign",
            type: "POST",
            async: true,
            cache: false,
            data: {
                project: project,
                name: name,
                status: status,
                ProjectCode: ProjectCode

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
            url: "userAssign",
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