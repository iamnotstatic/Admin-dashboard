@extends('layouts.master')

@section('title')
    Dashboard | Create Client
@endsection

@section('subtitle')
  Create Client
@endsection


@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-center pb-3">Create Client</h4>
        </div>
        <div class="card-body pb-5" style="padding: 0% 15% 0 15%">
          <div>
            <form action="{{ route('clients.store') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Firstname</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Firstname">
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Lastname</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Lastname">
                  </div>
                </div>

                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Email address</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Email address">
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Product Purchased</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Product Purchased">
                  </div>
                </div>

                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Cost price</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Cost price">
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Actual price</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Actual price">
                  </div>
                </div>

                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Profit</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Profit">
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Status</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Status">
                  </div>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-info btn-fill">Create Client</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection



@section('scripts')
@endsection