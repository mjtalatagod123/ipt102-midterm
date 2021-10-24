@extends('base')

@section('content')
    <div class="mt-2"><a href="{{ url('/dashboard') }}" class="btn btn-primary"><< Back</a></div>
    <div class="row mt-4 mb-2">
        
        <div class="col-md-5 offset-4">
            <div class="card">
                <div class="card-header text-center bg-info text-white">
                    <h3>Create New Post</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/createpost')}}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-select">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="post">Post Content</label>
                            <textarea name="post" id="post" cols="30" rows="6" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-primary px-5" type="submit">Create Post</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

@endsection