<!DOCTYPE html>
<html lang="en" ng-app>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <title>Angulara!</title>
    
    <!-- fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    
    <!-- stylesheets -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/tether.min.css">
    <link rel="stylesheet" href="/assets/sass/bobross.scss">
    <!--<link rel="stylesheet" href="/assets/sass/app.scss">-->
    <!--<link rel="stylesheet" href="/assets/sass/font-awesome/font-awesome.scss">-->
    <link rel="stylesheet" href="/assets/css/app.css">
</head>

<body>
    <header>
        <div class="container">
            @yield('header')
        </div>
    </header>
    
    <div class="container">
        @yield('content')
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="https://cdn.rawgit.com/twbs/bootstrap/v4-dev/dist/js/bootstrap.js"></script>
    <script src="/assets/js/tether.min.js"></script>
    <script src="/assets/js/app.js"></script>
</body>
    
</html>