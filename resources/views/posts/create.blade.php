@extends('layouts.blog')
@section('content')
<form method="post" action="{{route('posts.store')}}">
    @csrf
    <div class=" m-5 ">
    
    <div class="mb-3 ">
      <label class="form-label">Title</label>
      <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
      <label  class="form-label">Description</label>
      <textarea name="description" class="form-control" id="exampleInputPassword1"></textarea>
    </div>
<div class="form-group">
  
  <label>Users</label>
  <select class="form-control" name = "user_id">
  @foreach ($users as $user)
  <option value="{{$user->id}}">{{$user->name}}</option>
  @endforeach
</select>


</div>
    <button type="submit" class="btn btn-primary mt-5">Create Post</button>
</div>   
  </form>
@endsection