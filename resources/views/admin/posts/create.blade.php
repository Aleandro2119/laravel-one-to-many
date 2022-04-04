@extends('layouts.app')

@section('content')
    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Aggiungi un Post</h1>
        <form action="{{ route('admin.posts.store') }}" method="post">
            @csrf
            <div class="row gy-5">
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Titolo" name="title" id="title">
                </div>
                <div class="col-12 my-5">
                    <textarea class="form-control" name="description" id="description" rows="5" placeholder="Inserisci testo.."></textarea>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control" placeholder="Url Immagine" name="image" id="image">
                </div>
            </div>
            <div class="controls d-flex justify-content-end mt-2">
                <a href="{{ route('admin.posts.index') }}" class="btn btn-primary mr-2">Indietro</a>
                <button type="submit" class="btn btn-success">Conferma</button>
            </div>
        </form>
    </div>
@endsection