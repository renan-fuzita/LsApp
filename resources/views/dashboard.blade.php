@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
      




                <div class="panel-body" style="padding:20px 0 0 20px;">
                        <a href="/posts/create" class="btn btn-primary">Create Post</a>
                        <h3 style="margin: 20px 0 10px;">Your Blog Posts</h3>
                        @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy',$post->id], 'method' => 'POST','class' => 'float-right'])!!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                        {!!Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                       
                            
                        @else
                            <p>You have no post.</p>
                        
                        @endif
                    </div>


             <!--   <div class="card-body">
                    @ if (session('status'))
                        <div class="alert alert-success" role="alert">
                            { { session('status') }}
                        </div>
                    @ endif

                    You are logged in!
                </div>-->


            </div>
        </div>
    </div>
</div>
@endsection
