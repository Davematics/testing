<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- <script defer src="https://cdn.tailwindcss.com"></script> --}}
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.1/dist/sweetalert2.all.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/app.js') }}"></script>
    {{-- <script defer src="https://cdn.tailwindcss.com"></script> --}}


<style>
.polygon {
    background-color: #F0E3DE;
    -webkit-clip-path: polygon(0 31%, 100% 67%, 100% 100%, 0% 100%);
clip-path: polygon(0 5%, 100% 62%, 100% 100%, 0% 100%);
}
</style>

@livewireStyles
</head>

<body>

@yield('content')


@livewireScripts
</body>
</html>
