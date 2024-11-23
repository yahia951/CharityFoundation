<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <link rel="icon" type="image/png" href="{{ asset('uploads/favicon.png') }}">

    <title>User Panel</title>

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @include('user.layouts.styles')

    @include('user.layouts.scripts')
</head>

<body>
<div id="app">
    <div class="main-wrapper">

       
            @include('user.layouts.nav')
            @include('user.layouts.sidebar')
       

        @yield('main_content')

    </div>
</div>

@include('user.layouts.scripts-footer')
</body>
</html>