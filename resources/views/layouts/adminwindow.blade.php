<!DOCTYPE html>
<head>
    <meta charset="UTF-8" />
    <title>@yield("title")</title
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/main.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/theme.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="{{asset('assets')}}/admin/assets/css/layout2.css" rel="stylesheet" />
    <link href="{{asset('assets')}}/admin/assets/plugins/flot/examples/examples.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets')}}/admin/assets/plugins/timeline/timeline.css" />
    <!-- END PAGE LEVEL  STYLES -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    @yield("head")
</head>
<body class="padTop53 " >

@yield('content')


@yield('foot')

</body>

</html>
