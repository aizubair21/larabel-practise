<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>password reset</title>

</head>
<body> 
    @include('navigations')

    <div class="container">
       <div class="row">
           <div class="col-4"></div>
           <div class="col-4" style="margin-top: 20px;" >
                <div class="card">

                    <div class="w-100 p-3 bg-primary text-white" style="text-align: center; font-weight:bold; font-size:20px;">
                        Change Password
                    </div>
                    <div class="card-body">
                        @if(session('error'))
                            <div class="alert alert-warning alert-dismissible fade show w-100" role="alert">
                                <strong>{{session('error')}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success p-2 w-100"><strong  >{{session('success')}}</strong></div>
                        @else
                            <form action="{{route('changer_password')}}" method="post">
                                @csrf
                                <div>
                                    <label class="form-label" for="current_password">Current Password :</label>
                                    <input type="password" name="current_password" id="current_password" placeholder="Current Password" class="form-input form-control @error('current_password') is-invalid @enderror">
                                    @error('current_password')
                                        <strong class="text text-danger">{{ $message }}</strong>
                                    @enderror
                                </div>
                                <br>
                                <div>
                                    <label class="form-label" for="password">New Password :</label>
                                    <input type="password" name="new_password" id="password" placeholder="New Password" class="form-input form-control  @error('new_password') is-invalid @enderror">
                                    @error('new_password')
                                    <strong class="text text-danger">{{ $message }}</strong>
                                @enderror
                                </div>
                                <br>
                                <div>
                                    <label class="form-label" for="password-confirmation">Re-Type Password :</label>
                                    <input type="password" name="password_confirmation" id="password-confirmation" placeholder="Confirm Password" class="form-input form-control">
                                </div>
                                <br>
                                <input class="btn btn-primary" type="submit" value="Changer Password">
                            </form>
                        @endif
                    </div>
                </div>
           </div>
       </div>
    
    </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
