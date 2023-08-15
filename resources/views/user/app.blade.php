<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/user_all_page.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/bootstrap-5.1.3/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/fontawesome6.1.1/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('modules/toastify/toastify.css') }}">
    <title>@yield('title')</title>
    <title>Document</title>

</head>
<body>
    {{--  @include('user.layouts.header')  --}}
    {{--  @include('user.layouts.wave')  --}}
    @yield('userBody')
    {{--  @include('user.layouts.team')  --}}
    {{--  @include('user.layouts.footer')  --}}
    <script src="{{ asset('js/atrana.js') }}"></script>
    <script src="{{ asset('modules/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('modules/toastify/toastify.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
{{-- @include('layouts.scripts')  --}}

</html>
