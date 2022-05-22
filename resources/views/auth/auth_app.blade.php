<!DOCTYPE html>
<html lang=en>
<head>
    <base href="{{ url('/') }}">
    <meta charset="utf-8"/>
    <title>Login | {{ env('APP_NAME') }}</title>
    <meta name=description content="Login page {{ env('APP_NAME') }}"/>
    <meta name=viewport content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel=canonical href="{{ url('/') }}"/>
    <link rel=stylesheet href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <link href="{{ asset('css/backend/pages/login.min.css') }}" rel=stylesheet type="text/css"/>
    <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel=stylesheet type="text/css"/>
    <link href="{{ asset('plugins/custom/prismjs/prismjs.bundle.css') }}" rel=stylesheet type="text/css"/>
    <link href="{{ asset('css/backend/style.bundle.css') }}" rel=stylesheet type="text/css"/>
   <!--  <link href="{{ asset('css/custom-style.css') }}" rel=stylesheet type="text/css"/> -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}"/>
</head>
<body id=kt_body
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<div class="d-flex flex-column flex-root">
    <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id=kt_login>
        <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10"
             style="background-image:url({{asset('images/background.jpg')}})">
            <div class="d-flex flex-row-fluid flex-column justify-content-between">
                <a href="{{ url('admin/login') }}" class="flex-column-auto mt-5 pb-lg-0 pb-10">
                    <img src="{{ asset('images/logo.png') }}" class=max-h-70px alt=""/>
                </a>
                <div class="flex-column-fluid d-flex flex-column justify-content-center">
                    <h3 class="font-size-h1 mb-5 text-white">Welcome</h3>
                    <p class="font-weight-lighter text-white opacity-80">
                        
                    </p>
                </div>
                <div class="d-none flex-column-auto d-lg-flex justify-content-between mt-10">
                    <div class="opacity-70 font-weight-bold text-white">
                        &copy; 2022 Basic
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
            <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                @yield('content')
            </div>
            <div
                class="d-flex d-lg-none flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">
                    &copy; 2020 Basic
                </div>
            </div>
        </div>
    </div>
</div>
<script>var KTAppSettings = {
        breakpoints: {sm: 576, md: 768, lg: 992, xl: 1200, xxl: 1400},
        colors: {
            theme: {
                base: {
                    white: "#ffffff",
                    primary: "#3699FF",
                    secondary: "#E5EAEE",
                    success: "#1BC5BD",
                    info: "#8950FC",
                    warning: "#FFA800",
                    danger: "#F64E60",
                    light: "#E4E6EF",
                    dark: "#181C32"
                },
                light: {
                    white: "#ffffff",
                    primary: "#E1F0FF",
                    secondary: "#EBEDF3",
                    success: "#C9F7F5",
                    info: "#EEE5FF",
                    warning: "#FFF4DE",
                    danger: "#FFE2E5",
                    light: "#F3F6F9",
                    dark: "#D6D6E0"
                },
                inverse: {
                    white: "#ffffff",
                    primary: "#ffffff",
                    secondary: "#3F4254",
                    success: "#ffffff",
                    info: "#ffffff",
                    warning: "#ffffff",
                    danger: "#ffffff",
                    light: "#464E5F",
                    dark: "#ffffff"
                }
            },
            gray: {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };</script>
<script src="{{ asset('plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('js/backend/scripts.bundle.js') }}"></script>
</body>
</html>
