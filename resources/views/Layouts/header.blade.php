    <!-- navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img class="img-responsive" src={{ url('img/logo.png') }}
                        alt="Logo" /></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (session('username'))
                        <li><a href="/user/{{ session('userid') }}/edit">{{ session('username') }}</a></li>
                        <li><a href="/signout">Sign out</a></li>
                    @else
                        <li><a href="register">Signup</a></li>
                        <li><a href="login">Login</a></li>
                    @endif
                    <li><a href="/">Home</a></li>
                    <li><a href="/user">Show Users</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#event">Events</a></li>
                            <li><a href="#blog">New Blogs</a></li>
                            <li><a href="#subscribe">Subscribe</a></li>
                            <li><a href="#team">Executive Team</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
