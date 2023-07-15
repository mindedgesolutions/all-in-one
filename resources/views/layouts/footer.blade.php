<footer class="footer footer-transparent d-print-none">
    <div class="container-xl">
        <div class="row text-center align-items-center flex-row-reverse">
            <div class="col-lg-auto ms-lg-auto"></div>

            <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                    <li class="list-inline-item">
                        Copyright &copy; {{ date('Y') }}
                        <a href="javascript:void(0)" class="link-secondary">{{ config('app.name') }}</a>.
                        All rights reserved.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</div>
</div>

@livewireScripts

<!-- Libs JS -->
<!-- Tabler Core -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- Tabler Core -->
<script src="{{ asset('theme') }}/dist/js/tabler.min.js?1674944402" defer></script>
<script src="{{ asset('theme') }}/dist/js/demo.min.js?1674944402" defer></script>
</body>

</html>
