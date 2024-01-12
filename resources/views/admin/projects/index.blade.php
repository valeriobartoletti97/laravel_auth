@extends('layouts.app')
{{-- @php
dd($projects)
@endphp --}}
@section('content')
    <section class="container">
        <h1>Projects index</h1>
        @foreach ($projects as $project)
            <a href="{{route('admin.projects.show', $project->id)}}">
                <div>{{$project->name}}</div>
            </a>
        @endforeach
    </section>
@endsection
