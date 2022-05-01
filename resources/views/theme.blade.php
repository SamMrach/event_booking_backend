<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>cms dashboard
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!----css3---->
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!--google material icon-->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">

    <!-- users view -->
    @stack('css')
    <!-- events view -->

    @stack('cssEvents')
    @stack('cssAddEvent')
    @stack('cssCategories')
    @stack('cssAddCategorie')
</head>

<body>
    <div class="wrapper">
        <div class="body-overlay"></div>
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><img src="{{asset('storage/images/logo1.png')}}" id="logo" /></h3>
            </div>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="/" class="dashboard"><i class="material-icons">dashboard</i><span>Dashboard</span></a>
                </li>
                <div class="small-screen navbar-display">
                    <li class="dropdown d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#homeSubmenu0" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <i class="material-icons">notifications</i><span> 4 notification</span></a>
                        <ul class="collapse list-unstyled menu" id="homeSubmenu0">
                            <li>
                                <a href="#">You have 5 new messages</a>
                            </li>
                            <li>
                                <a href="#">You're now friend with Mike</a>
                            </li>
                            <li>
                                <a href="#">Wish Mary on her birthday!</a>
                            </li>
                            <li>
                                <a href="#">5 warnings in Server Console</a>
                            </li>
                        </ul>
                    </li>
                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">apps</i><span>apps</span></a>
                    </li>
                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">person</i><span>user</span></a>
                    </li>
                    <li class="d-lg-none d-md-block d-xl-none d-sm-block">
                        <a href="#"><i class="material-icons">settings</i><span>setting</span></a>
                    </li>
                </div>
                <li class="">
                    <a href="/events"><i class="material-icons">date_range</i><span>Evènements</span></a>
                </li>
                <li class="">
                    <a href="/users"><i class="material-icons">people_alt</i><span>utilisateurs</span></a>
                </li>
                <li class="">
                    <a href="/orders"><i class="material-icons">inventory</i><span>commandes</span></a>
                </li>
                <li class="">
                    <a href="/categories"><i class="material-icons">category</i><span>catégories</span></a>
                </li>
                <li class="">
                    <a onclick="submitFORM()"><i class="material-icons">logout</i><span>Logout</span></a>
                </li>
                <form id="logoutFORM" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </ul>
        </nav>
        <!-- Page Content  -->
        <div id="content">
            <div class="top-navbar">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">

                        <a class="navbar-brand" href="/"> Dashboard </a>
                        <button class="d-inline-block d-lg-none ml-auto more-button" type="button"
                            data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="material-icons">more_vert</span>
                        </button>
                        <div class="collapse navbar-collapse d-lg-block d-xl-block d-sm-none d-md-none d-none"
                            id="navbarSupportedContent">
                            <ul class="nav navbar-nav ml-auto">
                                <!-- 
                                <li class="dropdown nav-item active">
                                    <a href="#" class="nav-link" data-toggle="dropdown">
                                        <span class="material-icons">notifications</span>
                                        <span class="notification">4</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="#">You have 5 new messages</a>
                                        </li>
                                        <li>
                                            <a href="#">You're now friend with Mike</a>
                                        </li>
                                        <li>
                                            <a href="#">Wish Mary on her birthday!</a>
                                        </li>
                                        <li>
                                            <a href="#">5 warnings in Server Console</a>
                                        </li>
                                    </ul>
                                </li>-->
                                <!-- 
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">person</span>
                                    </a>
                                </li>-->
                                <!-- 
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <span class="material-icons">settings</span>
                                    </a>
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="main-content">
                @yield('main-content')


            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
            $('#content').toggleClass('active');
        });

        $('.more-button,.body-overlay').on('click', function() {
            $('#sidebar,.body-overlay').toggleClass('show-nav');
        });

    });
    </script>
    @stack('script')
    @stack('AddEventScript')
    @stack('jsCategories')
    @stack('AddCategorieScript')
</body>
<script>
function submitFORM() {
    //alert('ddd');
    document.getElementById('logoutFORM').submit();
}
</script>

</html>