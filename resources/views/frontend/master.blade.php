<!DOCTYPE HTML>
<html>

@include('frontend.partils.head')

<body>

    @include('frontend.partils.header')

    <!-- END head -->

  @yield('content')

    @include('frontend.partils.footer')

    @include('frontend.partils.js')
</body>

</html>
