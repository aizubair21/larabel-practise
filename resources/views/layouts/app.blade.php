<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        {{-- bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

        {{-- fontawesoem --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="{{ asset('css/fontawesome-free-5.15.4-web/css/all.min.css') }}" rel="stylesheet" type="text/css" >
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    </head>
    <body class="font-sans antialiased mt-20">
        @guest
            <div class="container card">
                <div class="row">
                    <div class="col-3 d-flex align-items-center">
                        coderbees
                    </div>

                    <div class="col-8">
                        <ul class="d-flex justify-content-end align-items-center mb-0 p-2">
                           <li class="nav-item" style="list-style-type:none">
                               <a class="nav-link" href="{{ route('login') }}"> Login</a>
                           </li>

                           <li class="nav-item" style="list-style-type: none"> 
                               <a class="nav-link" href="{{ route('register')}}">Register</a>
                           </li>
                        </ul>
                    </div>
                </div>
            </div>
        @else 
            @include('navigations')
        @endguest

        @yield('content')


        
        <script type="text/javascript" src="{{ asset('css/fontawesome-free-5.15.4-web/js/all.min.js') }}"></script>
        {{-- <script type="text/javascript" src="{{ asset('css/fontawesome-free-5.15.4-web/.min.js') }}"></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    </body>
</html>
