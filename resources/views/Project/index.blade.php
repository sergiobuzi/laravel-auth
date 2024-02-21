@extends('layouts.app')
@section('content')
<h1>
    hello aurora

    <ul>
        @foreach ($projects as $project)
        <li>
            <img src="{{$project -> image}}" alt="">
            {{$project -> name}}
            {{$project -> tecnology}}
        </li>
        @endforeach
    </ul>
</h1>
@endsection