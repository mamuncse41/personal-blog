
<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Colored Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
          Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('public/Admin/css/bootstrap.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{asset('public/Admin/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('public/Admin/css/font.css')}}" type="text/css"/>
    <link href="{{asset('public/Admin/css/font-awesome.css')}}" rel="stylesheet"> 
    <!-- //font-awesome icons -->
    <script src="{{asset('public/Admin/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{asset('public/Admin/js/modernizr.js')}}"></script>
    <script src="{{asset('public/Admin/js/jquery.cookie.js')}}"></script>
    <script src="{{asset('public/Admin/js/screenfull.js')}}"></script>
    <script>
        $(function () {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

            if (!screenfull.enabled) {
                return false;
            }



            $('#toggle').click(function () {
                screenfull.toggle($('#container')[0]);
            });
        });
    </script>
    <!-- charts -->
    <script src="{{asset('public/Admin/js/raphael-min.js')}}"></script>
    <script src="{{asset('public/Admin/js/morris.js')}}"></script>
    <link rel="stylesheet" href="{{asset('public/Admin/css/morris.css')}}">
    <!-- //charts -->
    <!--skycons-icons-->
    <script src="{{asset('public/Admin/js/skycons.js')}}"></script>
    <!--//skycons-icons-->
    <!-- tables -->
<link rel="stylesheet" type="text/css" href="{{asset('public/Admin/css/table-style.css')}}" />
<link rel="stylesheet" type="text/css" href="{{asset('public/Admin/css/basictable.css')}}" />
<script type="text/javascript" src="{{asset('public/Admin/js/jquery.basictable.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
</head>
<body class="dashboard-page">
    <script>
        var theme = $.cookie('protonTheme') || 'default';
        $('body').removeClass(function (index, css) {
            return (css.match(/\btheme-\S+/g) || []).join(' ');
        });
        if (theme !== 'default')
            $('body').addClass(theme);
    </script>
@include('Admin.layouts.inc.side_nav');
    <section class="wrapper scrollable">
        <nav class="user-menu">
            <a href="javascript:;" class="main-menu-access">
                <i class="icon-proton-logo"></i>
                <i class="icon-reorder"></i>
            </a>
        </nav>
  @include('Admin.layouts.inc.header');
       @yield('mainContent')
        <!-- footer -->
      @include('Admin.layouts.inc.footer');
        <!-- //footer -->
    </section>
    <script src="{{asset('public/Admin/js/bootstrap.js')}}"></script>
    <script src="{{asset('public/Admin/js/proton.js')}}"></script>
</body>
</html>
