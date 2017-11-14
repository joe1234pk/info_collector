<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript">
   (function(){
      emailjs.init("user_WJWJ9JBOIi6PSyee1V1PL");
   })();
</script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.0/js/bootstrap-datepicker.min.js"></script>
<script>
    $.fn.datepicker.defaults.format = "yyyy-mm-dd";
    $.fn.datepicker.defaults.autoclose = true;
      function NewPassengerForm(){
    var string = 
    '<div class="well well-sm passenger_wrapper">' 
    +'<div class="row">'
    +' <div class="col-lg-4"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Given name:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[given_name][]" value="" required="true"></div></div></div>'
    + '<div class="col-lg-4">'
    +'<div class="form-group"><label class="col-lg-4 control-label">Middle name:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[mid_name][]" value=""></div></div></div>'
    + '<div class="col-lg-4">'
    +'<div class="form-group"><label class="col-lg-4 control-label">Surname:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[surname][]" value=""></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Title: </label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[title][]" value=""></div></div></div>'
    +'<div class="col-lg-6">'
    +'<div class="form-group"><label class="col-lg-4 control-label"> Gender:</label>'
    +'<div class="col-lg-8"><select class="form-control" name="new_passengers[gender][]" value=""><option value="male">Male</option><option value="female">female</option></select></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Email: </label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[email][]" value=""></div></div></div>'
    +'<div class="col-lg-6">'
    +'<div class="form-group"><label class="col-lg-4 control-label"> Mobile:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[mobile][]" value=""></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Date of birth:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[birth_date][]" value="" data-provide="datepicker"></div></div></div>'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Emergency contact information:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[emgcy_contact][]" value="" ></div></div></div></div>'
    +'<div class="passport-block"><div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Passport number: </label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[passport_num][]" value=""></div></div></div>'
    +'<div class="col-lg-6">'
    +'<div class="form-group"><label class="col-lg-4 control-label">Passport nationality:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[passport_nationality][]" value=""></div></div></div></div>'
    +'<div class="row">'
    +' <div class="col-lg-4"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Date of issue:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[passport_date_of_issue][]" value="" data-provide="datepicker"></div></div></div>'
    + '<div class="col-lg-4">'
    +'<div class="form-group"><label class="col-lg-4 control-label">Expiry date:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[passport_expiry_date][]" value="" data-provide="datepicker"></div></div></div>'
    + '<div class="col-lg-4">'
    +'<div class="form-group"><label class="col-lg-4 control-label">Place of birth:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[place_of_birth][]" value=""></div></div></div></div></div>'
     +'<div class="address-block"><div class="row">'
    +'<div class="col-lg-8"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Resident address:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[address][]" value="" data-provide="datepicker"></div></div></div>'
    +'<div class="col-lg-4"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Suburb:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[address_sub][]" value="" ></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 control-label">State:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[address_state][]" value="" data-provide="datepicker"></div></div></div>'
    +'<div class="col-lg-6"><div class="form-group">'
    +'<label class="col-lg-4 control-label">Postcode:</label>'
    +'<div class="col-lg-8"><input class="form-control" name="new_passengers[address_postcode][]" value="" ></div></div></div></div></div>'
    +'<div class="row">'
    +'<div class="col-lg-2 pull-right"><a href="javascript:void(0);" class="btn btn-danger remove_passenger">Remove</a></div></div></div>'
    return string ;
}

</script>

</body>
</html>
