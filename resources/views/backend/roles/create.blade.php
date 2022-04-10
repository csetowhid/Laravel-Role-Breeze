@extends('backend.layouts.app')
@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Create New Roles</h5>
        <form id="signupForm" class="col-md-10 mx-auto" method="post" action="{{route('roles.store')}}">
            @csrf
            <div class="form-group">
                <label for="firstname">Role name</label>
                <div>
                    <input type="text" class="form-control" id="firstname" name="name" placeholder="Enter Your Role" />
                </div>
            </div>
            <div class="form-group">
                <label for="firstname">Permissions</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="checkAll">
                    <label class="form-check-label">All</label>
                </div>
                <hr>
                @php $i = 1; @endphp
                @foreach ($permission_group as $group)
                    <div class="row">
                        <div class="col-md-3">
                            <label class="text-capitalize font-weight-bold">{{$group->group_name}}</label>
                        </div>
                        <div class="col-md-6">
                            @php
                            $permissions = \App\Models\User::getpermissions($group->group_name);
                            $j = 1;
                            @endphp
                            @foreach($permissions as $permission)
                  
                            <div class="position-relative form-check">
                                    <input type="checkbox" class="form-check-input" name="permissions[]" value="{{$permission->id}}"> 
                                    <label class="text-capitalize">{{$permission->name}}</label>
                            </div>
                            @php  $j++; @endphp
                            @endforeach
                            <br>
                        </div>
                    </div>
                @php  $i++; @endphp
                @endforeach
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
@push('js')
<script>
    $("#checkAll").click(function(){
             if($(this).is(':checked')){
                 // check all the checkbox
                 $('input[type=checkbox]').prop('checked', true);
             }else{
                 // un check all the checkbox
                 $('input[type=checkbox]').prop('checked', false);
             }
         });
</script>
@endpush