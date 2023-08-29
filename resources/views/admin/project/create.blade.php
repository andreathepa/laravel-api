@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col-12">
                <h1>Aggiungi un nuovo progetto</h1>

            </div>
            <div class="col-12">
                <form action="{{ route('admin.project.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-4">
                        <label class="control-label">Titolo</label>
                        <input type="text" name="title" id="title" class="form-control" placeholder="Inserisci titolo" value="{{ old ('title')}}">

                    </div>
                    <div class="form-group mt-4">
                        <label class="contol-label">Immagine</label>
                        <input class="form-control @error('image')is-invalid @enderror" type="file" name="image" id="image">
                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Categoria</label>
                        <select name="category_id" id="category_id" class="form-control">
                            <option value="">Seleziona categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{ $category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-4">
                        <p>Seleziona le tecnologie</p>
                        @foreach ($technologies as $technology)
                            <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                                class="form-check-input"
                                {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}>
                            <label class="form-check-label">{{ $technology->name }}</label>
                        @endforeach
                    </div>
                    <div class="form-group mt-4">
                        <label class="control-label">Contenuto</label>
                        <textarea type="text" name="content" id="content" class="form-control" placeholder="Inserisci contenuto">{{ old('content')}}</textarea>

                    </div>
                    <div class="form-group mt-4">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection