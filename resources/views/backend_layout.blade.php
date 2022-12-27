    @include('backend_partials.backend_header')

    @include('backend_partials.backend_topbar')

     @include('backend_partials.backend_sidebar')

<main role="main" class="main-content">

    @yield('main_content')

    @include('backend_partials.backend_notification')

    @include('backend_partials.backend_shortcut')

    @include('backend_partials.backend_footer')
