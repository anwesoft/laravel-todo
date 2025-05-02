<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('task_items.index');
    }

    return Inertia::render('welcome');
})->name('home');


require __DIR__ . '/settings.php';
require __DIR__ . '/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('/task_items', App\Http\Controllers\TaskItemController::class)
        ->names([
            'index' => 'task_items.index',
            'create' => 'task_items.create',
            'store' => 'task_items.store',
            'show' => 'task_items.show',
            'edit' => 'task_items.edit',
            'update' => 'task_items.update',
            'destroy' => 'task_items.destroy',
        ]);
});

