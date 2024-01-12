@extends('layouts.app')
@section('content')
    <section class="container">
        <h1 class="text-center mt-3 mb-5">{{$project->name}}</h1>
        <h2 class="text-center">Questa &egrave; la pagina del progetto {{$project->name}}</h2>
    </section>
@endsection