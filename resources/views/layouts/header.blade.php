<!DOCTYPE html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Knygos tau</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body>

<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
    <a class="navbar-brand" href="#">Navbar</a>
    <div class="collapse navbar-collapse" id="navbarNav">
        <p>xd</p>
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">Home</a></li>
            <li role="presentation"><a href="#">Profile</a></li>
            <li role="presentation"><a href="#">Messages</a></li>
        </ul>
    </div>
</nav>

<ul class="nav nav-tabs">
    <li class="active">
        <a href="#">Home</a>
    </li>
    <li><a href="#">...</a></li>
    <li><a href="#">...</a></li>
</ul>

<ul class="nav nav-pills">
    <li class="dropdown">
        <a class="dropdown-toggle"
           data-toggle="dropdown"
           href="#">
            Dropdown
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <!-- links -->
        </ul>
    </li>
</ul>

@yield('master')
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/app.js') }}"></script>
</body>

</html>