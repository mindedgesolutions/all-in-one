@include('layouts.header-links')

<body>
<script src="{{ asset('theme') }}/dist/js/demo-theme.min.js?1674944402"></script>
<div class="page">

@include('layouts.sidebar')

@include('layouts.top-nav')

<div class="page-wrapper">

@yield('content')

@include('layouts.footer')