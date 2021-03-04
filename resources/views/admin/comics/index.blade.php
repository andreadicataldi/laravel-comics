@extends('layouts.dashboard')

@section('content')
    <h1>lista dei fumetti, visibili solo all'admin con i controlli crud</h1>


    <a href="{{ route('admin.comics.create') }}" class="btn btn-primary">Crea un nuovo fumetto</a>

    <table class="table">
        <thead>
            <th>ID</th>
            <th>Titolo</th>
            <th>descrizione</th>
            <th>prezzo</th>
            <th>disponibilità</th>
            <th>Slug</th>
            <th>Azioni possibili</th>
        </thead>
        <tbody>
            @foreach ($comics as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->description }}</td>
                    <td>{{ $value->price }}</td>
                    <td>{{ $value->availability }}</td>
                    <td>{{ $value->slug }}</td>

                    <td>
                        <a href="{{ route('admin.comics.show', ['comic' => $value->slug]) }}">Guarda</a>
                        <a href="{{ route('admin.comics.edit', ['comic' => $value->slug]) }}">Modifica</a>
                        {{-- <form action="{{ route('admin.comics.destroy', ['comic' => $value->slug]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" name="button">Elimina</button>
                        </form> --}}
                    </td>
            @endforeach
        </tbody>
    </table>
@endsection
