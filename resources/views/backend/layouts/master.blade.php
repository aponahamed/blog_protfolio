<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
@include('backend.layouts.partials.stylesheet')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
@include('backend.layouts.manu')

@include('backend.layouts.leftsidebar')




@yield('content')



@include('backend.layouts.rightsidebar')
  @include('backend.layouts.footer')

</div>
<!-- ./wrapper -->
@include('backend.layouts.partials.script')
</body>
</html>