<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cube Summation Application">
    <meta name="author" content="Yoel Monzon">

    <title>Cube Summation</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sticky-footer.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="container">
        <div class="header clearfix">
            <h3 class="text-muted">Cube Summation</h3>
        </div>

        @yield('content')
    </div>

    <footer class="footer mt-10">
        <div class="container">
            <span class="text-muted">
                &copy; Yoel Monzon. <a href="http://github.com/yoelfme" target="_blank">(yoelfme)</a>
            </span>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>
