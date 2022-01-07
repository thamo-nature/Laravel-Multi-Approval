@extends('layouts.app')

@section('content')

<div class="container-fluid">

     
        <div class="row">

            @foreach($requests as $all)

            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">

          <h5 class="card-title">{{ $all->title }}</h5>
          <p class="card-text">{{ $all->body }}</p>
          <p class="card-text">{{ $all->price }}</p>
          <p class="card-text">{{ $all->location }}</p> 
           
          @if(Auth::user() && Auth::user()->role_id === 1)
          <a href="{{ route('project_edit',$all->id) }}" class="btn btn-primary">Approve/Reject</a>        
          @elseif(Auth::user() && Auth::user()->role_id === 2)
          <a href="{{ route('project_show',$all->id) }}" class="btn btn-primary">Review/Update</a>        
          @elseif(Auth::user() && Auth::user()->role_id === 3)
          <a href="{{ route('project_create') }}" class="btn btn-primary">Raise another request</a>        
          @endif

          
        </div>
        
   
    </div>
</div>

@endforeach

</div>


</div> 
    
</div>

@endsection