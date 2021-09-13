@extends('layouts.master')

@section('title')
    Dashboard | All Clients
@endsection

@section('subtitle')
    All Clients
@endsection


@section('content')
    
<div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Service Logs</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      #
                    </th>
                    <th>
                      Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Phone
                    </th>
                    <th>
                      Product
                    </th>
                    <th>
                      Cost price
                    </th>
                    <th>
                      Actual Price
                    </th>
                    <th>
                      Profit
                    </th>
                    <th>
                     Status
                    </th>
                    <th>
                      Date
                     </th>
                  </thead>
                  <tbody>
                    @foreach($clients as $client)
                    <tr>
                      <td>{{$client->id}}</td>
                      <td>{{$client->name}}</td>
                      <td>{{$client->email}}</td>
                      <td>{{$client->phone}}</td>
                      <td>{{$client->product_purchased}}</td>
                      <td>{{number_format($client->cost_price, 2)}}</td>
                      <td>{{number_format($client->actual_price, 2)}}</td>
                      <td>{{number_format($client->profit, 2)}}</td>
                      <td>{{$client->status}}</td>
                      <td>{{$client->created_at->toDateString()}}</td>
                      <td>
                          <a href="/clients/{{ $client->id }}" class="btn btn-success">Edit</a>
                      </td>
                      <td>
                        <form action="/photos/{{ $client->id }}" method="POST">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
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
      </div>

@endsection



@section('scripts')
@endsection