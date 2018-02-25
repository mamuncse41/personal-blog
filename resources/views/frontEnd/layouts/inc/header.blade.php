	<div class="header">
    <div class="header-nav">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><span>মামুনের রাফখাতা</span></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="hvr-bounce-to-bottom active"><a href="{{url('/')}}">Home</a></li>
                    <li class="hvr-bounce-to-bottom"><a href="{{url('/about-page')}}">About</a></li>
                    <li class="hvr-bounce-to-bottom"><a href="{{url('/portfolio-page')}}">Portfolio</a></li>
          
                    <li class="hvr-bounce-to-bottom"><a href="{{url('/contact-page')}}">Contact Us</a></li>
                </ul>
                <div class="sign-in">
                    <ul>
                        <li><a href="{{url('/login-page')}}">Sign In </a>/</li>
                        <li><a href="{{url('/register-page')}}">Register</a></li>
                    </ul>
                </div>
            </div><!-- /.navbar-collapse -->
        </nav>
    </div>

    <!-- search-scripts -->
    <script src="{{asset('public/frontEnd/js/classie.js')}}"></script>
    <script src="{{asset('public/frontEnd/js/uisearch.js')}}"></script>
    <script>
new UISearch(document.getElementById('sb-search'));
    </script>
    <!-- //search-scripts -->
</div>	