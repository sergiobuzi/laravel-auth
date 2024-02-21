@extends('layouts.app')
@section('content')
    <h1 class="text-center mb-5">
        Projects {{ count($projects) }}
    </h1>

    <div class="d-flex w-100 justify-content-center" >
        <a href="{{route('project.create')}}" class="add-project d-flex align-items-center justify-content-center">
            <span>+</span>
        </a>
    </div>
    

    <ul class="d-flex flex-wrap justify-content-center" >
        @foreach ($projects as $project)
            <li class=" m-3 project">
                @auth
                    <form class="delete" action="{{ route('project.delete', $project->id) }}" method="POST">


                        @csrf
                        @method('DELETE')


                        <input type="submit" value="X">
                    </form>
                @endauth
                <img class="mb-3" src="{{ $project->image }}" alt="" style="width: 240px">
                <h3 class="mb-2 p-2"> <b>Title: </b><a
                        href="{{ route('project.show', $project->id) }}">{{ $project->name }}</a></h3>
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
        position: relative;
    }

    img {
        border-radius: 8px;
    }

    ul {
        list-style-type: none;
        padding-left: 0!important;

    }

    .tecnology {
        word-wrap: break-word;
    }

    .delete {
        position: absolute;
        right: 5px;
        text-decoration: none;
        color: black;
        font-size: 18px;
        top: 5px;
    }

    .add-project{
        width: 40px;
        height: 40px;
        border: 1px solid black;
        font-size: 1.5em;
        font-weight: 800;
        border-radius: 10px;
    }
    .add-project span{
        margin-bottom: 4px;
    }
</style>
