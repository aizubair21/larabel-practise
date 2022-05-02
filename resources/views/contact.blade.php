@extends('../layouts.app')
@section('content')
<div id="main" class="row">
    <div class=""> </div>
     <div class="container col-6" >
        <div class="card">
            <div class="card-body">
                <p class="alert alert-info"> See Your Contact </p>
            </div>
            <div>
                <!-- Button trigger modal -->
                <button style="float: right" type="button" id="modalButton" class="btn btn-primary radious-circle mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-toggle="tooltip" data-bs-placement="top" title="Add contact">
                    <i class="fas fa-circle-plus"></i>
                </button>
            </div>
        </div>
        <pre>
			{{-- {{ print_r($current_user_id)}} --}}
        </pre>

        <div class="card">
           
            @if (session('success'))
                <div class="w-100 alert alert-success alert-dismissible fade show" role="alert">
                    <strong >{{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
               
            <div class="card-bdoy">
                <table table-border="1" class="table table-striped table-hover table-responsive">
                    <style>
                    
                        td {
                            height: auto;
                            line-height: 30px;
                            text-align: left;
                            padding: 0; 
                        }
                        thead {
                            background-color: rgb(31, 168, 100);
                            color: white;
                            border: none;
                        }
                        th:first-child {
                            background-color: gray;
                        }
                    </style>
                    <thead>
                        <tr>
                            <th>SL No</th>
                            <th>U Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Group</th>
                            <th>Address</th>
                            <th style="width:20px;">Operation</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @foreach($contact as $key=>$users)
                            <tr>
                                <td>{{ $users->id }}</td>
                                <td> {{ $users->user_id }}</td>
                                <td> {{ $users->first_name . " " . $users->last_name }}</td>
                                <td> {{ $users->email }}</td>
                                <td> {{ $users->phone }}</td>
                                <td> {{ $users->group }}</td>
                                <td> {{ $users->address }}</td>
                                <td class="d-flex justify-content-between">  
                                    <button class="text text-danger border-0 bg-none" data-bs-toggle="tooltip" data-bs-placement="top" title="delete contact">
                                        <a href="{{ route('contact.delete',$users->id) }}"><i class="fas fa-trash text-danger"></i></a>
                                    </button>
                                    <span>||</span>
                                    <button id="modalButton" class="text text-primary border-0 bg-none" data-bs-toggle="modal" data-bs-target="#updateModal" data-bs-toggle="tooltip" data-bs-placement="top" title="edit contact">
                                        <a href="{{ route('contact.update', $users->id) }}"><i class="fas fa-pen text-primary "></i></a>
                                    </button>
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    {{ $contact->onEachSide(5)->links() }}
            </div>
        </div>

        
        <!--Add New Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Contact</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('contact.add')}}" method="post">
                    <div class="modal-body">
                        @csrf
                        <div>
                            <label for="first_name">First Name :</label>
                            <input type="text" name="first_name" id="first_name" placeholder="John" class="form-control form-input @error("first_name") is_invalid @enderror" value="{{ old("first_name") }}">
                            @error('first_name')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        
                        <div>
                            <label for="last_name">Last Name :</label>
                            <input type="text" name="last_name" id="last_name" placeholder="Doe" class="form-control form-input @error("last_name") is_invalid @enderror" value="{{ old("last_name") }}">
                            @error('last_name')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div>
                            <label for="phone">Phone :</label>
                            <input type="number" name="phone" id="phone" placeholder="01234565789" maxlength="11" class="form-control form-input @error("phone") is_invalid @enderror" value="{{ old("phone") }}">
                            @error('phone')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div>
                            <label for="email">Email :</label>
                            <input type="emali" name="email" id="email" placeholder="Email@example.com" class="form-control form-input @error("email") is_invalid @enderror" value="{{ old("email") }}">
                            @error('email')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>
                        <div>
                            <label for="address">Address :</label>
                            <input type="emali" name="address" id="address" placeholder="lorem ipsum can do.." class="form-control form-input @error("address") is_invalid @enderror" value="{{ old("address") }}">
                            @error('address')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>



                        <div>
                            <label for="group">Group :</label>
                            <select name="group" id="group" class="form-control">
                                <option value="">Select Your Group</option>
                                <option value="Home">Home</option>
                                <option value="Favourite">Favourite</option>
                                <option value="Family">Family</option>
                                <option value="Classmates">Classmates</option>
                                <option value="Word Station">Work Station</option>
                                <option value="VIP">VIP</option>
                                <option value="Friend">Friend</option>
                                <option value="Pe">Personal</option>
                            </select>
                            @error('group')
                                <strong class="text text-danger">{{ $message }}</strong>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Add">
                    </div> 
                </form>
            </div>
            </div>
        </div>


       


    </div>  
</div>
     
@endsection