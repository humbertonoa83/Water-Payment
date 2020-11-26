<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>@yield('titulo')</title>
{{--    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
{{--    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>--}}
<!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="AEISUTC TEAM" />

    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
{{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">--}}
<!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/bower_components/bootstrap/css/bootstrap.min.css') }}">

{{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/searchpanes/1.2.0/css/searchPanes.dataTables.min.css">--}}
{{--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.3.1/css/select.dataTables.min.css">--}}
<!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css') }}">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css') }}" />
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/bower_components/datedropper/css/datedropper.min.css') }}" />

    <!-- C3 chart -->
    <link rel="stylesheet" href="{{ asset('files/bower_components/c3/css/c3.css') }}" type="text/css" media="all">
    <style>
        .stepwizard-step p {
            margin-top: 10px;
        }

        .stepwizard-row {
            display: table-row;
        }

        .stepwizard {
            display: table;
            width: 100%;
            position: relative;
        }

        .stepwizard-step button[disabled] {
            opacity: 1 !important;
            filter: alpha(opacity=100) !important;
        }

        .stepwizard-row:before {
            top: 14px;
            bottom: 0;
            position: absolute;
            content: " ";
            width: 100%;
            height: 1px;
            background-color: #ccc;
            z-order: 0;

        }

        .stepwizard-step {
            display: table-cell;
            text-align: center;
            position: relative;
        }

        .btn-circle {
            width: 30px;
            height: 30px;
            text-align: center;
            padding: 6px 0;
            font-size: 12px;
            line-height: 1.428571429;
            border-radius: 15px;
        }
    </style>


    <!-- waves.css -->

    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">

{{--    <link rel="stylesheet" href="{{ asset('/files/assets/pages/waves/css/waves.min.css" type="text/css') }}" media="all">--}}
<!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/icon/feather/css/feather.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/files/assets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/icofont/css/icofont.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/css/pages.css') }}">

    <!-- Notification.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/assets/pages/notification/notification.css') }}">
    <!-- Animate.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('files/bower_components/animate.css/css/animate.css') }}">
</head>

<body>
<div id="app">

    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- [ Header ] start -->
        @include('layouts.header')
        <!-- [ chatuserlist ] start -->
        @include('layouts.chat-user-list')
        <!-- [ chat user list ] end -->
            <!-- [ chatmessage ] start -->
        @include('layouts.chat-message')
        <!-- [ chat message ] end -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                @include('layouts.nav')
                <!-- [ navigation menu ] end -->
                    <div class="pcoded-content">
                        <!-- [ breadcrumb ] start -->

                        <!-- [ breadcrumb ] end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ style Customizer ] start -->
                <div id="styleSelector">
                </div>
                <!-- [ style Customizer ] end -->
            </div>
        </div>
    </div>
</div>
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>--}}

