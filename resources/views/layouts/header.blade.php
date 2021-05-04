<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li>
    </ul>
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>

        </div>
    </form>

    <ul class="navbar-nav ml-auto">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                    <a href="#" class="nav-link"><i class="fas fa-user"></i>
                        User project</a>

                    <a href="#" class="nav-link"><i class="fa fa-cog" aria-hidden="true"></i>
                        Settings</a>
                <a href="{{route('logoutAdmin')}}" class="nav-link"><i class="fas fa-sign-out-alt"></i>
                    Logout</a>
            </ul>
        </li>
    </ul>
</nav>
