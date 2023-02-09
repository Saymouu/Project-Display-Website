<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My Project</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <a class="navbar-brand" href="{{ route('home')}}">Home</a>
                    <a class="navbar-brand" href="{{ route('about')}}">About</a>
                    <a class="navbar-brand" href="{{ route('projects')}}">Projects</a>
                    <a class="navbar-brand" href="{{ route('contact')}}">Categories</a>
                </div>
                <div class="searchBox">
                    <input class="searchInput"type="text" name="" placeholder="Search">
                    <button class="searchButton" href="#">
                        <i class="material-icons">
                            Search
                        </i>
                    </button>
                </div>
            </div>
        </nav>

        @yield('content')
        
        <!-- Footer-->
        
        <footer class="footer bg-black small text-center text-white-50">
            
            <div class="container px-4 px-lg-5" style="font-size: 150%">Copyright &copy; Test project 2022</div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="{{asset('https://cdn.startbootstrap.com/sb-forms-latest.js')}}"></script>
    </body>
</html>
