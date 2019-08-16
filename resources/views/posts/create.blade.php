@extends('layouts.app')

@section('content')
    <h1 style="margin: 15px;">Create Post</h1>
    <!--comentout { #comentout   !! Form::open(['url' => 'foo/bar']) !!}-->
    {!! Form::open(['action' => 'PostsController@store','method' => 'POST','enctype' => 'multipart/form-data']) !!}
            <div>
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div>
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>

            {{Form::submit('submit',['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
        
    
@endsection