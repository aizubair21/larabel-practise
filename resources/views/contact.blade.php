@extends('../layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <p class="alert alert-info"> See Your Contact </p>
            </div>
        </div>
        <pre>
			{{-- {{ print_r($current_user_id)}} --}}
        </pre>
        <div class="card">
            <div class="card-bdoy">
                <table table-border="1" class="table table-stiped">
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Group</th>
                            <th>Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $users)
                            @if ($users->user_id == $current_user_id)
                            <tr>
                                <td> {{ $users->id  }}</td>
                                <td> {{ $users->first_name }}</td>
                                <td> {{ $users->email }}</td>
                                <td> {{ $users->phone }}</td>
                                <td> {{ $users->group }}</td>
                                <td> {{ $users->address }}</td>
                            </tr>
                            @endif
                        @endforeach 
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary radious-circle mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="tooltip" data-bs-placement="top" title="Add contact">
                <i class="fas fa-circle-plus p-2 "></i>
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>
    </div>    
@endsection