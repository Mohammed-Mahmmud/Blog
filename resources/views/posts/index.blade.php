@extends('layouts.blog')
@section('content')
      <div class="mt-5 m-5">
      <a href="{{route('posts.create')}}" type="button" class="btn btn-warning  mt-1">Create Post</a>

     <table class="table ">
         <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Created at</th>
            <th scope="col">Posted By</th>
          </tr>
        </thead>
          <tbody>

          @foreach ($post as $value)

          <tr>
          <th scope="row">{{$value->id}}</th>
          <td>{{$value->title}}</td>
          <td>{{$value->created_at->format('Y-m-d')}}</td>
          <td>{{$value->user ? $value->user->name : 'User Not Found'}}</td>

          {{-- @dd($value->created_at->format('Y-m-d')) --}}
          <td>
            <a href="{{route('posts.show',['post'=>$value->id])}}" type ="button" class="btn btn-success">View</a>
            <a href="{{route('posts.edit',['post'=>$value->id])}}" type="button" class="btn btn-info">Edit</a>

            <form style="display:inline" method="post" action="{{route('posts.destroy',['post'=>$value->id])}}">
          @csrf
          @method('delete')

              <button type="submit"  onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger">Delete</button>

            </form>
          </td>
        </tr>
        @endforeach

        </tbody>
      </table>

    </div>

            @endsection
