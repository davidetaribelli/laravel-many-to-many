@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-wrap justify-content-center g-4">
          <div class="col-md-4">
            <img src="{{$project->thumb}}" class="img-fluid rounded-start" alt=""{{$project->title}}"">
          </div>    
          <div class="col-md-5 mx-3 p-3 bg_darkorange rounded-3 text-white">
            <h2 class="border-bottom my-2 py-2">{{$project->type->travel}}</h2>
            <h3 class="border-bottom my-2 py-2">{{$project->title}}</h3>
            <p class="fs-4 border-bottom my-2 py-2">{{$project->description}}</p>
            <a class="text-decoration-none" href="{{$project->link}}"> <small class="text-white">{{$project->link}}</small></a>
        </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route("admin.projects.edit", $project->id)}}" class="py-1 px-4 border-0 m-4 text-white btn bg_orange">EDIT</a>
        <form action="{{route("admin.projects.destroy", $project)}}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="py-1 px-4 border-0 m-4 text-white btn bg_red" value="DELETE">
        </form>
        <a href="{{route("admin.projects.index")}}" class="py-1 px-4 border-0 m-4 text-white btn bg_orange">HOME</a>
    </div>
</div>
@endsection