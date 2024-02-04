@include('layouts.header')

<body>
    <script src="{{ asset('admin/assets/static/js/initTheme.js') }}"></script>
    <div id="app">
        @include('layouts.sidebar')
        <div id="main">
            @yield('content')



            @include('layouts.footer')
        </div>
    </div>
    <script src="{{ asset('admin/assets/static/js/components/dark.js') }}"></script>
    <script src="{{ asset('admin/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>


    <script src="{{ asset('admin/assets/compiled/js/app.js') }}"></script>
    <script src="{{ asset('admin/assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/static/js/pages/dashboard.js') }}"></script>
    <script src="{{ asset('admin/assets/extensions/quill/quill.min.js') }}"></script>
    <script src="{{ asset('admin/assets/static/js/pages/quill.js') }}"></script>

    {{-- DATATABLES --}}
    <script src="{{ asset('admin/assets/extensions/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extensions/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extensions/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('admin/assets/static/js/pages/datatables.js') }}"></script>


    <script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-1.13.8/r-2.5.0/datatables.min.js"></script>
</body>

</html>
