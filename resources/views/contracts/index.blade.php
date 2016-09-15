

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">

    <meta name="google-signin-client_id" content="799028135817-9hcodfpc66b8ofgfi8kf6c77fqb5ba29.apps.googleusercontent.com">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cleaning app</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">




    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


   <meta charset="utf-8">
   <style>
   html { height: 100% }
   body { height: 100% }
   #map-container { height: 30% }

   </style>

</head>

<body id="app-layout">

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Cleaning App
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">User details</a></li>
                </ul>
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/contracts') }}">Contracts</a></li>
                </ul>

                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/jobs') }}">Jobs</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} - {{ ucfirst(Auth::user()->accounttype)}} <span class="caret"></span>
                            </a>


                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                @can('manager-auth')
                                    <li><a href="{{ url('/management') }}"><i class="fa fa-btn fa-users"></i>Management</a></li>
                                @endcan
                            </ul>

                        </li>

                    @endif
                </ul>
            </div>
        </div>
    </nav>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
          <div class="panel-heading">Add a contract</div>
            <div class="panel-body">
              <div id="map" style="width: 100%; height: 100%; position: absolute;">
                <div id="map-canvas"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>

       function initMap() {
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 8,
           center: {lat: -34.397, lng: 150.644}
         });
         var geocoder = new google.maps.Geocoder();

         document.getElementById('submit').addEventListener('click', function() {
           geocodeAddress(geocoder, map);
         });
       }

       function geocodeAddress(geocoder, resultsMap) {
         var address = document.getElementById('address').value;
         geocoder.geocode({'address': address}, function(results, status) {
           if (status === 'OK') {
             resultsMap.setCenter(results[0].geometry.location);
             var marker = new google.maps.Marker({
               map: resultsMap,
               position: results[0].geometry.location
             });
           } else {
             alert('Geocode was not successful for the following reason: ' + status);
           }
         });
       }


    </script>
    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>






    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChaWi32vAUwShH-K2cA6sl-LWKQqvJNuc&callback=initMap"></script>

</body>
</html>
