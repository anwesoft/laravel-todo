@extends('app_bootstrap')

@section('content')
    <div class="container">
        <h1>Aufgabe bearbeiten</h1>

        <form action="{{ route('task_items.update', $taskItem->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titel</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $taskItem->title }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Aufgabe</label>
                <textarea name="description" id="description"
                          class="form-control">{{ $taskItem->description }}</textarea>
            </div>

            <div class="mb-3">
                <input type="hidden" name="completed" value="0">
                <input class="form-check-input" type="checkbox" name="completed" value="1" id="completed"
                    {{ $taskItem->completed ? 'checked' : '' }}>
                <label class="form-check-label" for="completed">
                    Aufgabe wurde erledigt
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Aufgabe speichern</button>
            <a href="{{ route('task_items.index') }}" class="btn btn-secondary">Abbruch</a>
        </form>
    </div>
@endsection
