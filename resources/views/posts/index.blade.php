@extends('layouts.app')

@section('content')
    <h1 style="margin:20px 0;">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
         <div class="card"  style="padding:10px;margin:10px;">
             <div class="row">
                 <div class="col-md-4 col-sm-4">
                 <img  style="width:100%; max-height:200px;" src="/storage/cover_images/{{$post->cover_image}}">
                 </div>
                 <div class="col-md-8 col-sm-8">
                        <h3 style="margin-bottom:10px;">
                                <a href="/posts/{{$post->id}}">
                                   {{$post->title}}
                                </a>
                        </h3>
                        <p style="color:#666;">Written on {{$post->created_at}} by {{$post->user->name}}</p>
                 </div>
             </div>
         </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>no post found</p>
    @endif
        
    
@endsection