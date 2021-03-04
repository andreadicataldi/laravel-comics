@extends('layouts.dashboard')

@section('content')
    <h1>Modifica fumetto</h1>

    <form class="form" action="{{ route('admin.comics.update', $comic) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Titolo del fumetto</label>
            <input type="text" name="title" id="title" value="{{ $comic->title }}">
            <small id="titleHelper" class="form-text text-muted">Titolo Comics</small>
        </div>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="description">Descrizione del fumetto</label>
            <input type="text" name="description" id="description" value="{{ $comic->description }}">
            <small id="descriptionHelper" class="form-text text-muted">Descrizione fumetto</small>
        </div>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="price">Prezzo del fumetto</label>
            <input type="text" name="price" id="price" value="{{ $comic->price }}">
            <small id="priceHelper" class="form-text text-muted">Prezzo Comics</small>
        </div>
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label for="availability">Disponibilità del fumetto</label>
            <select class="" name="availability" id="availability">
                <option value=1>Si</option>
                <option value=0>No</option>
            </select>
        </div>
        @error('availability')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        {{-- <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" placeholder="scrivi qui lo slug" id="slug">
        </div>
        @error('slug')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}

        <div class="form-group">
            <label for="cover">Cover Image</label>
            <input type="file" class="form-control-file" name="cover" id="cover" placeholder="Add a cover image"
                aria-describedby="coverImgHelper">
            <small id="coverImgHelper" class="form-text text-muted">Add a cover image</small>
        </div>
        @error('cover')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        {{-- <div class="form-group">
      <label for="cover">Inserisci L'immagine</label>
      <input type="file" name="cover" id="cover">
      <small id="coverHelper" class="form-text text-muted">Titolo Comics</small>
    </div> --}}

        <button class="btn btn-primary" type="submit" name="button">Invia</button>
    </form>
@endsection
