@extends('base')

@section('content')

<div class="container con pb-2">
  <div class="float-end mt-4">
    <a href="/createpost" class="btn btn-primary">
      New Post
    </a>
  </div>
  <h1 class="text-white pt-2 pb-2">Recent Post</h1>
  <hr>
  @foreach($posts as $post)
  <div class="card m-1 mb-3 py-3 {{($post->user->gender == 'Male') ? 'male' : 'female'}}">
    <div class="card-body">
      <div class="dropdown float-end">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          {{$post->category->category}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          @foreach(App\Models\User::whereHas('posts', function($query) use ($post){
              $query->where('category_id', $post->category_id);
          })->get() as $user)
          <li><a class="dropdown-item" href="/authors/{{$user->id}}">{{$user->name}}</a></li>
          @endforeach
        </ul>
      </div>
      <h5 class="card-title pb-3"><i class="far fa-user"></i> {{$post->user->name}}</h5>
      <p class="card-text bg-white p-3" style="border-radius: 10px;">{{$post->post}}</p>
    </div>
  </div>
  @endforeach
</div>

@endsection