@extends('layouts.app')
@section('content')
    {{-- <h1 class="text-center my-3">Project [{{ $project->id }}]Detail:</h1>
    <div class="detail">
        <div><b>Description: </b>{{ $project->description }}</div>
        <a href="{{ $project->link }}">Project Link</a>
    </div> --}}

    @auth
        <form action="{{route('project.store')}}" method="POST">
            @csrf
            @method('POST')

            <label for="title">name</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="description">description</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
            <br>
            <label for="image">image</label>
            <input type="text" name="image" id="image">
            <br>
            <label for="tecnology">tecnology</label>
            <input type="text" name="tecnology" id="tecnology">
            <br>
            <label for="link">link</label>
            <input type="link" name="link" id="link">
            <br>
            <input type="submit" value="CREATE">
        </form>
    @endauth
@endsection

<style>
    .detail {
        border: 1px solid black;
        width: 600px;
        margin: 0 auto;
        padding: 5px;
    }
</style>
