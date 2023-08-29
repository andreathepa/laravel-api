@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>Dettaglio progetto</h1>
            </div>
            <div class="col-12">
                <div>
                    <h2>{{$project->title}}</h2>
    
                    <img src="{{asset('storage/'.$project->image)}}">
                </div>

                <div>
                    <p>Categoria: {{$project->category->name}}</p>
                    
                    <div>
                        <strong>Tecnologie:</strong>
                        @if ($project->technologies)
                            @foreach ($project->technologies as $technology)
                                <a href="" class="btn btn-sm btn-primary">{{ $technology->name }}</a>
                            @endforeach
                        @else
                            Non sono presenti tecnologie associate al progetto
                        @endif
                    </div>
                    
                    <p>Descrizione: {{$project->content}}</p>
                    
                    <p>Slug: {{$project->slug}}</p>

                </div>


            </div>
        </div>
    </div>
@endsection