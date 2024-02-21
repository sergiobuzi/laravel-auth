@extends('layouts.app')
@section('content')
    {{-- <h1 class="text-center my-3">Project [{{ $project->id }}]Detail:</h1>
    <div class="detail">
        <div><b>Description: </b>{{ $project->description }}</div>
        <a href="{{ $project->link }}">Project Link</a>
    </div> --}}
    <h1 class="text-center mb-5">New Project</h1>
    @auth
        <form class="create" action="{{ route('project.store') }}" method="POST">
            @csrf
            @method('POST')
            <div class="d-flex align-items-start mb-2">
                <label class="input" for="title">name</label>
                <input style="width: 100%" type="text" name="name" id="name">
            </div>

            <div class="d-flex align-items-start mb-2">
                <label class="input" for="description">description</label>
                <textarea style="width: 100%" name="description" id="description" cols="30" rows="10"></textarea>

            </div>

            <div class="d-flex align-items-start mb-2">
                <label class="input" for="image">image</label>
                <input style="width: 100%" type="text" name="image" id="image">
            </div>

            <div class="d-flex align-items-start mb-2">
                <label class="input" for="tecnology">tecnology</label>
                <input style="width: 100%" type="text" name="tecnology" id="tecnology">
            </div>

            <div class="d-flex align-items-start mb-5">

                <label class="input" for="link">link</label>
                <input style="width: 100%" type="link" name="link" id="link">
            </div>

            <br>
            <input type="submit" value="CREATE" style="width: 100px; margin: 0 auto">
        </form>
    @endauth
@endsection

<style>
    .create {
        display: flex;
        flex-direction: column;
        width: 600px;
        margin: 0 auto;
        padding: 20px
    }

    .input {
        width: 100px;
    }
</style>
