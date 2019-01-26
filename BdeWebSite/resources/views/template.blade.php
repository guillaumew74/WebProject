<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.head')
@include('layout.head2')

<body>

@include('layout.navbar')
@include('layout.sidebar')
@yield('contenu')
@include('cookieConsent::index')
@include('layout.footer')
@include('layout.script')

</body>
</html>
