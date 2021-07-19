<div class="footer-copyright-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="footer-copy-right">
                    <div class="col-lg-5 col-md-6 col-sm-6 col-xs-6">
                        <p>NEM Constructions (Pvt) Ltd&nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo $this->session->userdata('name'); ?> &nbsp;&nbsp;&nbsp;&nbsp;
                            <?php echo date("m/d/y"); ?></p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                        <p>Powered
                            by NEM-ERP Engineering & Research Unit</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>



<!-- jquery
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/vendor/jquery-1.12.4.min.js">
</script>
<!-- bootstrap JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/bootstrap.min.js"></script>
<!-- wow JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/wow.min.js"></script>
<!-- price-slider JS
		============================================ -->

<!-- meanmenu JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
		============================================ -->

<!-- sticky JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/jquery.sticky.js"></script>
<!-- scrollUp JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
		============================================ -->
<script type="text/javascript"
    src="<?php echo base_url(); ?>assets/new/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/scrollbar/mCustomScrollbar-active.js">
</script>
<!-- metisMenu JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/metisMenu/metisMenu.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/metisMenu/metisMenu-active.js">
</script>
<!-- data table JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/data-table/bootstrap-table.js">
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/data-table/data-table-active.js">
</script>


<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/data-table/bootstrap-table-resizable.js">
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/data-table/colResizable-1.5.source.js">
</script>

<!--  editable JS
		============================================ -->







<!-- Chart JS
		============================================ -->

<!-- tab JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/tab.js"></script>
<!-- plugins JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/plugins.js"></script>
<!-- main JS
		============================================ -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/new/js/main.js"></script>


<!--  Excel JS
		============================================ -->
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.4/js/buttons.flash.min.js"></script>




<!-- form validate JS
		============================================ -->
<script src="<?php echo base_url(); ?>assets/new/js/form-validation/jquery.form.min.js"></script>
<script src="<?php echo base_url(); ?>assets/new/js/form-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/new/js/form-validation/form-active.js"></script>



<!-- Excel Sheet Generator -->

<script type="text/javascript">
function exportExcel(topic) {


    //getting values of current time for generating the file name
    var dt = new Date();
    var day = dt.getDate();
    var month = dt.getMonth() + 1;
    var year = dt.getFullYear();
    var tableName = topic;

    var postfix = day + "." + month + "." + year;
    //creating a temporary HTML link element (they support setting file names)
    var a = document.createElement('a');
    //getting data from our div that contains the HTML table
    var data_type = 'data:application/vnd.ms-excel;charset=utf-8';

    var table_html = $('#table')[0].outerHTML;
    //    table_html = table_html.replace(/ /g, '%20');
    table_html = table_html.replace(/<tfoot[\s\S.]*tfoot>/gmi, '');

    var css_html =
        '<style>td {border: 0.5pt solid #c0c0c0} .tRight { text-align:right} .tLeft { text-align:left} </style>';
    //    css_html = css_html.replace(/ /g, '%20');

    // a.href = data_type + ',' + encodeURIComponent('<html><head>' + css_html + '</' + 'head><body>' + table_html +
    //     '</body></html>');

var xData = new Blob(['<html><head>' + css_html + '</' + 'head><body>' + table_html +'</body></html>'], { type: 'text/csv' });
var xUrl = URL.createObjectURL(xData);
a.href = xUrl;

    //setting the file name
    a.download = tableName + '  ' + postfix + '.xls';
    //triggering the function
    document.body.appendChild(a);
    a.click();
    //just in case, prevent default behaviour
    e.preventDefault();
}
</script>

<!-- End Excel Sheet Generator -->



<!-- Username validation -->
<!-- <script type="text/javascript">
$(document).ready(function() {
    $('#username1').change(function() {
        var username1 = $('#username1').val();
        if (username1 != '') {
            $.ajax({
                url: "checkUsername",
                method: "POST",
                data: {
                    username1: username1
                },
                success: function(data) {
                    $('#username_result').html(data);
                }
            });
        }
    });
});
</script> -->


<!-- td.AAA { margin-bottom: 50px;} -->



<!-- QR Code save as Doc -->
<script>
function Export2Doc(element, filename = '') {

    var css_html =
        '<style>table .Qrno {margin-bottom: 150px;} table .Qrimg {margin-top: 150px;}  </style>';

    var preHtml =
        "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head>"+css_html+"<meta charset='utf-8'><title>Export HTML To Doc</title></head><body><div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'>";
    var postHtml = "</div></body></html>";
    var html = preHtml + document.getElementById(element).innerHTML + postHtml;

    var blob = new Blob(['\ufeff', html], {
        type: 'application/msword'
    });

    // Specify link url
    var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);

    // Specify file name
    filename = filename ? filename + '.doc' : 'document.doc';

    // Create download link element
    var downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = url;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
    }

    document.body.removeChild(downloadLink);
}
</script>
<!--END QR Code save as Doc -->

<!-- Password length validation -->
<script>
var minLength = 5;
$(document).ready(function() {
    $('#password1').on('keydown keyup change', function() {
        var char = $(this).val();
        var charLength = $(this).val().length;
        if (charLength < minLength) {
            $('#pwd').css('color', 'red');
            $('#pwd').text('Length is short, minimum ' + minLength + ' required.');
        } else {
            $('#pwd').css('color', 'green');
            $('#pwd').text('Length is valid');
        }
    });
});
</Script>



