<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            @yield('navTitle')
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            @yield('navbarType')
        </div>
    </div>
</nav>