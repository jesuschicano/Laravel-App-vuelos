<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>App Vuelos | @yield('title')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h1>App Vuelos</h1>
        <h2>Welcome to the awesome app made with Laravel</h2>
      </div>
      <div class="row">
        <nav class="navbar">
          <ul>
            <li><a href="/insertar">Insertar Vuelo</a></li>
          </ul>
        </nav>
      </div>
      <hr>
      @yield('content')
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </body>
</html>
