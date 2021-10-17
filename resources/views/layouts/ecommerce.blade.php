<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Shop Homepage - Demo VueJs</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Bootstrap icons-->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    @stack('scripts')
</head>
<body>
<div id="app">
    <!-- Navigation-->
    <main-menu></main-menu>
    <!-- Header-->
    <header class="container">
        <div class="row">
            <div class="text-center col-12">
                <img src="{{asset('assets/banner.png')}}" alt="Banner" class="img-fluid">
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

            </div>
        </div>
    </section>
    <main class="py-4">
        @yield('content')
    </main>

    <!-- Footer-->
    <footer-wrap></footer-wrap>
</div>
</body>
</html>
