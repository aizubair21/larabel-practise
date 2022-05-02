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
        <div class="row">
            <div class="col-2"></div>
            <div class="col-6">
                <div class="card">
                    <div class="card-header">{{ __('Users Profile') }}</div>
                    <div class="card-body">
                        <table class="table table-stripped table-bordered">
                            <thead>
                                <tr>
                                    <th>Title </th>
                                    <th>About </th>
                                    <th>Phone </th>
                                    <th>Address </th>
                                </tr>
                            </thead>
                            <tbody>
                                <td>{{  $profile->title }}</td>
                                <td> {{ $profile->about }} </td>
                                <td> {{ $profile->phone }}</td>
                                <td> {{ $profile->address }}</td>
                            </tbody>
                       </table>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
        
    </div>



    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>