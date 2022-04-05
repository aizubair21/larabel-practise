<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Contact</title>

</head>
<body>

    @include('navigations')
    <div class="container">

        <div class="row" style="margin-top: 20px">
            <div class="col-3"></div>
            <div class="col-4">
                <div class="card">
                    @if (session('result'))
                        <p class="alert alert-success">{{ session('main')}} > hash to > {{session('result')}}</p>
                    @elseif (session('has_error'))
                        <strong class="alert alert-danger">{{ session("has_error") }}</strong>
                    @endif
                <div class="card-body">
                    <div class="text text-info">Now, You can human unreadable anything by hash.</div>
                    <br><br>
                    
                    <form action="{{ route('test.form.submit')}}" method="post">
                        @csrf
                        <br><br>
                
                        <div>
                            <input type="password" class="input form-control form-input" name="password" id="password" placeholder="Your Hidden Number :">
                        </div><br>

                        <input class="btn btn-primary form-button" type="submit" value="Try to Hash">
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>
