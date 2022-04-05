<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

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



        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    </body>
</html>
