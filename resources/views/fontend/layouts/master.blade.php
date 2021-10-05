<!DOCTYPE html>
<html lang="en">
  	<head>
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<title>@yield('title')</title>
		<link rel="shortcut icon" type="png" href="{{asset('A.png')}}"/>
    	<meta content="width=device-width, initial-scale=1.0" name="viewport">
    	<meta content="@yield('meta_keywords')" name="keywords">
    	<meta content="@yield('meta_description')" name="description">
   		@include('fontend.layouts.partials.stylesheet')
  	</head>
  	<body>
  		@include('fontend.layouts.manu')

  		@yield('content')

  		@include('fontend.layouts.footer')

  		@include('fontend.layouts.partials.script')
	</body>
</html>