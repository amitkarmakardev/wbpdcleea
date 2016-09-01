<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">WBPDCLEEA</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('our-mission') }}">Our Mission</a></li>
                <li><a href="{{ url('achievement') }}">Achievements</a></li>
                <li><a href="{{ url('pending-issues') }}">Pending Issues</a></li>
                <li><a href="{{ url('announcement') }}">Announcements</a></li>
                <li><a href="{{ url('discussion') }}">Discussions</a></li>
                {{--<li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Nav header</li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>--}}
                <li><a href="{{ url('auth/login') }}">Login</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>