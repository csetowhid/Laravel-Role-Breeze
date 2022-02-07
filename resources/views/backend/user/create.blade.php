@extends('backend.layouts.app')
@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Create New User</h5>
        <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('users.store')}}">
            @csrf
            <div class="form-group">
                <label for="firstname">Name</label>
                <div>
                    <input type="text" class="form-control" id="firstname" name="name" placeholder="Enter Your Name" />
                </div>
            </div>
            {{-- <div class="form-group">
                <label for="firstname">Permissions</label>
                <div>
                @foreach($permissions as $permission)
                <div class="position-relative form-check">
                    <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" name="permissions[]" value="{{$permission->id}}"> {{$permission->name}}
                    </label>
                </div>
                @endforeach
                </div>
            </div> --}}
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection