@extends('main')

@section('title', 'Nowy post')

@section('content')
    <form class="width80" method="POST" action="/post/create" enctype="multipart/form-data">
        @csrf
        <h1>Dodaj nowy post</h1>
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="form-group row">
            <label class="col-2 col-form-label-lg" for="inputTitle">Tytuł</label>
            <div class="col-10">
                <input class="form-control @error('title') is-invalid @enderror" type="text" id="inputTitle" name="inputTitle">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label-lg" for="image">Grafika</label>
            <div class="col-10">
                <input class="form-control-file" type="file" id="image" name="image">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-2 col-form-label-lg" for="inputContent">Treść</label>
            <div class="col-10">
                <textarea class="form-control" id="inputContent" name="inputContent"></textarea>
            </div>
        </div>
        <button class="btn btn-primary">Wyślij</button>
    </form>
@endsection