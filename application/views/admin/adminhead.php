<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SmartAdmin - Responsive admin template..</title>
    <link rel="shortcut icon" href="img/favicon.ico">
    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Roboto Slab Font [ OPTIONAL ] -->

    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>css/admincss/bootstrap.min.css" rel="stylesheet">
    <!--Jasmine Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>css/admincss/style.css" rel="stylesheet">
    <!--Font Awesome [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!--Switchery [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/switchery/switchery.min.css" rel="stylesheet">
    <!--<?php echo base_url(); ?> Select [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url(); ?>css/admincss/demo/jasmine.css" rel="stylesheet">

    
    <!--SCRIPT-->
    <!--=================================================-->
    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>js/adminplugins/pace/pace.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <style>
        .removeRow {
            background-color: #FF0000;
            color: #FFFFFF;
        }
    </style>
    <script src="<?php echo base_url(); ?>js/adminplugins/pace/pace.min.js"></script>
    <script>
        
        $(document).ready(function() {
            $('.delete_checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $(this).closest('tr').addClass('removeRow');
                } else {
                    $(this).closest('tr').removeClass('removeRow');
                }
            });

            $('#delete_all').click(function() {
                var checkbox = $('.delete_checkbox:checked');
                if (checkbox.length > 0) {
                    var checkbox_value = [];
                    $(checkbox).each(function() {
                        checkbox_value.push($(this).val());
                    });
                    $.ajax({
                        url: "<?php echo base_url(); ?>Category/delete_all",
                        method: "POST",
                        data: {
                            checkbox_value: checkbox_value
                        },
                        success: function() {
                            $('.removeRow').fadeOut(1500);
                        }
                    })
                } else {
                    alert('Select atleast one records');
                }
            });

            $('.delete_order').click(function() {
                if ($(this).is(':checked')) {
                    $(this).closest('tr').addClass('removeRow');
                } else {
                    $(this).closest('tr').removeClass('removeRow');
                }
            });

            $('#delete_all_order').click(function() {
                console.log("called");
                var checkbox = $('.delete_order:checked');
                if (checkbox.length > 0) {
                    var checkbox_value = [];
                    $(checkbox).each(function() {
                        checkbox_value.push($(this).val());
                    });
                    $.ajax({
                        url: "<?php echo base_url(); ?>Order/delete_all",
                        method: "POST",
                        data: {
                            checkbox_value: checkbox_value
                        },
                        success: function() {
                            $('.removeRow').fadeOut(1500);
                        }
                    })
                } else {
                    alert('Select atleast one records');
                }
            });

            $('.select').click(function() {
                var val = $(this);
                var dataToSend = {
                    'text': $(this).text(),
                    'orderid': $(this).closest("tr.order_list").find("input[name='delete_order']").val(),
                    'userid': $("#userid").val(),
                };
                console.log(dataToSend);
                var ajaxObj = {
                    type: 'POST',
                    datatype: 'json',
                    url: '<?php echo base_url(); ?>order/updateStatus',
                    data: dataToSend,
                    success: function(r) {
                        console.log(r);
                        val.closest(".dropdown").find(".badge").text(r);
                    },
                    onerror: function() {
                        console.log("Falied");
                    }
                };
                var done = confirm("Press a button!");
                if (done) {
                    console.log(ajaxObj);
                    $.ajax(ajaxObj);
                } else {
                    console.log("Not Changed");
                }
            });

            $(".dropdown-menu li a").click(function() {

                $("this").text($(this).text());

            });

            $(".approved").click(function() {
                var cur = $(this);
                var dataToSend = {
                    'status': "Approved",
                    'reviewid': cur.closest("td.isapproved").find("input[name='reviewId']").val(),
                };
                console.log(dataToSend);
                var ajaxObj = {
                    type: 'POST',
                    datatype: 'json',
                    url: '<?php echo base_url(); ?>product/approveReview',
                    data: dataToSend,
                    success: function(r) {
                        console.log(r);
                        cur.text(r);
                    },
                    onerror: function() {
                        console.log("Falied");
                    }
                };
                var done = confirm("Press a button!");
                if (done) {
                    console.log(ajaxObj);
                    $.ajax(ajaxObj);
                } else {
                    console.log("Not Changed");
                }


            });

            $("#generateCouponCode").click(function() {

                var ajaxObj = {
                    type: 'POST',
                    datatype: 'json',
                    url: '<?php echo base_url(); ?>Gift/run_key',
                    success: function(r) {
                        console.log(r);
                        $("#GiftCardCouponCode").val(r);
                    },
                    onerror: function() {
                        console.log("Falied");
                    }
                };
                $.ajax(ajaxObj);



            });
        });
    </script>
</head>