<!-- Username length validation -->
<script>
var minLength = 5;
$(document).ready(function() {
    $('#username1').on('keydown keyup change', function() {
        var char = $(this).val();
        var charLength = $(this).val().length;
        if (charLength < minLength) {
            $('#uname').css('color', 'red');
            $('#uname').text('Length is short, minimum ' + minLength + ' required.');
        } else {
            $('#uname').css('color', 'green');
            $('#uname').text('Length is valid');
        }
    });
});
</Script>

<!-- Contact number length validation -->





<!-- Username validation -->

<script>
var minLength = 5;
$(document).ready(function() {
    $('#password1').on('keydown keyup change', function() {
        var char = $(this).val();
        var charLength = $(this).val().length;
        if (charLength < minLength) {
            $('#submit').attr('disabled', true);
            $('#pwd').css('color', 'red');
            $('#pwd').text('Length is short, minimum ' + minLength + ' required.');
        } else {
            $('#submit').removeAttr('disabled');
            $('#pwd').css('color', 'green');
            $('#pwd').text('Length is valid');
        }
    });
});
</Script>


<!-- Username length validation -->
<script>
var minLength = 5;
$(document).ready(function() {
    $('#username1').on('keydown keyup change', function() {
        var char = $(this).val();
        var charLength = $(this).val().length;
        if (charLength < minLength) {
            $('#submit').attr('disabled', true);
            $('#uname').css('color', 'red');
            $('#uname').text('Length is short, minimum ' + minLength + ' required.');
        } else {
            $('#submit').removeAttr('disabled');
            $('#uname').css('color', 'green');
            $('#uname').text('Length is valid');
        }
    });
});

var $input = $('input:text'),
    $register = $('#submit');


$register.attr('disabled', true);
$input.keyup(function() {
    var trigger = false;
    $input.each(function() {
        if (!$(this).val()) {
            trigger = true;
        }
    });
    trigger ? $register.attr('disabled', true) : $register.removeAttr('disabled');
});
</script>
<!-- End Submit button disable function-->
<script>

</script>

<!-- Auto filling permission -->
<script>
$(document).ready(function() {
    $('#uname1').change(function() {
        var uname1 = $('#uname1').val();
        if (uname1 != '') {
            $.ajax({
                url: "autofill",
                method: "POST",
                data: {
                    uname1: uname1
                },
                success: function(data) {
                    $('#position').html(data);

                }
            })
        }
    })
});
</script>





<!-- <script>
$(document).ready(function() {
    $('#projectcode').change(function() {
        var projectcode = $('#projectcode').val();
        if (projectcode != '') {
            $.ajax({
                url: "autofillProject",
                method: "POST",
                data: {
                    projectcode: projectcode
                },
                success: function(data) {
                    $('#projectcode').html(data);

                }
            })
        }
    })
});
</script>

<script>
$(document).ready(function() {
    $('#locationcode').change(function() {
        var locationcode = $('#locationcode').val();
        if (locationcode != '') {
            $.ajax({
                url: "autofillLocation",
                method: "POST",
                data: {
                    locationcode: locationcode
                },
                success: function(data) {
                    $('#locationcode').html(data);

                }
            })
        }
    })
});
</script> -->







<script>
$(document).ready(function() {
    $('#projectcode').change(function() {
        var projectcode = $('#projectcode').val();
        if (projectcode != '') {
            $.ajax({
                url: "autofillProjectcode",
                method: "POST",
                data: {
                    projectcode: projectcode
                },
                success: function(data) {
                    $('#projectname').html(data);

                }
            })
        }
    })
});
</script>

<!--END Auto filling permission -->

<!-- Auto filling assign -->
<script>
$(document).ready(function() {
    $('#name1').change(function() {
        var name1 = $('#name1').val();
        if (name1 != '') {
            $.ajax({
                url: "autofillAssign",
                method: "POST",
                data: {
                    name1: name1
                },
                success: function(data) {
                    $('#uname').html(data);

                }
            })
        }
    })
});
</script>
<!--END Auto filling assign -->

<!-- Auto filling QR -->
<script>
$(document).ready(function() {
    $('#VehicleNo').change(function() {
        var VehicleNo = $('#VehicleNo').val();
        if (VehicleNo != '') {
            $.ajax({
                url: "autofillDescription",
                method: "POST",
                data: {
                    VehicleNo: VehicleNo
                },
                success: function(data) {
                    $('#Description').html(data);

                }
            })
        }
    })
});

$(document).ready(function() {
    $('#VehicleNo').change(function() {
        var VehicleNo = $('#VehicleNo').val();
        if (VehicleNo != '') {
            $.ajax({
                url: "autofillUOM",
                method: "POST",
                data: {
                    VehicleNo: VehicleNo
                },
                success: function(data) {
                    $('#UOM').html(data);

                }
            })
        }
    })
});

$(document).ready(function() {
    $('#VehicleNo').change(function() {
        var VehicleNo = $('#VehicleNo').val();
        if (VehicleNo != '') {
            $.ajax({
                url: "autofillType",
                method: "POST",
                data: {
                    VehicleNo: VehicleNo
                },
                success: function(data) {
                    $('#Type').html(data);

                }
            })
        }
    })
});

