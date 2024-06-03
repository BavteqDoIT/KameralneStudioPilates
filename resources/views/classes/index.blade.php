@extends('layout.layout')
@section('content')
    <div>
        <div class = "row">
            <div class="col-6">
                <h1>Lista zajęć</h1>
            </div>
            <div class="col-6">
                <a class="float-right" href="{{route('classes.create')}}">
                    <button class="primary">Dodaj</button>
                </a>
            </div>
        </div>

        <div class = "row">
            <table>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa</th>
                        <th scope="col">Opis</th>
                        <th scope="col">Miejsca</th>
                        <th scope="col">Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($classes as $class)
                        <tr>
                            <th scope="row">{{ $class -> id }}</th>
                            <td>{{ $class -> name }}</td>
                            <td>{{ $class -> description }}</td>
                            <td>{{ $class -> slots }}</td>
                            <td>
                                <a href="{{route('classes.edit', $class -> id)}}"><button>EDYTUJ</button></a>
                                <a href="{{route('classes.show', $class -> id)}}"><button>PODGLĄD</button></a>
                                <button class="primary delete" data-id="{{ $class -> id }}">
                                    USUŃ
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <section id="banner">
                {{$classes->links()}}
            </section>
        </div>
    </div>
@endsection
@section('javascript')
    $(function() {
        $('.delete').click(function() {
            $.ajaxSetup({
                headers:
                { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
            });

            $.ajax({
                method: "DELETE",
                url: "http://pilatesbedzin.test/classes/" + $(this).data("id"),
            })
            .done(function(response) {
                window.location.reload();
            })
            .fail(function(response){
                alert("Error");
            });

        });
    });
@endsection
