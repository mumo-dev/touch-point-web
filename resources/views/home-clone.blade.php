@extends('layouts.app')

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
                    <a href="#" class="list-group-item list-group-item-action active">
                        List of Submitted Contract forms
                    </a>
                    @forelse($contracts as $identification)
                   <a href="/contracts/{{$identification->id}}" class="list-group-item list-group-item-action">
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
