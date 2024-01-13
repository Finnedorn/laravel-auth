@extends('layouts.app')

@section('content')
    <main>
        <div id="character-detail" class="container py-5">
            <div class="row pt-5">
                <div class="col-12 col-lg-4">
                    <div class="img-box">
                        {{-- <img src="{{ $project->preview }}" alt="{{ $project->project_title }}"> --}}
                    </div>
                </div>
                <div class="container">
                    <div>
                        <h1 class="pb-3">
                            {{ $project->project_title }}
                        </h1>
                        <small>
                            Nome Repository : {{$project->repo_name}}
                        </small>
                        {{-- <small>
                            Link alla Repository : {{$project->repo_link}}
                        </small> --}}
                        <p>
                            {{$project->description}}
                        </p>
                        {{-- bottone di edit --}}
                        <a href="{{route('admin.projects.edit', $project->id)}}">
                            <button class="btn btn-success rounded-3 border-0">
                                <i class="fa-solid fa-pen" style="font-size: 0.7rem"></i>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
