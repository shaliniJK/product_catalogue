<!doctype html>
<html lang="fr" >
<head>
    @include('partials.head')
</head>
<body>
    <div class="page">
        <div class="page-main">
            @include('partials.header')
            <div class="my-3 my-md-5">
                <div class="container">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @include('partials.scripts')
    @yield('scripts')
</body>
</html>
