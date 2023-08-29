@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Modifica progetto</h1>

            </div>
            <div class="col-12">
                <form action="{{ route('admin.project.update', $project->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label class="control-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci titolo" value="{{ old ('title')}} {{$project->title}}">

                    </div>
                    <div class="form-group mt-4">
                        <div class="col-12">
                            <img src="{{ asset('storage/'.$project->image) }}">
                        </div>
                        <div class="form-group mt-4">
                            <label class="control-label">Categoria</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Seleziona categoria</option>
                                @foreach ($categories as $category)
                                    <option {{$category->id == old('category_id', $project->category_id) ? 'selected' : ''}} value="{{ $category->id}}">{{ $category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mt-4">
                            <div>Seleziona la tecnologia</div>
                            @foreach ($technologies as $item)
                                <div class="form-check">
                                    @if ($errors->any())
                                        <input type="checkbox" name="technologies[]" value="{{ $item->id }}"
                                            class="form-check-input"
                                            {{ in_array($item->id, old('technologies', [])) ? 'checked' : '' }}>
                                    @else
                                        <input type="checkbox" name="technologies[]" value="{{ $item->id }}"
                                            class="form-check-input"
                                            {{ $project->technologies->contains($item) ? 'checked' : '' }}>
                                    @endif
                                    <label class="form-check-label">
                                        {{ $item->name }}
                                    </label>
                                </div>
                            @endforeach
                            
                        </div>

                        <div>
                            <label class="control-label">Immagine</label>
                            <input class="form-control @error('image')is-invalid @enderror" type="file" name="image" id="image">
                        </div>
                        <label class="control-label">Contenuto</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Inserisci contenuto">{{$project->content }}</textarea>

                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection