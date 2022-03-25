<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data sheet</title>
</head>
<body>
    

    <div>
        <p>From home page</p>
        @include('header')
    </div>

    {{-- <div>
        @guest
            login 
        @else 
            profa-flip-vertical
        @endguest
    </div>

    <div>
        @If (Auth::check())
            Dashboard
        @else 
            register
        @endif
    </div> --}}

    {{-- <div>
        @env('staging','production')
            'your applicaiton runs in staging mode';
        @endenv
    </div> --}}

    {{-- @sectionMessing('navigation')
        <div>
            <h3>this is messing secton</h3>
        
        </div>
    @else 
        <div>
            <p>this is section</p>
        </div>
    @endif --}}



    <h1>This is form submit page.</h1>

    <table border="1"> 
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>

        <tr>
            <td> {{ $request->name }}</td>
            <td> {{ $request->email }}</td>
            <td> {{ $request->phone }}</td>
            
        </tr>
    </table>
  




    {{-- <div class="container">
        Hello, {{ $request->name}}
    </div> --}}

    {{-- @switch($request->name)
        @case('zubair')
            Hello, {{ $request->name}}.
            <strong>i know you.</strong>
            @break
        @default
            <strong>You are unknown.</strong>
    @endswitch --}}



    {{-- <p>Find an URL without Querry</p>
    {{ url()->current()}} --}}

    {{-- <p>Find an URL with Querry</p>
    {{ url()->full()}} --}}
 
    
    {{-- <p>Get previous URL</p>
    {{ url()->previous()}} --}}


    {{-- //__view session data__// --}}
    @if(session())

        <div style="color:black;">

            {{ session('data.name') }}

        </div>

    @endif
</body>
</html>