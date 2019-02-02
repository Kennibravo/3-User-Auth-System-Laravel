<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

     <!-- Vector CSS -->
    <link href="{{ asset('plugins/vectormap/jquery-jvectormap-2.0.2.css') }} " rel="stylesheet"/>
     <!-- simplebar CSS-->
      {{-- <link href="{{ asset('plugins/simplebar/css/simplebar.css') }}" rel="stylesheet"/> --}}
      <!-- Bootstrap core CSS-->
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"/>
      <!-- animate CSS-->
      <link href="{{ asset('css/animate.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Icons CSS-->
      <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css"/>
      <!-- Sidebar CSS-->
      {{-- <link href="{{ asset('css/sidebar-menu.css') }}" rel="stylesheet"/> --}}
      <!-- Custom Style-->
      <link href="{{ asset('css/app-style.css') }}" rel="stylesheet"/>
</head>