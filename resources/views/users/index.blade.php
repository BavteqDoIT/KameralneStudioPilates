@extends('layout.layout')
@section('content')

    <div>
        <h2>Twoje dane</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Email</th>
                    <th scope="col">Imię</th>
                    <th scope="col">Nazwisko</th>
                    <th scope="col">Numer telefonu</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $user -> email }}</td>
                        <td>{{ $user -> name }}</td>
                        <td>{{ $user -> surname }}</td>
                        <td>{{ $user -> phone_number }}</td>
                    </tr>
            </tbody>
        </table>
        <h2>Twój Karnet</h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Cena</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $passes -> name }}</td>
                        <td>{{ $passes -> price }}</td>
                    </tr>
            </tbody>
        </table>
    </div>
@endsection
