@extends('layouts.master')

@section('title')
    Registere Roles


@section('content')
    
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"> Simple Table</h4>
              @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
          @endif
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>UserType</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->phone}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->usertype}}</td>
                      <td>
                          <a href="/role-edit/{{ $user->id }}" class="btn btn-primary">Edit</a>
                      </td>
                      <td>
                        <form action="" method="POST">
                          {{ csrf_field()}}
                          {{ method_field('')}}
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@endsection



@section('scripts')
@endsection