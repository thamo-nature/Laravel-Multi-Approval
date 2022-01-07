@extends('layouts.dashboard')

@section('content')

<div class="container">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h5 class="h5 mb-0 text-gray-800">Welcome User</h5>

    </div>

    <!-- Content Row -->

    <div class='row'>

      @if(Auth::user() && Auth::user()->role_id === 1)
      
      <div class="jumbotron">
            
        <p class="lead">Manage all the project</p>
        <hr class="my-4">
        <p>Approve are reject the project according to the criteria required.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="{{ route('project_index') }}" role="button">Manage Project</a>
        </p>
      </div>

      @elseif(Auth::user() && Auth::user()->role_id === 2)
      <div class="jumbotron">
            
        <p class="lead">Review all the project</p>
        <hr class="my-4">
        <p>Once you review and accept the request, Project is One step away from being successful.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="{{ route('project_index') }}" role="button">Review Project</a>
        </p>
      </div>

      @elseif(Auth::user() && Auth::user()->role_id === 3)
      
      <div class="jumbotron">
            
        <p class="lead">Create a new test project</p>
        <hr class="my-4">
        <p>Once you create the request, Both technical and financial review will takes care automatically.</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="{{ route('project_create') }}" role="button">Create Request</a>
        </p>
      </div>

      @endif





    <div>
    <!-- Content Row -->

</div>

@endsection