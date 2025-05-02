@extends('app_bootstrap')

@section('content')
    <div class="container">
        <h1>Neue Aufgabe erstellen</h1>

        <form action="{{ route('task_items.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titel</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Aufgabe</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Aufgabe erstellen</button>
            <a href="{{ route('task_items.index') }}" class="btn btn-secondary">Abbruch</a>
        </form>
    </div>
@endsection
