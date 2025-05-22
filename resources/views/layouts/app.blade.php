<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>my-Task</title>

        <!-- project css file  -->
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/responsive.dataTables.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/plugins/datatables/dataTables.bootstrap5.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/plugins/nestable/jquery-nestable.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/plugins/fullcalendar/main.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/plugins/prism/prism.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/my-task.style.min.css') }}">
    </head>

    <body id="mytask-layout" class="theme-indigo">
            @include('includes.sidebar')
            <div class="main px-lg-4 px-md-4">
                @include('includes.header')
                @yield('content')
            </div>
    </body>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Sidebar mini toggle
            document.querySelectorAll('.sidebar-mini-btn').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    const sidebar = document.querySelector('.sidebar');
                    sidebar.classList.toggle('sidebar-mini');
                });
            });

            // Collapse toggle for menu items
            document.querySelectorAll('.m-link[data-bs-toggle="collapse"]').forEach(function (link) {
                link.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = link.getAttribute('data-bs-target');
                    const target = document.querySelector(targetId);

                    if (!target) return;

                    const isShown = target.classList.contains('show');

                    // Close all others
                    document.querySelectorAll('.sub-menu.show').forEach(function (menu) {
                        menu.classList.remove('show');
                        menu.closest('li').classList.add('collapsed');
                    });

                    if (isShown) {
                        target.classList.remove('show');
                        link.closest('li').classList.add('collapsed');
                    } else {
                        target.classList.add('show');
                        link.closest('li').classList.remove('collapsed');
                    }
                });
            });

            // Highlight active menu items on load
            document.querySelectorAll('.ms-link.active').forEach(function (activeLink) {
                const subMenu = activeLink.closest('.sub-menu');
                if (subMenu) {
                    subMenu.classList.add('show');
                    const parentLi = subMenu.closest('li');
                    if (parentLi) parentLi.classList.remove('collapsed');
                }
            });
        });
    </script>

    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/fullcalendar/main.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/prism/prism.js') }}"></script>
    @stack('before-scripts')

    @stack('after-scripts')
</html>
