@extends('layout.layout')
@section('content')
    <div>
        <div class = "row">
            <div class="col-6">
                <h1>Karnety</h1>
            </div>
            @can('isWorker')
            <div class="col-6">
                <a class="float-right" href="{{route('passes.create')}}">
                    <button class="primary">Dodaj</button>
                </a>
            </div>
            @endcan
            @can('isAdmin')
            <div class="col-6">
                <a class="float-right" href="{{route('passes.create')}}">
                    <button class="primary">Dodaj</button>
                </a>
            </div>
            @endcan

        </div>

        <div class = "row">
            <table>
                <thead>
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Nazwa</th>
                        <th scope="col">Opis</th>
                        <th scope="col">Cena</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($passes as $pass)
                        <tr>
                            {{-- <th scope="row">{{ $class -> id }}</th> --}}
                            <td>{{ $pass -> name }}</td>
                            <td>{{ $pass -> description }}</td>
                            <td>{{ $pass -> price }}</td>
                            <td>
                                <a href="{{route('passes.show', $pass -> id)}}"><button>PODGLĄD</button></a>
                            @can('isAdmin')
                                <a href="{{route('passes.edit', $pass -> id)}}"><button>EDYTUJ</button></a>
                                <button class="primary delete" data-id="{{ $pass -> id }}">
                                    USUŃ
                                </button>
                            @endcan
                            @can('isWorker')
                                <a href="{{route('passes.edit', $pass -> id)}}"><button>EDYTUJ</button></a>
                                <button class="primary delete" data-id="{{ $pass -> id }}">
                                    USUŃ
                                </button>
                            @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <section id="banner">
                {{$passes->links()}}
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
                url: "http://pilatesbedzin.test/passes/" + $(this).data("id"),
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
