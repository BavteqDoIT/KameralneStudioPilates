@extends('layout.layout')
@section('content')
<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Email</th>
        <th scope="col">Nick</th>
        <th scope="col">Imię</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Rola</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user -> id }}</th>
                <td>{{ $user -> email }}</td>
                <td>{{ $user -> name }}</td>
                <td>-</td>
                <td>-</td>
                <td><a href="#" class="button primary big">Dowiedz się więcej</a></td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection
