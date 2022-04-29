@extends('layouts.app');
@section('content')
     {{-- Update Modal   --}}
    <div class="row" style="margin-top: 20px;">
        <div class="col-4"></div>
        <div class="col-4">
            <div class="card">
                <div class="w-100 p-4 bg-primary text-white" style="font-size: 20px;font-weight:bold">
                    Update Contact
                </div>
            
                <div class="card-body">
                    @if (session('success'))
                        <div class="d-flex justify-content-between align-items-center w-100 p-4">
                            <div class="alert alert-success w-100">
                                successfully updated
                                <div class="btn btn-info" style="float:right">
                                    <a href=" {{ route('contact') }}">All Contact</a>
                                </div>
                            </div>
                        
                        </div>
                    @else
                        @foreach($contact as $contacts)
                            <form action="{{ route('contact.updated', $contacts->id)}}" method="post">
                                <div class="modal-body">
                                    @csrf
                                    <input type="hidden" name="update_id" id="update_id" value=" {{ $contacts->id }} ">
                                    <div>
                                        <label for="update_first_name">First Name :</label>
                                        <input type="text" name="first_name" id="update_first_name" placeholder="John" class="form-control form-input" value="{{  $contacts->first_name }}">
                                        
                                    </div>
                                    
                                    <div>
                                        <label for="update_last_name">Last Name :</label>
                                        <input type="text" name="last_name" id="update_last_name" placeholder="Doe" class="form-control form-input " value="{{  $contacts->last_name}}">
                                        
                                    </div>
                                    <div>
                                        <label for="update_phone">Phone :</label>
                                        <input type="number" name="phone" id="update_phone" placeholder="01234565789" maxlength="11" class="form-control form-input " value="{{ $contacts->phone}}">
                                        @error('phone')
                                            <strong class="text text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="update_email">Email :</label>
                                        <input type="emali" name="email" id="update_email" placeholder="Email@example.com" class="form-control form-input @error('email') is-invalid  @enderror " value="{{  $contacts->email}}">
                                        @error('email')
                                            <strong class="text text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="update_address">Address :</label>
                                        <input type="emali" name="address" id="update_address" placeholder="lorem ipsum can do.." class="form-control form-input " value="{{  $contacts->address}}">
                        
                                    </div>
                        
                                    <div>
                                        <label for="update_group">Group :</label>
                                        <select name="group" id="update_group" class="form-control" value="Home">
                                            <option value="">Select Your Group</option>
                                            <option value="Home">Home</option>
                                            <option value="Favourite">Favourite</option>
                                            <option value="Family">Family</option>
                                            <option value="Classsmates">Classmates</option>
                                            <option value="Work Station">Work Station</option>
                                            <option value="ViP">VIP</option>
                                            <option value="Friend">Friend</option>
                                            <option value="Personal">Personal</option>
                                        </select>
                                        @error('group')
                                            <strong class="text text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                        
                                </div>
                                <div class="modal-footer d-block">
                                    <a class="btn btn-danger" href="{{ route('contact') }}">Close</a>
                                    <input type="submit" class="btn btn-primary" value="Update">
                                </div> 
                            </form>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>

    
@endsection