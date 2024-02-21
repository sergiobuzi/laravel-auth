@extends('layouts.app')
@section('content')

    <h1 class="text-center mb-5">
        Projects
    </h1>

    <ul class="d-flex flex-wrap justify-content-center">
        @foreach ($projects as $project)

            <li class=" m-3 project">

                <img class="mb-3" src="{{ $project->image }}" alt="" style="width: 240px">
                <h3 class="mb-2 p-2"> <b>Title: </b>{{ $project->name }}</h3>
                <div class="tecnology p-2"><b>Technologies: </b>{{ $project->tecnology }}</div>
                
            </li>

        @endforeach
    </ul>

@endsection


<style>
    .project {
        border: 1px solid lightgray;
        width: 240px;
        border-radius: 8px;
    }

    img {
        border-radius: 8px;
    }

    ul {
        list-style-type: none
    }

    .tecnology {
        word-wrap: break-word;
    }
</style>
