@extends('layouts.master')

@section('title')
    Registered Roles | Edit
@endsection


@section('content')
    <div class="container">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Role for Registered User.</h3>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                </div>
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-6">
                            <form action="/role-register-update/{{ $user->id }}" method="POST">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="username" class="form-control" value="{{$user->name}}">
                                </div>
                                <div class="form-group">
                                    <label>Give Role</label>
                                    <select name="usertype" class="form-control">
                                        <option selected disabled>Give role</option>
                                        <option>Admin</option>
                                        <option>Vendor</option>
                                        <option>None</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-success">Update</button>
                                <a href="/role-register" class="btn btn-danger">Cancle</a>
                            </form>      
                       </div>
                   </div>
                </div>

            </div>

        </div>
    </div>
@endsection


@section('scripts')

@endsection
