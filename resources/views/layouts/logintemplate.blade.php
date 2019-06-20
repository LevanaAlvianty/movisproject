<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('/vali_admin/docs/css/main.css')}}">
        <!-- Font-icon css-->
        <link rel="stylesheet" type="text/css" href="{{asset('/vali_admin/plugins/font-awesome/css/font-awesome.min.css')}}">
        <title>Login</title>
    </head>
    <body>
        @yield('content')

        <!-- Essential javascripts for application to work-->
        <script src="{{asset('/vali_admin/docs/js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('/vali_admin/docs/js/popper.min.js')}}"></script>
        <script src="{{asset('/vali_admin/docs/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('/vali_admin/docs/js/main.js')}}"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="{{asset('/vali_admin/docs/js/plugins/pace.min.js')}}"></script>
        <script type="text/javascript">
        // Login Page Flipbox control
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
        </script>
    </body>
</html>