<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('files/bower_components/jquery/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/jquery-ui/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/popper.js/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- waves js -->
{{--<script src="{{ asset('files/assets/pages/waves/js/waves.min.js') }}"></script>--}}
<!-- jquery slimscroll js -->
{{--<script type="text/javascript" src="{{ asset('files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js') }}"></script>--}}
<!-- modernizr js -->
{{--<script type="text/javascript" src="{{ asset('files/bower_components/modernizr/js/modernizr.js') }}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('/files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>--}}
<!-- tinymce js -->
<script src="{{ asset('/files/assets/pages/wysiwyg-editor/js/tinymce.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ asset('files/assets/pages/data-table/js/data-table-custom.js') }}"></script>
<!-- Chart js -->
<!-- notification js -->
<script type="text/javascript" src="{{ asset('files/assets/js/bootstrap-growl.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/pages/notification/notification.js') }}"></script>
<script src="{{ asset('files/assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('files/assets/js/vertical/vertical-layout.min.js') }}"></script>


<script src="{{ asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

<script src="{{ asset('files/assets/js/pcoded.min.js') }}"></script>
<script src="{{ asset('files/assets/js/vertical/vertical-layout.min.js') }}"></script>
<script src="{{ asset('files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/bower_components/chart.js/js/Chart.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/pages/chart/chartjs/chartjs-custom.js') }}"></script>

{{-- Data Table --}}
<script src="{{ asset('files/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('files/assets/pages/data-table/js/jszip.min.js') }}"></script>
<script src="{{ asset('files/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('files/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<!-- c3 chart js -->
<script src="{{ asset('files/bower_components/d3/js/d3.min.js') }}"></script>
<script src="{{ asset('files/bower_components/c3/js/c3.js') }}"></script>
<script src="{{ asset('files/assets/pages/chart/c3/c3-custom-chart.js') }}"></script>
<script type="text/javascript" src="{{ asset('files/assets/pages/widget/widget-statistic.js') }}"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('files/assets/css/widget.css') }}">


<script type="text/javascript" src="{{ asset('files/assets/js/script.js') }}"></script>


<!-- Bootstrap date-time-picker js -->
<script type="text/javascript" src="{{ asset('/files/assets/pages/advance-elements/moment-with-locales.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/files/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/files/assets/pages/advance-elements/bootstrap-datetimepicker.min.js') }}"></script>
<!-- Date-range picker js -->
<script type="text/javascript" src="{{ asset('/files/bower_components/bootstrap-daterangepicker/js/daterangepicker.js') }}"></script>
<!-- Date-dropper js -->
<script type="text/javascript" src="{{ asset('/files/bower_components/datedropper/js/datedropper.min.js') }}"></script>
<!-- Color picker js -->
<script type="text/javascript" src="{{ asset('/files/bower_components/spectrum/js/spectrum.js') }}"></script>
<script type="text/javascript" src="{{ asset('/files/bower_components/jscolor/js/jscolor.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/data-table.js') }}"></script>
<script>
    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function(){
            var curStep = $(this).closest(".setup-content"),
                curStepBtn = curStep.attr("id"),
                nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                curInputs = curStep.find("input[type='text'],input[type='url']"),
                isValid = true;

            $(".form-group").removeClass("has-error");
            for(var i=0; i<curInputs.length; i++){
                if (!curInputs[i].validity.valid){
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });
</script>
{{--<script type="text/javascript">--}}
{{--    $('.date').datepicker({--}}
{{--        format: 'mm-dd-yyyy'--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    $(document).ready(function () {--}}

{{--        $('.input-daterange').datepicker({--}}
{{--            todayBtn:'linked',--}}
{{--            format:'yyyy-mm-dd',--}}
{{--            autoclose:true--}}
{{--        });--}}
{{--        $('#filter').click(function(){--}}
{{--            var from_date = $('#from_date').val();--}}
{{--            var to_date = $('#to_date').val();--}}
{{--            if(from_date != '' &&  to_date != '')--}}
{{--            {--}}
{{--                $('#order_table').DataTable().destroy();--}}
{{--                load_data(from_date, to_date);--}}
{{--            }--}}
{{--            else--}}
{{--            {--}}
{{--                alert('Both Date is required');--}}
{{--            }--}}
{{--        });--}}

{{--        $('#refresh').click(function(){--}}
{{--            $('#from_date').val('');--}}
{{--            $('#to_date').val('');--}}
{{--            $('#order_table').DataTable().destroy();--}}

{{--        });--}}
{{--        $('#all_client_table').DataTable({--}}
{{--            processing: true,--}}
{{--            serverSide: true,--}}
{{--            ajax: {--}}
{{--                url:'{{ route("clients.index") }}',--}}
{{--                data:{from_date:from_date, to_date:to_date}--}}
{{--            },--}}
{{--            dom: 'Bfrtip',--}}
{{--            // Configure the drop down options.--}}
{{--            lengthMenu: [--}}
{{--                [ 10, 25, 50, -1 ],--}}
{{--                [ '10 rows', '25 rows', '50 rows', 'Show all' ]--}}
{{--            ],--}}
{{--            // Add to buttons the pageLength option.--}}
{{--            buttons: [--}}
{{--                'pageLength','excel','print','pdf'--}}
{{--            ],--}}

{{--        });        });--}}
{{--</script>--}}
{{--<script>--}}
{{--    "use strict";--}}
{{--    $(document).ready(function () {--}}
{{--    /*Doughnut chart*/--}}
{{--        /*donut chart*/--}}
{{--        setTimeout(function() {--}}
{{--            var chart = c3.generate({--}}
{{--                bindto: '#chart23',--}}
{{--                data: {--}}
{{--                    columns: [--}}
{{--                        ['data1', 300],--}}
{{--                        ['data2', 200],--}}
{{--                        ['data3', 100],--}}
{{--                    ],--}}
{{--                    type: 'donut',--}}
{{--                    onclick: function(d, i) { console.log("onclick", d, i); },--}}
{{--                    onmouseover: function(d, i) { console.log("onmouseover", d, i); },--}}
{{--                    onmouseout: function(d, i) { console.log("onmouseout", d, i); }--}}
{{--                },--}}
{{--                color: {--}}
{{--                    pattern: ['#11c15b', '#536dfe']--}}
{{--                },--}}
{{--                donut: {--}}
{{--                    title: "Iris Petal Width"--}}
{{--                }--}}
{{--            });--}}
{{--        },350);--}}
{{--        setTimeout(function() {--}}
{{--            chart.unload({--}}
{{--                ids: 'data1'--}}
{{--            });--}}
{{--            chart.unload({--}}
{{--                ids: 'data2'--}}
{{--            });--}}
{{--            chart.unload({--}}
{{--                ids: 'data3'--}}
{{--            });--}}
{{--        }, 2500);--}}

{{--    });--}}
{{--</script>--}}
@include('layouts.js.custom')

<script>
    $(document).ready(function(){
        $('.input-daterange').datepicker({
            format: 'mm-dd-yyyy'
        });

        all_client_table();

        function all_client_table(from_date = '', to_date = '')
        {
            $('#all_client_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url:'{{ route("clients.index") }}',
                    data:{from_date:from_date, to_date:to_date}
                },
                dom: 'Bfrtip',
                // Configure the drop down options.
                lengthMenu: [
                    [ 10, 25, 50, -1 ],
                    [ '10 rows', '25 rows', '50 rows', 'Show all' ]
                ],
                // Add to buttons the pageLength option.
                buttons: [
                    'pageLength','excel','print','pdf'
                ],
                columns: [
                    {
                        data:'name',
                        name:'name'
                    },
                    {
                        data:'surname',
                        name:'surname'
                    },
                    {
                        data:'telephone',
                        name:'telephone'
                    },
                    {
                        data:'email',
                        name:'email'
                    },
                    {
                        data:'gender',
                        name:'gender'
                    },
                    {
                        data:'nationality',
                        name:'nationality'
                    } ,
                    {
                        data:'created_at',
                        name:'created_at'
                    }
                ]
            });
            $('filter-input').keyup(function () {
                table.column(($this).data('column'))
                    .search($(this).val())
                    .draw();
            });

        }

        $('#filter').click(function(){
            var from_date = $('#from_date').val();
            var to_date = $('#to_date').val();
            if(from_date != '' &&  to_date != '')
            {
                $('#all_client_table').DataTable().destroy();
                all_client_table(from_date, to_date);
            }
            else
            {
                alert('Both Date is required');
            }
        });

        $('#refresh').click(function(){
            $('#from_date').val('');
            $('#to_date').val('');
            $('#order_table').DataTable().destroy();
            all_client_table();
        });

    });

</script>


</body>
</html>
