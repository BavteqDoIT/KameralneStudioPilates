@extends('layouts.app')
@extends('loginView')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Podgląd zajęć</div>

                <div class="card-body">
                    <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nazwa</label>

                            <div class="col-md-6">
                                <input id="name" maxlength="500" type="text" class="form-control " name="name" value="{{ $classes->name }}" disabled>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="description" class="col-md-4 col-form-label text-md-end">Opis</label>

                            <div class="col-md-6">
                                <textarea id="description" maxlength="1500" class="form-control " name="description" disabled>{{ $classes->description }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="slots" class="col-md-4 col-form-label text-md-end">Liczba miejsc</label>

                            <div class="col-md-6">
                                <input id="slots" type="number" min="1" class="form-control" name="slots" value="{{ $classes->slots }}"disabled>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
