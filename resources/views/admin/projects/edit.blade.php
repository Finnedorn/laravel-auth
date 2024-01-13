@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="card my-3 p-4">
                <h2 class="pb-3">
                    {{ $project->project_title }}
                </h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- form di edit  --}}
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    {{-- titolo del progetto --}}
                    <div class="mb-3">
                        <label for="project_title" class="form-label">Titolo del Progetto</label>
                        <input type="text"
                            class="form-control @error('project_title') is-invalid @enderror"
                            id="project_title" name="project_title"
                            value="@error('project_title') {{ old('project_title') }} @else{{ $project->project_title }}@enderror"
                            required>
                        @error('project_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- nome della repo --}}
                    <div class="mb-3">
                        <label for="repo_name" class="form-label">Nome della Repostory</label>
                        <input type="text"
                            class="form-control @error('repo_name') is-invalid @enderror"
                            id="repo_name" name="repo_name"
                            value="@error('repo_name') {{ old('repo_name') }} @else{{ $project->repo_name }}@enderror"
                            required>
                        @error('repo_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- link alla repo --}}
                    <div class="mb-3">
                        <label for="repo_link" class="form-label">Link alla Repostory</label>
                        <input type="text"
                            class="form-control @error('repo_link') is-invalid @enderror"
                            id="repo_link" name="repo_link"
                            value="@error('repo_link') {{ old('repo_link') }} @else{{ $project->repo_link }}@enderror"
                            required>
                        @error('repo_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label" rows="10">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">
                            @error('description')
                                {{ old('description') }}@else{{ $project->description }}
                            @enderror
                        </textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- bottoni --}}
                    <button type="reset" class="btn btn-secondary">Reset</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#delete_button">
                        Delete
                    </button> --}}
                </form>
            </div>
        </div>
    </main>
@endsection
