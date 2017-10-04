<!doctype html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Crypto Helper</title>
</head>
<body>
    <div class="container-fluid" style="padding:10px;" ng-view>

    </div>
</body>
<script type="text/javascript" src="{{ asset('js/angular.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/controllers.js')}}"></script>
</html>