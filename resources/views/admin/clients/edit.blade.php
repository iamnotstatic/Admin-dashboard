@extends('layouts.master')

@section('title')
    Dashboard | Edit Client
@endsection

@section('subtitle')
  Edit  Client
@endsection


@section('content')
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title text-center pb-3">Edit Client</h4>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
        @endif
        </div>
        <div class="card-body pb-5" style="padding: 0% 15% 0 15%">
          <div>
            <form action="{{ route('clients.update', ['id' => $client->id]) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
              <div class="row">
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Enter name" value="{{ $client->name }}">

                    @error('firstname')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" placeholder="Enter phone" value="{{ $client->phone }}">

                    @error('phone')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Email address</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Enter Email address" value="{{ $client->email }}">

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Product Purchased</label>
                    <input type="text" class="form-control @error('product_purchased') is-invalid @enderror" id="product_purchased" name="product_purchased" placeholder="Enter Product Purchased" value="{{ $client->product_purchased }}">

                    @error('product_purchased')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Cost price</label>
                    <input type="number" class="form-control @error('cost_price') is-invalid @enderror" id="cost_price" name="cost_price" placeholder="Enter Cost price" value="{{ $client->cost_price }}">

                    @error('cost_price')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Actual price</label>
                    <input type="number" class="form-control @error('actual_price') is-invalid @enderror" id="actual_price" name="actual_price" placeholder="Enter Actual price" value="{{ $client->actual_price }}">

                    @error('actual_price')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Profit</label>
                    <input type="number" class="form-control @error('profit') is-invalid @enderror" id="profit" name="profit" placeholder="Enter Profit" value="{{ $client->profit }}">

                    @error('profit')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6 pr-1">
                  <div class="form-group">
                    <label for="name">Status</label>
                    <input type="text" class="form-control @error('profit') is-invalid @enderror" id="status" name="status" placeholder="Enter Status" placeholder="Enter status" value="{{$client->status}}">

                    @error('status')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" class="btn btn-info btn-fill">Edit Client</button>
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