@extends('admin.layouts.app')

@section('header-title')
    <h6 class="text-white text-uppercase">Admin Dashboard</h6>
@endsection

@section('sidebar')

<nav class="col-md-2 d-none d-md-block bg-light sidebar">
  <div class="sidebar-sticky">

    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Reports</span>
        <a class="d-flex align-items-center text-muted" href="#">
            <span data-feather="plus-circle"></span>
        </a>
    </h6>

    <ul class="nav flex-column mb-2">
      <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home')}}">
          <span data-feather="home"></span>
            Identifications <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="{{ route('admin.contracts')}}">
          <span data-feather="bar-chart-2"></span>
          Contracts
        </a>
      </li>

    </ul>



    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
      <span>Manage Accounts</span>
      <a class="d-flex align-items-center text-muted" href="#">
        <span data-feather="plus-circle"></span>
      </a>
    </h6>
    <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('supervisors')}}">
            <span data-feather="layers"></span>
            View Supervisors
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('supervisor.create')}}">
            <span data-feather="plus-square"></span>
            Create Supervisor
            </a>
        </li>

    </ul>
  </div>
</nav>
@endsection


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <div class="card">
                <div class="card-header">
                    TOUCH POINT LICENSE AGREEMENT FOR THE USE OF GUICHET UNIQUE LIMITED’S
                        MULTIMODAL PLATFORM

                <a class="btn btn-primary btn-sm float-right" href="/contract/download/{{$contract->id}}">Download</a>
                </div>
                <div class="card-body logo-bg">


                    <table class="table table-sm">
                            <tbody>
                                <tr>
                                    <td>Name, First Name / Commercial Name: </td>
                                    <td>  {{ $contract->commercial_name}}</td>

                                </tr>



                                <tr>
                                    <td>Corporate name:  </td>
                                    <td>{{ $contract->corporate_name}}</td>
                                </tr>

                                <tr>
                                    <td>Name and position of the Company Contact representative </td>
                                    <td>{{ $contract->name_and_position_ccr}}</td>
                                </tr>

                                <tr>
                                    <td>Type and number of ID: </td>
                                    <td>{{ $contract->type_and_number_of_id}}</td>
                                </tr>
                                <tr>
                                    <td>Street and postal address of the institution (1) or head office </td>
                                    <td>   {{ $contract->address}}</td>
                                </tr>

                                <tr>
                                    <td>Legal Name of Business / Company </td>
                                    <td>   {{ $contract->business_name}}</td>
                                </tr>
                                <tr>
                                    <td>PIN Registration number</td>
                                    <td>   {{ $contract->pin_number}}</td>
                                </tr>
                                <tr>
                                        <td>Registration Number of Business / Company:</td>
                                        <td>   {{ $contract->reg_no_of_business}}</td>
                                </tr>

                                <tr>
                                        <td>Phone number:</td>
                                        <td>   {{ $contract->phone}}</td>
                                </tr>
                                <tr>
                                        <td>Email address of Business / Company:</td>
                                        <td>   {{ $contract->email}}</td>
                                </tr>
                                <tr>
                                        <th>Date:</th>
                                        <td>   {{ $contract->date}}</td>
                                </tr>
                                <tr>
                                        <th> Name: </th>
                                        <td>   {{ $contract->name}}</td>
                                </tr>

                                <tr>
                                 <th> Signature: </th>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <img src="/images/{{ $contract->signature_url}}" height="50px"/>
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

