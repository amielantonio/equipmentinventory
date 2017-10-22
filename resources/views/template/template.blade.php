@include('template.header')


<main class="app">
    @include('template.sidebar')
    @yield('page-content')
</main>


@include('template.footer')
