<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Blog Home - Learning Laravel</title>

        <link rel="stylesheet" href="/css/bootstrap.min.css">

    </head>
    <body>

        @include('layouts.nav')

            <div class="container">

                <div class="row">

                    @yield('content')

                    <!-- Sidebar Widgets Column -->
                    <div class="col-md-4">

                        @include('layouts.sidebarCats')

                        @include('layouts.sidebarInfo')
                    
                    </div>

                </div>

            </div>

        @include('layouts.footer')

        @yield('footer')
    </body>
</html>
