<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layout.head1')

<body>

@include('layout.navbar')
@include('layout.sidebar')
@yield('contenu')

@include('layout.script')

</body>
</html>
