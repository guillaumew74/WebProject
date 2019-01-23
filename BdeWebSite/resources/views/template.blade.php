<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.head')

<body>

@include('layout.navbar')
@include('layout.sidebar')
@yield('contenu')
@include('cookieConsent::index')
@include('layout.footer')
@include('layout.script')

</body>
</html>
