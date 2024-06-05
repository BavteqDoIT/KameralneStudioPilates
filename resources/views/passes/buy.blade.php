@extends('loginView')

@section('content')
    <form method="POST" action="{{ route('passes.transaction', $passes->id) }}">
        @csrf
        <div class="form-group">
            <label for="passes_id">Wybierz karnet:</label>
            <select class="form-control" id="passes_id" name="passes_id" disabled>
                <option value="{{ $passes->id }}">{{ $passes->name }}</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Kup Karnet</button>
    </form>
@endsection
