@extends('../layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card shadow-lg">
                <div class="w-100 bg-primary text-white p-5 text-25 text-center" style="font-weight:800; font-size:20px;">
                    Password Reset
                </div>
                <div class="card-body">
                    <div class=" font-weight-bold">
                        @if(session('status'))
                            <p class="w-100 p-3 alert alert-success">{{session('status')}}</p>
                        @else 
                            <p style="text-align:justify" class="alert alert-info">Forget your password ? No problem. Just let us know your email address and we will send you a password reset link.</p>
                        @endif
                        
                    </div>

                    <form action="{{route('password.email') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="form-email pb-2">Email :</label>
                            <input type="email" class="form-input form-control @error('email') is-invalid @enderror" required name="email" id="email" placeholder="example@abc.xyz">
                            @error ('email')
                                <strong class="text text-danger">{{ $message }}</st>
                            @enderror
                        </div>
                        <br>
                        <div class="w-100 d-flex justify-content-between align-items-center">
                            <div>
                                <a class="form btn btn-primary" href="{{route('login')}}"> Log in </a>
                            </div>
                            <button class="btn btn-primary form-controll">Give Password Reset Link</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection