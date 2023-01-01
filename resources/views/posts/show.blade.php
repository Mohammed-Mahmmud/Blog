@extends('layouts.blog')
@section('content')
        <div class="card m-4 ">
        <div class="card-header ">
          Post view
        </div>
        <div class="card-body">
          <h5 class="card-title">ID:- {{$post->id}}</h5>
          <h5 class="card-title">Title:- {{$post->title}}</h5>
          <h5 class="card-title">Created AT:- {{$post->created_at->format('Y-m-d')}}</h5>
          <h5 class="card-title">Description:- {{$post->description}}</h5>

          <a href="{{route('posts.index')}}" class="btn btn-primary mt-4">Back </a>
        </div>
      </div>
@endsection
