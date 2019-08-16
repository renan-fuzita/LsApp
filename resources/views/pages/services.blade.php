@extends('layouts.app')

@section('content')
    <h1 style="margin:20px 0;">{{$title}}</h1>
    
    @if(count($services)>0)
        <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item"><a href="#">{{$service}}</a></li>
        @endforeach
        </ul>
    @endif


@endsection
