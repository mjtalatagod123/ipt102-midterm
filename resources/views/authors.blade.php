@extends('base')

@section('content')

<div class="container con pb-2">
  <h1 class="text-white pt-2 pb-2">Users</h1>
  <hr>
  @foreach($users as $user)
    <div class="card m-1 mb-3 py-3 {{($user->gender == 'Male') ? 'male' : 'female'}}">
      <div class="card-body">
        <h5 class="card-title"><i class="far fa-user"></i> {{$user->name}}</h5>
        <a href="/authors/{{$user->id}}" class="btn">Show User Posts <i class="fas fa-angle-double-right"></i></a>
      </div>
    </div>
  @endforeach
  
</div>
    
@endsection

