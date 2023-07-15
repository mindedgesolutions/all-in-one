@include('layouts.auth-header-links')

<body class="d-flex flex-column">
    <script src="{{ asset('theme') }}/dist/js/demo-theme.min.js?1684106062"></script>

    @yield('content')

    @stack('modals')

    @include('layouts.auth-footer-links')

    <script>
        window.addEventListener('open-notification-modal', event => {
            $('#' + event.detail.id).modal('show');
        });
        
        window.addEventListener('form-reset', event => {
            Livewire.emit('resetFormFields');
            $('#' + event.detail.id).modal('hide');
        });
        
        window.addEventListener('modal-close-only', event => {
            $('#' + event.detail.id).modal('hide');
        });
    </script>
</body>

</html>
