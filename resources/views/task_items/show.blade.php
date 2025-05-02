@extends('app_bootstrap')

@section('content')
    <div class="container">
        <h1>Aufgabendetails</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $taskItem->title }}</h5>
                <p class="card-text"><strong>Aufgabe:</strong><br />{{ $taskItem->description }}</p>
                <p class="card-text">
                    <strong>Status:</strong>
                    @if ($taskItem->completed)
                        ✅ Erledigt
                    @else
                        ❌ Offen
                    @endif
                </p>
            </div>
        </div>

        <a href="{{ route('task_items.edit', $taskItem->id) }}" class="btn btn-warning mt-3">Bearbeiten</a>
        <a href="{{ route('task_items.index') }}" class="btn btn-secondary mt-3">Zurück zur Übersicht</a>

        <form action="{{ route('task_items.destroy', $taskItem->id) }}" method="POST" class="mt-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Aufgabe wirklich entfernen?')">Delete</button>
        </form>
    </div>
@endsection
