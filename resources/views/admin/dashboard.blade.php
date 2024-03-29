@extends('layouts.master')

@section('title')
    Dashboard | Admin Dashboard
@endsection


@section('subtitle')
    Admin Dashboard
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
                      Name
                    </th>
                    <th>
                      Email
                    </th>
                    <th>
                      Phone
                    </th>
                    <th>
                      Product Purchased
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
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        Dakota Rice
                      </td>
                      <td>
                        Niger
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        $36,738
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                      <td>
                        Oud-Turnhout
                      </td>
                    </tr>
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