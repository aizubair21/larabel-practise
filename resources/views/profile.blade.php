<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Profile - customize you profile</title>
</head>


<body>

    @include('navigations')

    <div class="container">
        <div class="row p-5 ">
            <div class="col-6">
                image
            </div>
            <div class="col-6">
                <div class="card">
                    <div class="w-100 bg-primary text-white p-3 text-align-center font-weight-bold">
                        <h3>About You</h3>
                    </div>
                    <div class="card-body">
                        <style>
                            label {
                                width:100px;
                            }
                            input {
                                background-color: transparent;
                                border: none;
                                outline: none;
                            }
                        </style>
                        <div class="name"></div>
                            <input type="text" class="" name="Name" id="Name" disabled value="{{ $users->name }}">
                        </div>

                        <div class="user_name">
                            <input type="text" name="user_name" id="user_name" disabled value="{{ $users->user_name }}">
                        </div>

                        <div class="About">
                            <input type="text" disabled name="about" id="about" value=" {{ $profiles->about}}">
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
    </div>



    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>

    {{-- custom script  --}}
    <script>
        // var collection =   '';
        // document.getElementsByTagName("input")[2].removeAttribute('disabled');
        // console.log( collection = document.getElementsByTagName("input")[2]..disabled);
    </script>
</body>
</html>