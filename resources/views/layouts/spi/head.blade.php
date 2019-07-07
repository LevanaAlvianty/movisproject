<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('css')
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/vali_admin/docs/css/main.css')}}">

    <!-- Pretty Checkbox CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/css/pretty-checkbox.min.css')}}">

    <!-- Autocomplete-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/vali_admin/plugins/jqueryui/jquery-ui.min.css')}}">
    
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('/vali_admin/plugins/font-awesome/css/font-awesome.min.css')}}">

    <!-- Toastr-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">

    <!-- Select2 -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/select2-bootstrap.min.css')}}">
  </head>