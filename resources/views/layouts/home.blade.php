<!DOCTYPE html>
<html lang="en">
<head>
@yield('meta')
@yield('styles')
</head>
    <body>
    <!-- <div id="preloader">
        <img class="preloader-image" width="60" src="assets/img/preloader-logo.png" alt="preloader" />
    </div> -->
    @yield('header')
    @yield('content')
    @yield('footer')
    @yield('scripts')
    </body>
</html>