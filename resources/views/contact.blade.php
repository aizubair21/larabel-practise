<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>form</title>
</head>
<body>

    {{-- //__back to previous page by url gerenation__// --}}
    {{-- @include('previous') --}}
    {{-- <pre>
        {!! print_r($sata = $request->session()->all() !!}
    </pre> --}}

    <h1 class=" text-success">This is contact page. If you are a register user. you can contact with us.</h1>


    

    {{-- take a session data by session global method --}}
    {{-- @If(session())
    <pre>
        {!!
            print_r($sata = session('data.email'));
        !!}
    </pre>    
    @endif --}}

        
    

    {{-- see alll error from erro handeler method --}}
    {{-- @if ($errors->any())
        <div class="text text-denger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action=" {{ route('form.submit') }}" method="POST">

        @csrf
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="card ">
                    <div class="card-body" >
                    {{-- //__push messaages__// --}}
                        @if (session('success_session'))
                            <div class="text-success">{{ session('success_session') }}</div>
                        @endif

                        <div>
                            <div>
                                <input type="text" name="name" id="name" placeholder="Your name" autocomplete="off" autofocus class=" @error('name') is-invalid @enderror form-control" value="{{ old('name') }}">
                            </div>
                            <div>
                                @error ('name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div><br>
                        {{-- @if (old('name'))
                            <p>{{ old('name')}} is not correct.</p>
                        @endif --}}
                        <div>
                            <input type="text" name="email" id="email" class=" @error ('email') is-invalid @enderror form-control"  placeholder="Your email" value="{{ old('email') }}">
                            <div>
                                @error ('email')
                                    <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                            {{-- this session alert messaage comes from usermiddleware if emal no correct with given --}}
                            {{ $err_alrt = ""}}
                            @If (session('alrt') && session('alrt')!= "")
                                <div class="text text-denger">
                                    {{ $err_alrt = session('alrt') }}
                                </div>
                            @endif
                        </div><br>

                        <div>
                            <input type="number" name="phone" id="phone" placeholder="Your phon number" class="@error ('phone') is-invalid @enderror form-control"  value="{{ old('phone') }}" >
                            <div>
                                @error ('phone')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div><br>

                        <div>
                            <input type="text" name="info" id="info" placeholder="Write abut yourself.." class="@error ('info') is-invalid @enderror form-control"  value="{{ old('info') }}" >
                            <div>
                                @error ('info')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                            </div>
                        </div><br>

                        {{-- <input type="text" name="" id="" value=" {{ old('email') }}"> --}}
                        <input type="hidden" name="userRoll" value="admin">

                        <input class="btn btn-primary" type="submit" value="submit">
                    </div>
                </div>
                
            </div>
            <div class="col-lg-4"></div>
        </div>
       

    </form>

    {{--Bootstrap not work preperlly 
        <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div> --}}


      {{-- //<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> --}}
</body>