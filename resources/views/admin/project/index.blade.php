@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-between">
            <div class="col">
                <div class="d-flex justify-content-between align-items-center my-5">
                    <h1>I nostri lavori</h1>
                    <a class="btn btn-primary" href="{{ route('admin.project.create')}}">Aggiungi voce</a>

                </div>
            </div>
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Titolo</th>
                            <th>Contenuto</th>
                            <th class="text-end">Strumenti</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($project as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->content}}</td>
                                <td class="w-25 text-end">
                                    <a href="{{ route('admin.project.show', $item->id) }}" class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('admin.project.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form class="d-inline-block delete-post-form" action="{{ route('admin.project.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                    </form>
                                </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection