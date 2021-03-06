<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
    

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All User') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered table-striped">
                        <thead>
                            <th>Sl</th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                        </thead>
                        <tbody>
                                <tr>
                                    <td> {{  $user->id }}</td>
                                    <td> {{  $user->name }}</td>
                                    <td> {{  $user->user_name }}</td>
                                    <td> {{  $user->email }}</td>
                                </tr>
                        </tbody>
                    </table>
                    {{-- {{ $result }} --}}
                   
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <img src="../image/circle-user.png" alt="Image nai"> --}}
@endsection
</body>
</html>