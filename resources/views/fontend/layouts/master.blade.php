<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<title>Blog with Protfolio</title>
    	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    	<meta content="" name="keywords">
    	<meta content="" name="description">
   		@include('fontend.layouts.partials.stylesheet')
  	</head>
  	<body>
  		@include('fontend.layouts.manu')

  		@yield('content')

  		@include('fontend.layouts.footer')

  		@include('fontend.layouts.partials.script')
	</body>
</html>