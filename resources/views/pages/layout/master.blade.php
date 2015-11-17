<!DOCTYPE html>
<html>
    <head>
        <title>{{ env('PROJECT_NAME') }} -  @yield('title')</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('plugins/bootstrap/css/bootstrap.min.css') }}" />
        <!-- Theme style -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('plugins/dist/css/AdminLTE.min.css') }}" />
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('plugins/dist/css/skins/_all-skins.min.css') }}" />
        <!-- Font Awesome -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('plugins/fontawesome/css/font-awesome.min.css') }}" />
        <!-- Ionicons -->
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('plugins/ionicons/css/ionicons.min.css') }}" />
        <link type="text/css" rel="stylesheet" href="{{ URL::asset('plugins/tagsinput/bootstrap-tagsinput.css') }}" />

        <link type="text/css" rel="stylesheet" href="{{ URL::asset('plugins/jcrop/css/jquery.Jcrop.css') }}"/>

        <link type="text/css" rel="stylesheet" href="{{ URL::asset('plugins/custom/style.css') }}"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta name="_token" content="{{ csrf_token() }}"/>
        <style>
            label.error{
                position: absolute;
                color:#f00;
                font-weight: 400;
            }

            .form-group {
                margin-bottom: 25px;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="{{ url() }}" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>E</b>M</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>E-</b>Market</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{ Auth::User()->userImage() }}" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Welcome : {{ Auth::user()->userName() }}</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="{{ Auth::User()->userImage() }}" class="img-circle" alt="User Image">
                                        <p>
                                            {{ Auth::user()->userName() }}
                                            <small>Member since {{ Auth::user()->getSinceDate() }}</small>
                                        </p>
                                    </li>
                                
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="{{ url('edit') }}" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="{{ url('auth/logout') }}" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </header>

            <!-- =============================================== -->

            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="{{ Auth::User()->userImage() }}" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p>{{ Auth::User()->userName() }}</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li><a href="{{ url("edit") }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
                        <li><a href="{{ url("add_product") }}"><i class="fa fa-plus"></i> <span>Add Product</span></a></li>
                        <li><a href="{{ url("manage_product") }}"><i class="fa fa-list-alt"></i> <span>Manage Product</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- =============================================== -->

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <section class="content-header">
                    <h1>
                        @yield('title')
                        <small>@yield('title-info')</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">@yield('title')</li>
                    </ol>
                </section>
                <!-- Content Header (Page header) -->
                <section class="content">
                    @section('content')

                    @show
                </section>
            </div><!-- /.content-wrapper -->

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 1.0.0
                </div>
                <strong>Copyright &copy; {{ date('Y') }} <a href="#">SavjiKitchen</a>.</strong> All rights reserved.
            </footer>

            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->


        <!-- Modal -->
        <div class="modal fade" id="commentsBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="modal_title">Modal title</h4>
                    </div>
                    <div class="modal-body" id="modal_body">
                        ...
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery 2.1.4 -->
        <script type="text/javascript" src="{{ URL::asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
        <!-- Bootstrap 3.3.5 -->
        <script type="text/javascript" src="{{ URL::asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- SlimScroll -->
        <script type="text/javascript" src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
        <!-- FastClick -->
        <script type="text/javascript" src="{{ URL::asset('plugins/fastclick/fastclick.min.js') }}"></script>
        <!-- AdminLTE App -->
        <script type="text/javascript" src="{{ URL::asset('plugins/dist/js/app.min.js') }}"></script>
        <!-- AdminLTE for demo purposes -->
        <script type="text/javascript" src="{{ URL::asset('plugins/dist/js/demo.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('plugins/jquery.validate/jquery.validate.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('plugins/jquery.validate/additional-methods.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('plugins/tagsinput/bootstrap-tagsinput.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('plugins/tagsinput/typeahead.bundle.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('plugins/jcrop/js/jquery.Jcrop.js') }}"></script>
        <script type="text/javascript">
