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
            <a class="nav-link" href="{{ route('supervisor.home')}}">
          <span data-feather="home"></span>
            Identifications <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item">
         <a class="nav-link active" href="{{ route('supervisor.contracts')}}">
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
        <a class="nav-link" href="{{ route('agents')}}">
          <span data-feather="layers"></span>
          View Agents
        </a>
      </li>
      <li class="nav-item">
         <a class="nav-link" href="{{route('create.agent')}}">
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
        <div class="col-md-8">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif


            <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active" style="background-color:#59BFC9;border:0">
                        List of Submitted Contract forms
                    </a>
                    @forelse($contracts as $identification)
                   <a href="/supervisor/contracts/{{$identification->id}}" class="list-group-item list-group-item-action">
                         submitted by {{ $identification->user->name}} on
                       {{ $identification->created_at->toDayDateTimeString()}}
                    </a>
                    @empty
                        <a href="#" class="list-group-item list-group-item-action">No forms submitted yet</a>
                    @endforelse


            </div>
        </div>
    </div>
</div>
@endsection
