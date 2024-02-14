<!DOCTYPE html>
<html lang="ru" xmlns:og="http://ogp.me/ns#">
<head>
    @include('includes.head')
    @include('includes.metric')
</head>
<body>

    @include('includes.header')

        @yield('content')

{{--    @include('includes.footer')--}}

    @include('includes.foot')


</body>
</html>
