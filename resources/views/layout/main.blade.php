<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    @include('layout.partials.head')
    @include('layout.partials.scripts')
</head>
<body class="full-height">
    @include('layout.partials.nav')
    @yield('content')
    @include('layout.partials.footer')
</body>

</html>
