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
            <a class="nav-link" href="{{ route('supervisor.contracts')}}">
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
         <a class="nav-link active" href="{{ route('agents')}}">
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

    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

<div class="card">

  <div class="card-header bg-white"> List of Agents</div>
  <div class="card-body">
      <div class="table-responsive">
            <table class="table  table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>

              @foreach ($users as $user)
                    <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>

                    <td>
                        <button class="btn btn-sm btn-danger"  onclick="deleteAgent('{{$user->id}}')"
                            data-toggle="modal" data-target="#deleteAgentModal">DELETE</button>
                    </td>
                    {{-- <td>{{$account->department}}</td> --}}

                    </tr>
              @endforeach

            </tbody>
        </table>

        <script>
                function deleteAgent(id){
                    $('#userId').val(id);
                }
        </script>
      </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="deleteAgentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-danger" id="exampleModalLabel">Delete Agent</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{ route('agent.delete')}}" method="post">
                @csrf
                <input type="hidden" id="userId" name="id">
                <div class="modal-body">
                  Once deleted, the data is unrecoverable <br>
                  Are you sure u want to delete this faculty?

                </div>
                <div class="modal-footer m-0 p-1">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
          </div>
        </div>
</div>

@endsection
