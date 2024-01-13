@extends('layouts.app')


@section('content')
    <main>
        <div class="container">
            <div class="d-flex justify-content-between  align-items-center ">
                <h1 class="py-4">
                    Progetti:
                </h1>
                {{-- bottone della create --}}
                <div class="d-flex align-items-center">
                    <h4>
                        Non trovi il tuo Progetto ?
                    </h4>
                    <a href="{{route('admin.projects.create')}}">
                        <button class="btn btn-primary rounded-3 mx-4 ">
                            Aggiungilo!
                        </button>
                    </a>
                </div>
            </div>
            <div class="row">
                @forelse ($projects as $project)
                    <div class="col-12 col-md-3 col-lg-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3>
                                    {{$project->project_title}}
                                </h3>
                                <small>
                                    Nome Repository: {{$project->repo_name}}
                                </small>
                                <p>
                                    {{$project->description}}
                                </p>
                                <div class="d-flex mt-2">
                                    {{-- bottone di edit --}}
                                    <a href="{{route('admin.projects.edit', $project->id)}}">
                                        <button class="btn btn-success rounded-3 border-0 me-2">
                                            <i class="fa-solid fa-pen" style="font-size: 0.7rem"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div>Nessun Progetto Disponibile</div>
                @endforelse
            </div>
        </div>
    </main>
@endsection
