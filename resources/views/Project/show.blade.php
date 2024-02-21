@extends('layouts.app')
@section('content')
    <h1 class="text-center my-3">Project [{{ $project->id }}]Detail:</h1>
    <div class="detail">
        <div><b>Description: </b>{{ $project->description }}</div>
        <a href="{{ $project->link }}">Project Link</a>
    </div>
@endsection

<style>
    .detail {
        border: 1px solid black;
        width: 600px;
        margin: 0 auto;
        padding: 5px;
    }
</style>