$(document).ready(function() {
    $('#VehicleNo').change(function() {
        var VehicleNo = $('#VehicleNo').val();
        if (VehicleNo != '') {
            $.ajax({
                url: "autofillCapacity",
                method: "POST",
                data: {
                    VehicleNo: VehicleNo
                },
                success: function(data) {
                    $('#Capacity').html(data);

                }
            })
        }
    })
});


// auto fill verification data

$(document).ready(function() {
    $('#ProjectCode').change(function() {
        var ProjectCode = $('#ProjectCode').val();
        if (ProjectCode != '') {
            $.ajax({
                url: "autofill_v_location",
                method: "POST",
                data: {
                    ProjectCode: ProjectCode
                },
                success: function(data) {
                    $('#Location').html(data);

                }
            })
        }
    })
});




$(document).ready(function() {
    $('#VehicleNo').change(function() {
        var VehicleNo = $('#VehicleNo').val();
        if (VehicleNo != '') {
            $.ajax({
                url: "autofill_v_capacity",
                method: "POST",
                data: {
                    VehicleNo: VehicleNo
                },
                success: function(data) {
                    $('#Capacity').html(data);

                }
            })
        }
    })
});
$(document).ready(function() {
    $('#VehicleNo').change(function() {
        var VehicleNo = $('#VehicleNo').val();
        if (VehicleNo != '') {
            $.ajax({
                url: "autofill_v_type",
                method: "POST",
                data: {
                    VehicleNo: VehicleNo
                },
                success: function(data) {
                    $('#Type').html(data);

                }
            })
        }
    })
});


$(document).ready(function() {
    $('#VehicleNo').change(function() {
        var VehicleNo = $('#VehicleNo').val();
        if (VehicleNo != '') {
            $.ajax({
                url: "autofill_v_UOM",
                method: "POST",
                data: {
                    VehicleNo: VehicleNo
                },
                success: function(data) {
                    $('#UOM').html(data);

                }
            })
        }
    })
});
</script>

<script>
function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("testTable");
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc";
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
            //start by saying there should be no switching:
            shouldSwitch = false;
            /*Get the two elements you want to compare,
            one from current row and one from the next:*/
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            /*check if the two rows should switch place,
            based on the direction, asc or desc:*/
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    //if so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            /*If a switch has been marked, make the switch
            and mark that a switch has been done:*/
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            //Each time a switch is done, increase this count by 1:
            switchcount++;
        } else {
            /*If no switching has been done AND the direction is "asc",
            set the direction to "desc" and run the while loop again.*/
            if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }
}
</script>

