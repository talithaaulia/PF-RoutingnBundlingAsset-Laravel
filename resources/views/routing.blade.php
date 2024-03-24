<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>

        <div class="list-group list-group-numbered mt-4">
            {{-- 4.1 --}}
            <a href="{{ url('/basic_routing') }}" class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>
           {{-- 4.2 --}}
            <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
                View Route
            </a>
           {{-- 4.3 --}}
            <a href="{{ url('/controller_route') }}" class="list-group-item list-group-item-action">
                Controller Route
            </a>
            {{-- 4.4 --}}
            <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                Redirect Route
            </a>
            {{-- 4.5 --}}
            <a href="{{ url('/user/12345') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1
            </a>
            <a href="{{ url('/posts/01/comments/20') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 2
            </a>
            {{-- 4.6 --}}
            <a href="{{ url('/username') }}" class="list-group-item list-group-item-action">
                Route Parameter (Optional Parameter)
            </a>
            {{-- 4.7 --}}
            <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item list-group-item-action">
                Route With Regular Expression Constraints
            </a>
            {{-- 4.8 --}}
            <a href="{{ route('profileRouteName', ['profileId' => '123']) }}" class="list-group-item list-group-item-action">
                Named Route
            </a>
            {{-- 4.9 --}}
            <a href="{{ url('/route_priority/user') }}" class="list-group-item list-group-item-action">
                Route Priority
            </a>

            {{-- Tugas Bootstrap Clone --}}
            <a href="{{ url('/bs_clone') }}" class="list-group-item list-group-item-action">
                Bootstrap Clone
            </a>

            {{-- 4.10 --}}
            <a href="{{ url('/asdqwezxc') }}" class="list-group-item list-group-item-action">
                Fallback Routes
            </a>

            {{-- 4.11 --}}
            <h6 class="mt-4">Route Groups (Route Prefixes & Route Name Prefixes)</h6>
                <div class="list-group list-group-numbered mt-4">
                    <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                        Admin Dashboard
                    </a>
                    <a href="{{ route('admin.users') }}" class="list-group-item list-group-item-action">
                        Admin Users
                    </a>
                    <a href="{{ route('admin.items') }}" class="list-group-item list-group-item-action">
                        Admin Items
                    </a>
                </div>

        </div>

        {{-- Khusus kode program untuk Route Groups di sini --}}
    </div>
    @vite('resources/js/app.js')
</body>
</html>
