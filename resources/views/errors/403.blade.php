<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Not Authorized | {{ config('app.name') }}</title>
    <!-- CSS files -->
    <link href="{{ asset('theme') }}/dist/css/tabler.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/tabler-flags.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/tabler-payments.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet" />
    <link href="{{ asset('theme') }}/dist/css/demo.min.css?1674944402" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" border-top-wide border-primary d-flex flex-column">
    <script src="{{ asset('theme') }}/dist/js/demo-theme.min.js?1674944402"></script>
    <div class="page page-center">
        <div class="container-tight py-4">
            <div class="empty">
                <div class="empty-header">403</div>
                <p class="empty-title">Oops… Seems you are not authorized to access this page</p>
                <div class="empty-action">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">
                        <i class="ti ti-arrow-left fs-3 me-2"></i>
                        Take me home
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js?1674944402" defer></script>
    <script src="./dist/js/demo.min.js?1674944402" defer></script>
</body>

</html>
