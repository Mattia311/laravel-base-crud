@extends('layouts.app')

@section('Content')
<form action="{{route('comics.update', $comic['id'])}}" method="POST">
    @csrf
    @method("PUT")
    <div>
        <label for="isbn" class="form-label">ISBN</label>
        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Inserire l' ISBN">
    </div>

    <div>
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Inserire il titolo">
    </div>

    <div>
        <label for="number" class="form-label">Numero fumetto</label>
        <input type="number" name="number" id="number" class="form-control" placeholder="Inserire il numero del fumetto">
    </div>

    <div>
        <label for="publishing" class="form-label">Data pubblicanzione</label>
        <input type="datetime" class="form-control" id="publishing" name="publishing" placeholder="Inserire la data di pubblicazione">
    </div>

    <div>
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Inserire il prezzo">
    </div>
    <button type="submit" class="btn btn-primary">Invia</button>
</form>
@endsection