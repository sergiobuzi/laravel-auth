@extends('layouts.app')
@section('content')
    <h1 class="text-center my-3">Project [{{ $project->id }} ]Details:</h1>

    <div class="container d-flex">
        
        <div class="d-flex card justify-content-center flex-row">

            <div class="d-flex">
                <img src="{{$project->image}}" alt="">
            </div>

            <div class="items-cont m-5">
                <h3><b>Nome del progetto: </b> {{$project->name}}</h3>
                <p><h3>Description: </h3>{{ $project->description }}</p>
                <h3><b>Tecnologia utilizzata: </b> {{$project->tecnology}}</h3>
                <a href="{{ $project->link }}">Link GitHub</a>
            </div>
        </div>
    </div>
@endsection

<style>
    body{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    img{
        width: 500px
    }

    p{
        font-size: 20px
    }
</style>
