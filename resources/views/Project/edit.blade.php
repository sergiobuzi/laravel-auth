@extends('layouts.app')
@section('content')
    <h1 class="text-center mb-5">Edit Project</h1>
    @auth
        <form class="create" action="{{ route('project.update', $project->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="d-flex align-items-start mb-2">
                <label class="input" for="title">name</label>
                <input style="width: 100%" type="text" name="name" id="name" value="{{ $project->name }}">
            </div>

            <div class="d-flex align-items-start mb-2">
                <label class="input" for="description">description</label>
                <input type="text" style="width: 100%; height: 100px" name="description" id="description" cols="30"
                    rows="10" value="{{ $project->description }}"></input>
            </div>

            <div class="d-flex align-items-start mb-2">
                <label class="input" for="image">image</label>
                <input style="width: 100%" type="text" name="image" id="image" value="{{ $project->image }}">
            </div>

            <div class="d-flex align-items-start mb-2">
                <label class="input" for="tecnology">tecnology</label>
                <input style="width: 100%" type="text" name="tecnology" id="tecnology" value="{{ $project->tecnology }}">
            </div>

            <div class="d-flex align-items-start mb-5">

                <label class="input" for="link">link</label>
                <input style="width: 100%" type="link" name="link" id="link" value="{{ $project->link }}">
            </div>

            <br>
            <input type="submit" value="EDIT" style="width: 100px; margin: 0 auto">
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
