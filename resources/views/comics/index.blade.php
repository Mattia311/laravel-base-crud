@extends('layouts.app')

@section('Content')
<div class="heading d-flex justify-content-between">
    <h1>All Posts in a table</h1>
    <a class="btn btn-primary" href="{{route('comics.create')}}" role="button">Create</a>
</div>
<div class="container">
    <h2>Current Series</h2>
    <div class="series row">
        @foreach($comics as $comic)
        <div class="col-2">
            <a href="{{ route('comic', ['comic' => $comic->id]) }}">
                <div class="card_comics">
                    <img src="{{ $comic['thumb'] }}" alt="Comics">
                    <h3>{{ $comic->series }}</h3>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Create At</th>
                <th>Updated At</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->title}}</td>
                <td>{{$comic->created_at}}</td>
                <td>{{$comic->updated_at}}</td>
                <td>
                    <a class="btn btn-primary" title="View post" href="{{route('comics.show', $comic->id)}}"><i class="fas fa-eye"></i> </a>

                    <a class="btn btn-secondary" href="{{route('comics.edit', $comic->id)}}"> <i class="fas fa-pencil-alt"></i> </a>


                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$comic->id}}">
                        <i class="fas fa-trash"></i>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="delete{{$comic->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-{{$comic->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Delete Post {{$comic->title}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                        ??? Attenzione questa operazione non puo essere annullata!
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
            </tr>
            @endforeach

        </tbody>
    </table>


</div>



@endsection