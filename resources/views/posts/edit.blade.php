@extends('layouts.blog')
@section('content')
<form method="post" action="{{route('posts.update',['post'=>$post->id])}}">
    @csrf
    @method('put')
    <div class=" m-5 ">

    <div class="mb-3 ">
      <label class="form-label">Title</label>
      <input name="title" type="text" class="form-control" value ="{{$post->title}}" id="exampleInputEmail1" aria-describedby="emailHelp">

      </input>
    </div>
    <div class="mb-3">
      <label  class="form-label">Description</label>
      <textarea name="description" class="form-control" id="exampleInputPassword1">
        {{$post->description}}

      </textarea>
    </div>


    <div class="form-group">
      <label>Users</label>
      <select class="form-control" name = "user_id">
                @foreach ($users as $user)
        <option   value = '{{$user->id}}'
        @if($user->id == $post->user_id)
        @selected(true)
        @endif
        >  {{$user->name}} </option>
      @endforeach
    </select>


    </div>



    <button type="submit" class="btn btn-dark mt-5 ">Update Post</button>
</div>
  </form>
@endsection
