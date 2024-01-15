@extends('layouts.app')
@section('content')
    <section class="container">
        <h1 class="text-center mt-3 mb-5">Create a new project</h1>
        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name">Your Project name</label>
                <input type="text" name="name" id="name" class="form-control" @error('name') is-invalid @enderror
                    required maxlength="100" minlength="3">
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="language" class="form-label">Language</label>
                <select name="language" id="language" class="form-select" required>
                    <option value="Html">Html</option>
                    <option value="Javascript">Javascript</option>
                    <option value="Php">Php</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="url" class="form-label">Url</label>
                <input type="url" name="url" id="url" class="form-control"
                    @error('name') is-invalid @enderror>
            </div>
            @error('url')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-primary text-uppercase">Create</button>
        </form>
    </section>
@endsection
