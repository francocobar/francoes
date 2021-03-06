<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>NgeKEEP</title>

    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Oswald&subset=cyrillic">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ url('css/ngekeep-style.css')}}" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    <script src=" {{ url('js/ngekeep-script.js') }}"></script>

    <script src="http://malsup.github.io/jquery.blockUI.js"></script>
    <style>
      body {
        font-family: 'Oswald';
      }
    </style>
  </head>
  <body>
      <div class="container">
        <!-- <h1 class="text-center">
        NgeKEEP!
        </h1> -->
        @yield('content')
      </div>
  </body>
</html>
