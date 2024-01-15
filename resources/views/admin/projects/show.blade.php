@extends('layouts.app')

@section('content')
    <main>
        <div id="character-detail" class="container py-5">
            <div class="row pt-5">
                <div class="container">
                    <div>
                        <h1 class="pb-3">
                            {{ $project->project_title }}
                        </h1>
                        <small>
                            Nome Repository: {{$project->repo_name}}
                        </small>
                        <small>
                            Link alla Repository: {{$project->repo_link}}
                        </small>
                        <p>
                            {{$project->description}}
                        </p>
                        {{-- preview spot --}}
                        @if ($project->preview !== null)
                            <div class="img-box my-4 ">
                                <img src="{{asset('storage/'. $project->preview)}}" alt="{{$project->project_title}}">
                            </div>
                        @endif
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
