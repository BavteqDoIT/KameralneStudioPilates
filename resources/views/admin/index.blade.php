@extends('layout.layout')
@section('content')

    <div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Imię</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Rola</th>
                    <th scope="col">Numer telefonu</th>
                    <th scope="col">Akcje</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user -> id }}</th>
                        <td>{{ $user -> email }}</td>
                        <td>{{ $user -> name }}</td>
                        <td>{{ $user -> surname }}</td>
                        <td>{{ $user -> role }}</td>
                        <td>{{ $user -> phone_number }}</td>
                        <td>
                            <button class="delete" data-id="{{ $user -> id }}">
                                USUŃ
                            </button>
                            <a href="{{route('admin.edit', $user -> id)}}"><button class="primary">EDYTUJ</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <section id="banner">
            {{$users->links()}}
        </section>
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
                url: "http://pilatesbedzin.test/admin/" + $(this).data("id"),
                {{-- data: { id: $(this).data("id")} --}}
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
