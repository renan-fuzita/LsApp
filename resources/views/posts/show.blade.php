@extends('layouts.app')

@section('content')
<button style="margin:20px 0; border:none; background-color:#fff;font-size:1.3em;"><a href="/posts">Go back</a></button>
<h1 style="margin: 15px;max-height:700px;max-width:1100px;">{{$post->title}}</h1>
<img  style="width:100%;" src="/storage/cover_images/{{$post->cover_image}}">
<br/>  
<div>
    {!! $post->body !!}
</div>
<br/>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST','class' => 'float-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
        {!!Form::close() !!}
    @endif
@endif
@endsection