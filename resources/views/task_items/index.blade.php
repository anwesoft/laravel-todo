@extends('app_bootstrap')

@section('content')
    <div class="container">
        <h1>ToDo-Liste</h1>
        <a href="{{ route('task_items.create') }}" class="btn btn-primary mb-3">Neue Aufgabe erstellen</a>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Titel</th>
                <th>Aufgabe</th>
                <th>Status</th>
                <th>Aktionen</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($task_items as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        @if ($task->completed)
                            ✅ Erledigt
                        @else
                            ❌ Offen
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('task_items.edit', $task->id) }}"
                           class="btn btn-warning btn-sm">Bearbeiten</a>
                        <form action="{{ route('task_items.destroy', $task->id) }}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Wirklich entfernen?')">Löschen
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
