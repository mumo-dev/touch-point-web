@extends('supervisor.layouts.app')

@section('header-title')
    <h6 class="text-white text-uppercase">Supervisor Dashboard</h6>
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
        <a class="nav-link active" href="#">
          <span data-feather="home"></span>
            Identifications <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
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
        <a class="nav-link " href="#">
          <span data-feather="layers"></span>
          View Agents
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <span data-feather="plus-square"></span>
          Create Agent
        </a>
      </li>

    </ul>
  </div>
</nav>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <div class="card">
                <div class="card-body">
                    Supervisor Dashboard
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
