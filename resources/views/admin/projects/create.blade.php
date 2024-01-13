@extends('layouts.app')

@section('content')
    <main>
        <div class="container">
            <div class="card my-2  p-4">
                <h2 class="pb-3">
                    Inserisci un nuovo Progetto:
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
                <form action="{{ route('admin.projects.store') }}" method="POST">
                    @csrf
                    {{-- titolo del progetto --}}
                    <div class="mb-3">
                        <label for="project_title" class="form-label">Titolo del Progetto</label>
                        <input type="text"
                            class="form-control @error('project_title') is-invalid @enderror"
                            id="project_title" name="project_title"
                            value="{{old('project_title')}}"
                            required>
                        @error('project_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- nome della repo --}}
                    <div class="mb-3">
                        <label for="repo_name" class="form-label">Nome della Repository</label>
                        <input type="text"
                            class="form-control @error('repo_name') is-invalid @enderror"
                            id="repo_name" name="repo_name"
                            value="{{old('repo_name')}}"
                            required>
                        @error('repo_name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- link alla repo --}}
                    {{-- <div class="mb-3">
                        <label for="repo_link" class="form-label">Link alla Repository</label>
                        <input type="text"
                            class="form-control @error('repo_link') is-invalid @enderror"
                            id="repo_link" name="repo_link"
                            value="{{old('repo_link')}}"
                            required>
                        @error('repo_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                    {{-- description --}}
                    <div class="mb-3">
                        <label for="description" class="form-label" rows="10">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                        value="{{old('description')}}">
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
