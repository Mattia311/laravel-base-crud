@extends('layouts.app')


@section('Content')

<div class="container">
    <h1>Update Post</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Type your title here" aria-describedby="titleHelper" value="{{$comic->title}}">
            <small id="titleHelper" class="text-muted">Type a title for your post. max: 250</small>
            @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="3">
            {{$comic->description}}
            </textarea>
            @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="body" class="form-label">SERIES:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="series" id="series" rows="3">
            {{$comic->serie}}
            </textarea>
            @error('series')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="body" class="form-label">PRICE:</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="price" id="price" rows="3">
            {{$comic->price}}
            </textarea>
            @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success">Update</button>

    </form>
</div>

@endsection