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
                        <td>{{ $user -> phone_number }}</td>
                        <td><a href="#" class="button primary big">USUŃ</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <section id="banner">
            {{$users->links()}}
        </section>
    </div>
@endsection
