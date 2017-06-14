<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Http Client Grab Testing</title>
    <!-- Latest compiled and minified CSS & JS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  	<script src="//code.jquery.com/jquery.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="page-header">
      <a href="{{url('/')}}"><h1>Grab <small>Http Client Testing</small></h1></a>
    </div>

    @include('components.success')

    <div class="container-fluid">
      @yield('content')
    </div>
    
  </body>
</html>
