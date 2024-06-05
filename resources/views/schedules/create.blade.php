@extends('layout.layout')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; flex-direction: column;">
        <h1 style="margin-bottom: 20px;">Dodaj Zajęcia</h1>
        <form action="{{ route('schedule.store') }}" method="POST" style="width: 50%;">
            @csrf
            <div style="margin-bottom: 10px;">
                <label for="class_id">Zajęcia:</label>
                <select name="class_id" id="class_id" required style="width: 100%;">
                    @foreach($classes as $class)
                        <option value="{{ $class->id }}">{{ $class->name }}</option>
                    @endforeach
                </select>
            </div>
            <div style="margin-bottom: 10px;">
                <label for="date">Data:</label>
                <input type="date" name="date" id="date" required style="width: 100%;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="start_time">Czas rozpoczęcia:</label>
                <input type="time" name="start_time" id="start_time" required style="width: 100%;">
            </div>
            <div style="margin-bottom: 10px;">
                <label for="end_time">Czas zakończenia:</label>
                <input type="time" name="end_time" id="end_time" required style="width: 100%;">
            </div>
            <button type="submit" style="padding: 10px 20px;">Dodaj</button>
        </form>
    </div>
@endsection