$.ajaxSetup({
    headers: {'X-CSRF-Token': $('meta[name=_token]').attr('content')}
});
        </script>
        <script>
            var base_url = "{{ url() }}";

            $(document).ready(function () {

                $('#frmAddRecipe').validate({
                    rules: {
                        name: "required",
                        category: "required",
                        is_vegetarian: "required",
                        servings: "required",
                        hour: "required",
                        minite: "required",
                        description: "required",
                        ingredient_name: "required",
                        unit: "required",
                        quantity: "required",
                        instruction: "required",
                        recipe_image: "required"
                    },
                    messages: {
                        name: "Please enter recipe name",
                        category: "Please enter recipe category",
                        is_vegetarian: "Please enter recipe type",
                        servings: "Please enter recipe servings",
                        hour: "Please enter hours required",
                        minite: "Please enter minites required",
                        description: "Please enter recipe description",
                        ingredient_name: "Please enter ingredient name",
                        unit: "Please enter unit",
                        quantity: "Please enter quantity",
                        instruction: "Please enter instruction",
                        recipe_image: "Please choose recipe image"
                    },
                    submitHandler: function (form) {
                        form.submit();
                        return false;
                    }
                });

                var uniqueId = 1;
                $(function () {
                    $('#add_more_ingredients').click(function () {

                        var ele_count = 0;
                        $('#ingredient_list #ingredient_row').find('input, select').each(function () {
                            var val = $(this).val();
                            if (val != "" || val.length > 0) {
                                ele_count++;
                            }
                        });

                        if (ele_count < 3) {
                            alert("Please add first ingredent to add more");
                        }
                        else {

                            var copy = $("#ingredient_row").clone(true).appendTo("#ingredient_list");
                            var cosponsorDivId = 'ingredient_row_' + uniqueId;
                            copy.attr('id', cosponsorDivId);

                            var deleteLink = $("<a href='javascript:void(0)'><i class='fa fa-times text-danger'></i></a>");
                            deleteLink.appendTo(copy);
                            deleteLink.click(function () {
                                copy.remove();
                            });



                            $('#ingredient_list #ingredient_row_' + uniqueId).find('input, select').each(function () {
                                $(this).attr('id', $(this).attr('id') + '_' + uniqueId);
                                $(this).attr('name', $(this).attr('name') + '_' + uniqueId);
                                $(this).val("");

                                var str = $(this).data("role");
                                var res = str.replace("_", " ");
                                $(this).rules('add', {
                                    required: true,
                                    messages: {
                                        required: "Please enter " + res
                                    }
                                });
                            });

                            uniqueId++;
                            $('#ingredient_count').val(uniqueId);
                        }


                    });
                });

            });

            var uniqueInstructionId = 1;
            $(function () {
                $('#add_more_instructions').click(function () {

                    var instruction = $("#instruction").val().trim();

                    if (instruction.length == 0) {
                        alert("Please enter first instruction to add more.");
                    }
                    else {
                        var copy = $("#instruction_row").clone(true).appendTo("#instruction_list");
                        var cosponsorDivId = 'instruction_row_' + uniqueInstructionId;
                        copy.attr('id', cosponsorDivId);

                        var deleteLink = $("<a href='javascript:void(0)'><i class='fa fa-times text-danger'></i></a>");
                        deleteLink.appendTo(copy);
                        deleteLink.click(function () {
                            copy.remove();
                        });



                        $('#instruction_list #instruction_row_' + uniqueInstructionId).find('textarea').each(function () {
                            $(this).attr('id', $(this).attr('id') + '_' + uniqueInstructionId);
                            $(this).attr('name', $(this).attr('name') + '_' + uniqueInstructionId);
                            $(this).val("");
                            $(this).rules('add', {
                                required: true,
                                messages: {
                                    required: "Please enter instruction"
                                }
                            });
                        });

                        uniqueInstructionId++;
                        $('#instruction_count').val(uniqueInstructionId);
                    }
                });
            });

            $(document).ready(function () {
                $('#tags').tagsinput({
                    typeahead: {
                        source: ['Amsterdam', 'Washington', 'Sydney', 'Beijing', 'Cairo']
                    },
                    freeInput: true
                });
            });

            var loadFile = function (event) {
                var image_url = URL.createObjectURL(event.target.files[0]);
                $('.jcrop-holder img').attr('src', image_url);
            };


            $(function () {
                $('#cropbox').Jcrop({
                    onSelect: updateCoords,
                    setSelect: [250, 200, 50, 50],
                    aspectRatio: 16 / 9,
                    minSize: [300, 200]
                });
            });

            function updateCoords(c)
            {
                $('#x').val(c.x);
                $('#y').val(c.y);
                $('#w').val(c.w);
                $('#h').val(c.h);
            }
            ;




        </script>
        @yield('include_js')
    </body>
</html>