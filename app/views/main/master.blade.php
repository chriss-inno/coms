<html>
<head>
    <title>

       @yield('title')

    </title>
    {{ HTML::style("assets/bootstrap/css/bootstrap.min.css" ) }}

</head>
<body>
<div class="container">

    @yield('contents')

</div>

</body>
</html>