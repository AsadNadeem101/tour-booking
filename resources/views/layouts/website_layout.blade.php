<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
    @yield('css')
    <!-- Styles -->
</head>
<body>
    <div id="app">
    <!-- header -->
      @include('partials.header')

        <main class="py-4">
            @yield('content')
        </main>
       <!-- Footer -->
       @include('partials.footer')
        <!-- Footer -->
    </div>
     @yield('js')
</body>
</html>
