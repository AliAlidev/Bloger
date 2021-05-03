<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bloger</title>
    <!-- Description, Keywords and Author -->
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your,Keywords">
    <meta name="author" content="ResponsiveWebInc">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Styles -->
    <!-- Bootstrap CSS -->
    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href={{ asset('css/font-awesome.min.css') }} rel="stylesheet">
    <!-- Custom CSS -->
    <link href={{ asset('css/style.css') }} rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> --}}

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro:400,600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href={{ asset('slider/fonts/icomoon/style.css') }}>

    <link rel="stylesheet" href={{ asset('slider/css/owl.carousel.min.css') }}>

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href={{ asset("slider/css/bootstrap.css") }}> --}}

    <!-- Style -->
    <link rel="stylesheet" href={{ asset('slider/css/style.css') }}>

    <!-- Favicon -->
    <link rel="shortcut icon" href="#">
</head>

<body>
    <div class="wrapper">

        <!-- header -->
        <header>
            @include('Layouts.header')
        </header>

        {{-- slider --}}
        {{-- pass data to slider blade we 
                 write @include('Layouts.slider',['key' => value]) --}}
        {{-- @include('Layouts.slider') --}}
        {{-- End Slider --}}

        {{-- <!-- banner -->
        <div class="banner">
            <div class="container">
                <!-- heading -->
                <h2>I'm Banner Heading for This Page</h2>
                <!-- paragraph -->
                <p>It is our belief that in order to be most efficient it requires adaptive technology and software our
                    customers can focus on their core business.</p>
            </div>
        </div>
        <!-- banner end --> --}}

        @yield('content')

        <footer>
            @include('Layouts.footer')
        </footer>

    </div>
    <!-- Javascript files -->
    <!-- jQuery -->
    <script src={{ asset('js/jquery.js') }}></script>
    <!-- Bootstrap JS -->
    <script src={{ asset('js/bootstrap.min.js') }}></script>
    <!-- Respond JS for IE8 -->
    <script src={{ asset('js/respond.min.js') }}></script>
    <!-- HTML5 Support for IE -->
    <script src={{ asset('js/html5shiv.js') }}></script>
    <!-- Custom JS -->
    <script src={{ asset('js/custom.js') }}></script>

    <script src={{ asset('slider/js/jquery-3.3.1.min.js') }}></script>
    <script src={{ asset('slider/js/popper.min.js') }}></script>
    <script src={{ asset('slider/js/bootstrap.min.js') }}></script>
    <script src={{ asset('slider/js/owl.carousel.min.js') }}></script>
    <script src={{ asset('slider/js/main.js') }}></script>

    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });

    </script>
</body>

</html>
