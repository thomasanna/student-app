<!DOCTYPE html>
<html lang=en>
<head>
    <base href>
    <base href="{{ url('/') }}">
    <meta charset="utf-8"/>
    <title>{{ env('APP_NAME') }} Admin | @yield('title') </title>
    <meta name=description content="{{ env('APP_NAME') }} Admin Panel"/>
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel=canonical href="{{ url()->current() }}"/>
    <link type="image/x-icon" rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    @include('layouts.general_css')
    @stack('page-css')
    @stack('page-styles')
</head>
<body id=kt_body
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading aside-minimize">
<div class="d-flex flex-column flex-root">
    <div class="d-flex flex-row flex-column-fluid page">
        @include('layouts.sidebar')
        <div class="d-flex flex-column flex-row-fluid wrapper" id=kt_wrapper>
            @include('layouts.header')
            @yield('content')
        </div>
    </div>
</div>
@include('layouts.footer')
@include('layouts.general_js')
@stack('page-js')
@stack('page-scripts')
<script src="{{ asset('js/backend/ajax-crud.js') }}"></script>
</body>
</html>
