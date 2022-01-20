@extends('layouts.app')


@section('Content')

<div class="comics_create">

    <div class="container">

        <form action="{{route('comics.store')}}" method="post">
            @csrf

            <div class="mb-3">

                <label for="title" class="form-label fw-bold fs-4">TITLE*:</label>
                <input type="text" name="title" id="title" class="form-control" required placeholder="title here" aria-describedby="helpId">
                {{-- // TITLE --}}

                <label for="series" class="form-label fw-bold fs-4">SERIES:</label>
                <input type="text" name="series" id="series" class="form-control" placeholder="series here" aria-describedby="helpId">
                {{-- // SERIES --}}

                <label for="description" class="form-label fw-bold fs-4">DESCRIPTION:</label>
                <textarea type="text-area" name="description" id="description" class="form-control" placeholder="description here" aria-describedby="helpId">
                  </textarea>
                {{-- // DESCRIPTION --}}

                <label for="price" class="form-label fw-bold fs-4"> PRICE*: </label>
                <input type="text" name="price" id="price" required class="form-control" placeholder="price here" aria-describedby="helpId">
                {{-- // PRICE --}}

                <button type="submit" class="btn btn-success fw-bold">Add your comic</button>
            </div>

        </form>

    </div>
</div>

@endsection