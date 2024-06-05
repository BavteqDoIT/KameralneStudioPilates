@extends('layout.layout')

@section('content')
    <div style="display: flex; flex-direction: column; align-items: center; padding: 20px;">
        <h1 style="margin-bottom: 20px;">Grafik</h1>
        <p>Grafik na tydzień od {{ $startOfWeek }} do {{ $endOfWeek }}</p>


        <div>
            @can('isAdmin')
                <button><a href="{{ route('schedule.create') }}">Dodaj Zajęcia</a></button>
            @endcan
            @can('isWorker')
                <button><a href="{{ route('schedule.create') }}">Dodaj Zajęcia</a></button>
            @endcan

        <div>
        <table style="border-collapse: collapse; width: 80%; text-align: center;">
            <thead>
                <tr>
                    <th style="border: 1px solid black; padding: 10px;">Time</th>
                    @foreach($daysOfWeek as $day)
                        <th style="border: 1px solid black; padding: 10px;">{{ $day }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                @foreach($hours as $hour)
                    <tr>
                        <td style="border: 1px solid black; padding: 10px;">{{ $hour }}:00</td>
                        @foreach($daysOfWeek as $day)
                            <td style="border: 1px solid black; padding: 10px;">
                                @foreach($schedules as $schedule)
                                    @if (\Carbon\Carbon::parse($schedule->date)->format('l') == $day && \Carbon\Carbon::parse($schedule->start_time)->hour == $hour)
                                        {{ $schedule->class_name }} ({{ $schedule->schedule_slots }})
                                        @auth
                                            @if ($schedule->schedule_slots > 0)
                                                @if ($schedule->users->contains(Auth::id()))
                                                    <form action="{{ route('schedule.leave', $schedule->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="primary">Wypisz</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('schedule.join', $schedule->id) }}" method="post">
                                                        @csrf
                                                        <button type="submit" class="primary">Zapisz</button>
                                                    </form>
                                                @endif
                                            @endif
                                        @endauth
                                        @can('isAdmin')
                                                <button class="primary delete" data-id="{{ $schedule->id }}">
                                                    USUŃ
                                                </button>
                                            @endcan
                                            @can('isWorker')
                                                <button class="primary delete" data-id="{{ $schedule->id }}">
                                                    USUŃ
                                                </button>
                                            @endcan
                                    @endif
                                @endforeach
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
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
                url: "http://pilatesbedzin.test/schedule/" + $(this).data("id"),
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
