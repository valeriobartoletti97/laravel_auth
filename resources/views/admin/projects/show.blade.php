@extends('layouts.app')
@section('content')
    <section class="container">
        <h1 class="text-center mt-3 mb-5 show-title text-uppercase">{{$project->name}}</h1>
        <h2 class="text-center">This is the page for"{{$project->name}}"</h2>
        @if($project->image)
        <div class="d-flex justify-content-center project-image-wrapper">
            <img src="{{asset('storage/' . $project->image) }}" alt="{{$project->name}}" class="project-image">
        </div>
        @endif
    </section>
@endsection