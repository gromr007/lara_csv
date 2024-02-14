
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />  <!-- icon.svg images/favicon.png-->
    <link rel="alternate icon" href="/favicon.svg" type="image/x-icon" />

    <link rel="stylesheet" href="/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="/css/ie9.css" /><![endif]-->

    <meta name="csrf-token" content="{{ csrf_token() }}">
