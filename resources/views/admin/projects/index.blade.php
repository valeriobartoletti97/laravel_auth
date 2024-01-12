@extends('layouts.app')
{{-- @php
dd($projects)
@endphp --}}
@section('content')
    <section class="container">
        <div class="container mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Project Name</th>
                        <th scope="col">Language</th>
                        <th scope="col">Commits</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <th>
                                <a href="{{ route('admin.projects.show', $project->id) }}">
                                    {{ $project->name }}
                                </a>
                            </th>
                            <td>{{ $project->language }}</td>
                            <td>{{ $project->commits }}</td>
                            <td>{{ $project->created }}</td>
                            <td>{{ $project->updated }}</td>
                            <td>
                                <button type="button" class="btn btn-light border border-secondary">
                                    <a href="{{route('admin.projects.show', $project->id)}}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </button>
                                <button type="button" class="btn btn-light border border-secondary">
                                    <a href="{{route('admin.projects.edit', $project->id)}}">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                </button>
                                <button type="button" class="btn btn-light border border-secondary">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