<!-- QR Print -->
<script>
$(function() {
    var buttons = $('#printButton');
    var printStyle = $('#print');
    var color, style;

    buttons.click(function() {
        color = $(this).attr('class');
        style = 'p { color: ' + color + '};';
        printStyle.text(style);
        window.print();
    });
});
</script>
<!-- END QR Print -->
<!-- form validation -->
<script>
(function($) {
    "use strict";


    jQuery.validator.addMethod("noSpace", function(value, element) {
        return value.indexOf(" ") < 0 && value != "";
    }, '<span style="color: red ">Please Space are not allowed</span>');
    jQuery.validator.addMethod("select", function(value, element) {
        return value != "-1";
    }, '<span style="color: red ">Please select the field</span>');


    // supplier validation
    $(".supplierAdd").validate({

        rules: {
            suppliername: {
                required: true,

                remote: {
                    url: "register_suppliername_exists",
                    type: "post",
                    data: {
                        suppliername: function() {
                            return $("#suppliername1").val();
                        }
                    }
                }
            },
            suppliercode: {
                required: true,
                noSpace: true,
                remote: {
                    url: "register_suppliercode_exists",
                    type: "post",
                    data: {
                        suppliercode: function() {
                            return $("#suppliercode1").val();
                        }
                    }
                }
            },
            contactno: {
                required: false,
                number: true,
                minlength: 10,
                maxlength: 10

            },
            address: {
                required: false
            }





        },

        messages: {
            suppliername: {
                required: '<span style="color:red">Please enter supplier name</span>',
                remote: '<span style="color:red">Supplier name already exits</span>'
            },
            suppliercode: {
                required: '<span style="color:red" >Please enter supplier code</span>',
                remote: '<span style="color:red">Supplier Code already exits</span>'
            },
            contactno: {
                required: '<span style="color:red">Please enter contact number</span>',
                number: '<span style="color:red">Please enter a valid number</span>',
                minlength: '<span style="color:red">Your number must be contained with 10 numbers</span>',
                maxlength: '<span style="color:red">Exceeded 10 numbers</b></span>'
            },
            address: {
                required: '<span style="color:red">Please enter address</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".supplier_Edit").validate({

        rules: {

            SupplierCode: {
                required: true,
                noSpace: true,

            },
            ContactNo: {
                required: false,
                number: true,
                minlength: 10,
                maxlength: 10

            },
            Address: {
                required: false
            }





        },

        messages: {

            SupplierCode: {
                required: '<span style="color:red" >Please enter supplier code</span>',

            },
            ContactNo: {
                required: '<span style="color:red">Please enter contact number</span>',
                number: '<span style="color:red">Please enter a valid number</span>',
                minlength: '<span style="color:red">Your number must be contained with 10 numbers</span>',
                maxlength: '<span style="color:red">Exceeded 10 numbers</b></span>'
            },
            Address: {
                required: '<span style="color:red">Please enter address</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".supplierD_Edit").validate({

        rules: {

            SupplierCode: {
                required: true,
                noSpace: true,

            },
            ContactNo: {
                required: false,
                number: true,
                minlength: 10,
                maxlength: 10

            },
            Address: {
                required: false
            }





        },

        messages: {

            SupplierCode: {
                required: '<span style="color:red" >Please enter supplier code</span>',

            },
            ContactNo: {
                required: '<span style="color:red">Please enter contact number</span>',
                number: '<span style="color:red">Please enter a valid number</span>',
                minlength: '<span style="color:red">Your number must be contained with 10 numbers</span>',
                maxlength: '<span style="color:red">Exceeded 10 numbers</b></span>'
            },
            Address: {
                required: '<span style="color:red">Please enter address</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".supplierE_Edit").validate({

        rules: {

            SupplierCode: {
                required: true,
                noSpace: true,

            },
            ContactNo: {
                required: false,
                number: true,
                minlength: 10,
                maxlength: 10

            },
            Address: {
                required: false
            }

        },

        messages: {

            SupplierCode: {
                required: '<span style="color:red" >Please enter supplier code</span>',

            },
            ContactNo: {
                required: '<span style="color:red">Please enter contact number</span>',
                number: '<span style="color:red">Please enter a valid number</span>',
                minlength: '<span style="color:red">Your number must be contained with 10 numbers</span>',
                maxlength: '<span style="color:red">Exceeded 10 numbers</b></span>'
            },
            Address: {
                required: '<span style="color:red">Please enter address</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    // end supplier validation







    // progress validation
    $(".progressAdd").validate({

        rules: {
            // ppdcode: {
            //     required: true,
            //     noSpace: true,

            //     remote: {
            //         url: "register_ppdcode_exists",
            //         type: "post",
            //         data: {
            //             ppdcode: function() {
            //                 return $("#ppdcode1").val();
            //             }
            //         }
            //     }
            // },
            ppdcode: {
                required: false,
            },
            projectcode: {
                select: true,
            },
            locationcode: {
                select: true,
            },
            status: {
                required: true,
            },
            photoitem: {
                required: true,
            },
            image: {
                required: true,
            },
            imgdate: {
                required: true,
            }


        },

        messages: {
            ppdcode: {
                required: '<span style="color:red">Please enter PPD Code</span>',
                remote: '<span style="color:red">PPD Code already exits</span>'
            },
            
            status: {
                required: '<span style="color:red" >Please enter Status</span>',
                remote: '<span style="color:red">Please enter a valid status</span>'
            },
            photoitem: {
                required: '<span style="color:red" >Please select Photo Item</span>',
                remote: '<span style="color:red">Please select a valid Photo Item</span>'
            },
            image: {
                required: '<span style="color:red" >Please upload an Image</span>',
                remote: '<span style="color:red">Please upload an Image</span>'
            },
            imgdate: {
                required: '<span style="color:red" >Please enter Image Date</span>',
                remote: '<span style="color:red">Please enter a valid Image Date</span>'
            }


        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".progress_Edit").validate({

        rules: {

            PpdCode: {
                required: true,
                noSpace: true,

            },
            ProjectCode: {
                select: true,
                required: true

            },
            LocationCode: {
                select: true,
                required: true

            },
            Status: {
                required: true,
            },
            PhotoItem: {
                required: true,
            },
            Image: {
                required: true,
            },
            ImgDate: {
                required: true,

            }






        },

        messages: {

            PpdCode: {
                required: '<span style="color:red" >Please enter PPD Code</span>',

            },
            ProjectCode: {
                required: '<span style="color:red" >Please select Project Code</span>',

            },
            LocationCode: {
                required: '<span style="color:red">Please select Location Code</span>',
            },
            Status: {
                required: '<span style="color:red">Please enter Status</span>'
            },
            PhotoItem: {
                required: '<span style="color:red">Please select Photo Item</span>'
            },
            Image: {
                required: '<span style="color:red">Please upload an Image</span>'
            },
            ImgDate: {
                required: '<span style="color:red">Please enter Image Date</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".progressD_Edit").validate({

        rules: {

            PpdCode: {
                required: true,
                noSpace: true,

            },
            ProjectCode: {
                select: true,
                required: true

            },
            LocationCode: {
                select: true,
                required: true

            },
            Status: {
                required: true,
            },
            PhotoItem: {
                required: true,
            },
            Image: {
                required: true,
            },
            ImgDate: {
                required: true,

            }





        },

        messages: {

            PpdCode: {
                required: '<span style="color:red" >Please enter PPD Code</span>',

            },
            ProjectCode: {
                required: '<span style="color:red" >Please select Project Code</span>',

            },
            LocationCode: {
                required: '<span style="color:red">Please select Location Code</span>',
            },
            Status: {
                required: '<span style="color:red">Please enter Status</span>'
            },
            PhotoItem: {
                required: '<span style="color:red">Please select Photo Item</span>'
            },
            Image: {
                required: '<span style="color:red">Please upload an Image</span>'
            },
            ImgDate: {
                required: '<span style="color:red">Please enter Image Date</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".progressE_Edit").validate({

        rules: {

            PpdCode: {
                required: true,
                noSpace: true,

            },
            ProjectCode: {
                select: true,
                required: true

            },
            LocationCode: {
                select: true,
                required: true

            },
            Status: {
                required: true,
            },
            PhotoItem: {
                required: true,
            },
            Image: {
                required: true,
            },
            ImgDate: {
                required: true,

            }

        },

        messages: {

            PpdCode: {
                required: '<span style="color:red" >Please enter PPD Code</span>',

            },
            ProjectCode: {
                required: '<span style="color:red" >Please select Project Code</span>',

            },
            LocationCode: {
                required: '<span style="color:red">Please select Location Code</span>',
            },
            Status: {
                required: '<span style="color:red">Please enter Status</span>'
            },
            PhotoItem: {
                required: '<span style="color:red">Please select Photo Item</span>'
            },
            Image: {
                required: '<span style="color:red">Please upload an Image</span>'
            },
            ImgDate: {
                required: '<span style="color:red">Please enter Image Date</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    // end progress validation







    // start location validation

    $(".locationAdd").validate({

        rules: {
            locationname: {
                required: true
            },
            locationcode: {
                required: true,
                noSpace: true,
                remote: {
                    url: "register_location_exists",
                    type: "post",
                    data: {
                        locationcode: function() {
                            return $("#locationid1").val();
                        }
                    }
                }
            },
            projectname: {
                select: true,
            },
            projectcode: {
                select: true,
            },
        },

        messages: {
            locationname: {
                required: '<span style="color:red">Please enter location name</span>'
            },
            locationcode: {
                required: '<span style="color:red">Please enter location code</span>',
                remote: '<span style="color:red">Location code already exits</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".location_Edit").validate({

        rules: {
            Location: {
                required: true
            },
            ProjectName: {
                required: true
            },
            ProjectCode: {
                select: true,
                required: true
            }

        },

        messages: {
            Location: {
                required: '<span style="color:red">Please enter location name</span>'
            },
            ProjectName: {
                required: '<span style="color:red">Please select Project Name</span>'
            },
            ProjectCode: {
                required: '<span style="color:red">Please select Project Code</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".locationE_Edit").validate({

        rules: {
            Location: {
                required: true
            },
            ProjectName: {
                required: true
            },
            ProjectCode: {
                select: true,
                required: true
            }

        },

        messages: {
            Location: {
                required: '<span style="color:red">Please enter location name</span>'
            },
            ProjectName: {
                required: '<span style="color:red">Please select Project Name</span>'
            },
            ProjectCode: {
                required: '<span style="color:red">Please select Project Code</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".locationD_Edit").validate({

        rules: {
            Location: {
                required: true
            },
            ProjectName: {
                required: true
            },
            ProjectCode: {
                select: true,
                required: true
            }

        },

        messages: {
            Location: {
                required: '<span style="color:red">Please enter location name</span>'
            },
            ProjectName: {
                required: '<span style="color:red">Please select Project Name</span>'
            },
            ProjectCode: {
                required: '<span style="color:red">Please select Project Code</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    // end location validation

    $(".QRConfigureV_Edit").validate({

        rules: {

            QrBlock: {
                required: true

            },
            SupplierName: {

                required: true
            },

        },

        messages: {
            QrBlock: {
                required: '<span style="color:red">Please select the Status</span>'
            },
            SupplierName: {
                required: '<span style="color:red">Please select Supplier Name</span>'
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });
    $(".QRConfigureE_Edit").validate({

        rules: {

            QrBlock: {
                required: true

            },
            SupplierName: {

                required: true
            },

        },

        messages: {
            QrBlock: {
                required: '<span style="color:red">Please select the Status</span>'
            },
            SupplierName: {
                required: '<span style="color:red">Please select Supplier Name</span>'
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });
    $(".QRConfigureD_Edit").validate({

        rules: {

            QrBlock: {
                required: true

            },
            SupplierName: {

                required: true
            },

        },

        messages: {
            QrBlock: {
                required: '<span style="color:red">Please select the Status</span>'
            },
            SupplierName: {
                required: '<span style="color:red">Please select Supplier Name</span>'
            }
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });




    // user master validation

    $(".userAdd").validate({

        rules: {
            name: {
                required: true
            },
            username: {
                required: true,
                minlength: 5,
                noSpace: true,


                remote: {
                    url: "register_username_exists",
                    type: "post",
                    data: {
                        username: function() {
                            return $("#username1").val();
                        }
                    }
                }


            },
            password: {
                required: true,
                minlength: 5
            },
            contact: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },


        },

        messages: {
            name: {
                required: '<span style="color:red">Please enter name</span>'
            },
            username: {
                required: '<span style="color:red">Please enter user name</span>',
                minlength: '<span style="color:red">User name must has at least 5 characters</span>',
                remote: '<span style="color:red">User name already exits</span>'

            },
            password: {
                required: '<span style="color:red">Please enter password</span>',
                minlength: '<span style="color:red">Password must has at least 5 characters</span>'
            },
            contact: {
                required: '<span style="color:red">Please enter contact number</span>',
                number: '<span style="color:red">Please enter a valid number</span>',
                minlength: '<span style="color:red">Your number must be contained with 10 numbers</span>',
                maxlength: '<span style="color:red">Exceeded 10 numbers</b></span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".userV_Edit").validate({

        rules: {
            Name: {
                required: true
            },


            ContactNumber: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            Position: {
                required: true,
            },
            Status: {
                required: true,
            }


        },

        messages: {
            Name: {
                required: '<span style="color:red">Please enter name</span>'
            },

            ContactNumber: {
                required: '<span style="color:red">Please enter contact number</span>',
                number: '<span style="color:red">Please enter a valid number</span>',
                minlength: '<span style="color:red">Your number must be contained with 10 numbers</span>',
                maxlength: '<span style="color:red">Exceeded 10 numbers</b></span>'
            },
            Position: {
                required: '<span style="color:red">Please select the Position</span>',
            },
            Status: {
                required: '<span style="color:red">Please select the Status</span>',
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });
    $(".userEdit").validate({

        rules: {
            Name: {
                required: true
            },


            ContactNumber: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            Position: {
                required: true,
            },
            Status: {
                required: true,
            }


        },

        messages: {
            Name: {
                required: '<span style="color:red">Please enter name</span>'
            },

            ContactNumber: {
                required: '<span style="color:red">Please enter contact number</span>',
                number: '<span style="color:red">Please enter a valid number</span>',
                minlength: '<span style="color:red">Your number must be contained with 10 numbers</span>',
                maxlength: '<span style="color:red">Exceeded 10 numbers</b></span>'
            },
            Position: {
                required: '<span style="color:red">Please select the Position</span>',
            },
            Status: {
                required: '<span style="color:red">Please select the Status</span>',
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".userD_Edit").validate({

        rules: {
            Name: {
                required: true
            },


            ContactNumber: {
                required: true,
                number: true,
                minlength: 10,
                maxlength: 10
            },
            Position: {
                required: true,
            },
            Status: {
                required: true,
            }


        },

        messages: {
            Name: {
                required: '<span style="color:red">Please enter name</span>'
            },

            ContactNumber: {
                required: '<span style="color:red">Please enter contact number</span>',
                number: '<span style="color:red">Please enter a valid number</span>',
                minlength: '<span style="color:red">Your number must be contained with 10 numbers</span>',
                maxlength: '<span style="color:red">Exceeded 10 numbers</b></span>'
            },
            Position: {
                required: '<span style="color:red">Please select the Position</span>',
            },
            Status: {
                required: '<span style="color:red">Please select the Status</span>',
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    // end user validation

    // start project validation

    $(".projectAdd").validate({

        rules: {
            projectname: {
                required: true,
                // noSpace: true,
                remote: {
                    url: "register_projectname_exists",
                    type: "post",
                    data: {
                        projectname: function() {
                            return $("#projectname1").val();
                        }
                    }
                }
            },
            projectcode: {
                required: true,
                noSpace: true,
                remote: {
                    url: "register_projectcode_exists",
                    type: "post",
                    data: {
                        projectcode: function() {
                            return $("#projectcode1").val();
                        }
                    }
                }
            },
            mainlocation: {
                required: true
            }
        },

        messages: {
            projectname: {
                required: '<span style="color:red">Please enter project name</span>',
                remote: '<span style="color:red">Project name already exits</span>'

            },
            projectcode: {
                required: '<span style="color:red">Please enter project code</span>',
                remote: '<span style="color:red">Project code already exits</span>'
            },
            mainlocation: {
                required: '<span style="color:red">Please enter main location</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });



    $(".project_Edit").validate({

        rules: {

            ProjectCode: {
                required: true,
                noSpace: true,

            },
            MainLocation: {
                required: true
            }
        },

        messages: {

            ProjectCode: {
                required: '<span style="color:red">Please enter project code</span>',

            },
            MainLocation: {
                required: '<span style="color:red">Please enter main location</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".projectE_Edit").validate({

        rules: {

            ProjectCode: {
                required: true,
                noSpace: true,

            },
            MainLocation: {
                required: true
            }
        },

        messages: {

            ProjectCode: {
                required: '<span style="color:red">Please enter project code</span>',

            },
            MainLocation: {
                required: '<span style="color:red">Please enter main location</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".projectD_Edit").validate({

        rules: {

            ProjectCode: {
                required: true,
                noSpace: true,

            },
            MainLocation: {
                required: true
            }
        },

        messages: {

            ProjectCode: {
                required: '<span style="color:red">Please enter project code</span>',

            },
            MainLocation: {
                required: '<span style="color:red">Please enter main location</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    // end project validation
    // QR code validation
    $(".qrAdd").validate({

        rules: {

            QRCodeNo: {
                required: true,
                noSpace: true

            },
            VehicleNo: {
                required: true

            },
            SupplierName: {
                required: true,

            }
        },

        messages: {
            QRCodeNo: {
                required: '<span style="color:red">Please enter QR Code Number</span>'

            },
            VehicleNo: {
                required: '<span style="color:red">Please enter Vehicle Number</span>'

            },
            SupplierName: {
                required: '<span style="color:red">Please enter Supplier Name</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    // end  qr code validation

    //  vehicle  validation

    $(".vehicleAdd").validate({

        rules: {

            vehiclenumber: {
                required: true,
                noSpace: true,
                remote: {
                    url: "register_vehiclenumber_exists",
                    type: "post",
                    data: {
                        vehiclenumber: function() {
                            return $("#vehiclenumber1").val();
                        }
                    }
                }
            },
            capacity: {
                required: true,
                number: true
            },
            uom: {
                required: true,

            }
        },

        messages: {
            vehiclenumber: {
                required: '<span style="color:red">Please enter Vehicle Number</span>',
                remote: '<span style="color:red">Vehicle Number already exits</span>'
            },
            capacity: {
                required: '<span style="color:red">Please enter Capacity</span>',
                number: '<span style="color:red">Please enter valied number</span>'
            },
            uom: {
                required: '<span style="color:red">Please enter UOM</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".vehicleE_Edit").validate({

        rules: {


            Capacity: {
                required: true,
                number: true
            },
            UOM: {
                required: true,

            },
            VehicleType: {
                required: true
            }
        },

        messages: {

            Capacity: {
                required: '<span style="color:red">Please enter Capacity</span>',
                number: '<span style="color:red">Please enter valied number</span>'
            },
            UOM: {
                required: '<span style="color:red">Please enter UOM</span>'
            },
            VehicleType: {
                required: '<span style="color:red">Please select Vehicle type</span>'
            },

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".vehicle_Edit").validate({

        rules: {


            Capacity: {
                required: true,
                number: true
            },
            UOM: {
                required: true,

            },
            VehicleType: {
                required: true
            }
        },

        messages: {

            Capacity: {
                required: '<span style="color:red">Please enter Capacity</span>',
                number: '<span style="color:red">Please enter valied number</span>'
            },
            UOM: {
                required: '<span style="color:red">Please enter UOM</span>'
            },
            VehicleType: {
                required: '<span style="color:red">Please select Vehicle type</span>'
            },

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".vehicleD_Edit").validate({

        rules: {


            Capacity: {
                required: true,
                number: true
            },
            UOM: {
                required: true,

            },
            VehicleType: {
                required: true
            }
        },

        messages: {

            Capacity: {
                required: '<span style="color:red">Please enter Capacity</span>',
                number: '<span style="color:red">Please enter valied number</span>'
            },
            UOM: {
                required: '<span style="color:red">Please enter UOM</span>'
            },
            VehicleType: {
                required: '<span style="color:red">Please select Vehicle type</span>'
            },

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    // end vehicle validation
    // start manual entry validation
    $(".manualAdd").validate({

        rules: {
            Date: {
                required: true
                

            },
            Project: {
                required: true,
                select: true

            },
            VehicleNo: {
                required: true,
                select: true
            },
            Location: {
                select: true,
                required: true

            },

            Type: {
                select: true,
                required: true

            },
            Supplier: {
                select: true,
                required: true

            },
            Material: {
                select: true,
                required: true

            },
            Capacity: {
                select: true,
                required: true,
                number: true,


            },
            UOM: {
                noSpace: true,
                required: true

            }
        },

        messages: {
            Date: {
                required: '<span style="color:red">Please enter Date</span>'

            },
            Project: {
                required: '<span style="color:red">Please enter Project Name</span>'

            },
            VehicleNo: {
                required: '<span style="color:red">Please enter Vehicle Number</span>'

            },
            Capacity: {
                required: '<span style="color:red">Please enter Quentity</span>',
                number: '<span style="color:red">Please enter a valid number</span>',
            },
            UOM: {
                required: '<span style="color:red">Please enter UOM</span>'
            },
            Location: {
                required: '<span style="color:red">Please enter Project Location</span>'
            },
            Type: {
                required: '<span style="color:red">Please enter Vehicle Type</span>'
            },
            Material: {
                required: '<span style="color:red">Please enter Material Type</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    // end manual entry validation

    // Supplier quentity validation

    $(".quantityEdit1").validate({

        rules: {

            Quantity: {
                required: true,
                number: true,
                noSpace: true

            },

        },

        messages: {
            Quantity: {
                required: '<span style="color:red">Please enter Quentity</span>',
                number: '<span style="color:red">Please enter valied Number </span>'
            }


        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });


    // end Supplier quentity validation


    $(".passwordUpdate").validate({

        rules: {
            password1: {
                required: true
            },
            password2: {
                required: true
            },
            password3: {
                required: true
            }
        },

        messages: {
            password1: {
                required: '<span style="color:red">Please enter project name</span>'
            },
            password2: {
                required: '<span style="color:red">Please enter project code</span>'
            },
            password3: {
                required: '<span style="color:red">Please enter main location</span>'
            }

        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $("#projectD_Edit").validate({

        rules: {
            projectname1: {
                required: true
            },
            projectcode1: {
                required: true,
                minlength: 10
            },
            mainlocation1: {
                required: true
            },
            description1: {
                required: true
            }
        },

        messages: {
            projectname1: {
                required: '<span style="color:red">Please enter project name</span>'
            },
            projectcode1: {
                required: '<span style="color:red">Please enter project code</span>'
            },
            mainlocation1: {
                required: '<span style="color:red">Please enter main location</span>'
            },
            description1: {
                required: '<span style="color:red">Please enter description</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $("#projectV_Edit").validate({

        rules: {
            projectname1: {
                required: true
            },
            projectcode1: {
                required: true,
                minlength: 10
            },
            mainlocation1: {
                required: true
            },
            description1: {
                required: true
            }
        },

        messages: {
            projectname1: {
                required: '<span style="color:red">Please enter project name</span>'
            },
            projectcode1: {
                required: '<span style="color:red">Please enter project code</span>'
            },
            mainlocation1: {
                required: '<span style="color:red">Please enter main location</span>'
            },
            description1: {
                required: '<span style="color:red">Please enter description</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $("#projectE_Edit").validate({

        rules: {
            projectname1: {
                required: true
            },
            projectcode1: {
                required: true,
                minlength: 10
            },
            mainlocation1: {
                required: true
            },
            description1: {
                required: true
            }
        },

        messages: {
            projectname1: {
                required: '<span style="color:red">Please enter project name</span>'
            },
            projectcode1: {
                required: '<span style="color:red">Please enter project code</span>'
            },
            mainlocation1: {
                required: '<span style="color:red">Please enter main location</span>'
            },
            description1: {
                required: '<span style="color:red">Please enter description</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });



    $(".vehicleAdd").validate({

        rules: {
            vehiclenumber: {
                required: true
            },
            capacity: {
                required: true,
                number: true
            },
            uom: {
                required: true
            }
        },

        messages: {
            vehiclenumber: {
                required: '<span style="color:red">Please enter vehicle number</span>'
            },
            capacity: {
                required: '<span style="color:red">Please enter capacity</span>',
                number: '<span style="color:red">Please enter valid capacity</span>'
            },
            uom: {
                required: '<span style="color:red">Please enter UOM</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".vehicleV_Edit").validate({

        rules: {
            vehiclenumber: {
                required: true
            },
            capacity: {
                required: true,
                number: true
            },
            uom: {
                required: true
            }
        },

        messages: {
            vehiclenumber: {
                required: '<span style="color:red">Please enter vehicle number</span>'
            },
            capacity: {
                required: '<span style="color:red">Please enter capacity</span>',
                number: '<span style="color:red">Please enter valid capacity</span>'
            },
            uom: {
                required: '<span style="color:red">Please enter UOM</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });

    $(".changepassword").validate({

        rules: {
            old_password: {
                required: true
            },
            New_password: {
                required: true,
                minlength: 5

            },
            re_password: {
                required: true,
                minlength: 5,
                equalTo: "#New_password1",

            }
        },

        messages: {
            old_password: {
                required: '<span style="color:red">Please enter Old Password </span>'
            },
            New_password: {
                required: '<span style="color:red">Please enter New Password</span>',
                minlength: '<span style="color:red">Password must has at least 5 characters</span>'

            },
            re_password: {
                required: '<span style="color:red">Please enter Confirm  Password</span>',
                minlength: '<span style="color:red">Password must has at least 5 characters</span>',
                equalTo: '<span style="color: red ">Enter Confirm Password Same as New Password</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });
    $(".reset").validate({

        rules: {

            password: {
                required: true,
                minlength: 5

            },
            Re_Password: {
                required: true,
                minlength: 5,
                equalTo: "#password5",

            }
        },

        messages: {

            password: {
                required: '<span style="color:red">Please enter New Password</span>',
                minlength: '<span style="color:red">Password must has at least 5 characters</span>'

            },
            Re_Password: {
                required: '<span style="color:red">Please enter Confirm  Password</span>',
                minlength: '<span style="color:red">Password must has at least 5 characters</span>',
                equalTo: '<span style="color: red ">Enter Confirm Password Same as New Password</span>'
            }
        },

        errorPlacement: function(error, element) {
            error.insertAfter(element.parent());
        }
    });



})(jQuery);
</script>

<!-- end form validation -->

<!-- Sum of quantity -->
<script>
var sum = 0;
// iterate through each td based on class and add the values
$(".quantityTotal").each(function() {

    var value = $(this).text();
    // add only if the value is number
    if (!isNaN(value) && value.length != 0) {
        sum += parseFloat(value);
    }
});
$('#result').text(sum);
</script>
<!-- END Sum of quantity -->

<script>
function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("table");
    switching = true;
    // Set the sorting direction to ascending:
    dir = "asc";
    /* Make a loop that will continue until
    no switching has been done: */
    while (switching) {
        // Start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /* Loop through all table rows (except the
        first, which contains table headers): */
        for (i = 1; i < (rows.length - 1); i++) {
            // Start by saying there should be no switching:
            shouldSwitch = false;
            /* Get the two elements you want to compare,
            one from current row and one from the next: */
            x = rows[i].getElementsByTagName("TD")[n];
            y = rows[i + 1].getElementsByTagName("TD")[n];
            /* Check if the two rows should switch place,
            based on the direction, asc or desc: */
            if (dir == "asc") {
                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    // If so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            } else if (dir == "desc") {
                if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                    // If so, mark as a switch and break the loop:
                    shouldSwitch = true;
                    break;
                }
            }
        }
        if (shouldSwitch) {
            /* If a switch has been marked, make the switch
            and mark that a switch has been done: */
            rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
            switching = true;
            // Each time a switch is done, increase this count by 1:
            switchcount++;
        } else {
            /* If no switching has been done AND the direction is "asc",
            set the direction to "desc" and run the while loop again. */
            if (switchcount == 0 && dir == "asc") {
                dir = "desc";
                switching = true;
            }
        }
    }
}
// Select clickable table
$("tbody tr").click(function() {
    var selected = $(this).hasClass("highlight");
    $("tr").removeClass("highlight");

    if (selected) {
        $(this).addClass("highlight");

    }
    if (!selected) {
        $(this).addClass("highlight");

    }
});
</script>

<script>
var timeout = 2000; // in miliseconds (3*1000)

$('.callout').delay(timeout).fadeOut(1000);
</script>

</body>

</html>