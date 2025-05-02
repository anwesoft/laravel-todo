<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskItemRequest;
use App\Services\TaskItemService;

class TaskItemController extends Controller
{
    /**
     * @var TaskItemService
     */
    protected TaskItemService $taskItemService;

    /**
     * DummyModel Constructor
     *
     * @param TaskItemService $taskItemService
     *
     */
    public function __construct(TaskItemService $taskItemService)
    {
        $this->taskItemService = $taskItemService;
    }

    public function index(): \Illuminate\Contracts\View\View
    {
        $task_items = $this->taskItemService->getAll();
        return view('task_items.index', compact('task_items'));
    }

    public function create(): \Illuminate\Contracts\View\View
    {
        return view('task_items.create');
    }

    public function store(TaskItemRequest $request): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $data['completed'] = $request->boolean('completed');
        $this->taskItemService->save($data);
        return redirect()->route('task_items.index')->with('success', 'Created successfully');
    }

    public function show(int $id): \Illuminate\Contracts\View\View
    {
        $taskItem = $this->taskItemService->getById($id);
        return view('task_items.show', compact('taskItem'));
    }

    public function edit(int $id): \Illuminate\Contracts\View\View
    {
        $taskItem = $this->taskItemService->getById($id);
        return view('task_items.edit', compact('taskItem'));
    }

    public function update(TaskItemRequest $request, int $id): \Illuminate\Http\RedirectResponse
    {
        $data = $request->validated();
        $data['completed'] = $request->boolean('completed');
        $this->taskItemService->update($data, $id);
        return redirect()->route('task_items.index')->with('success', 'Updated successfully');
    }

    public function destroy(int $id): \Illuminate\Http\RedirectResponse
    {
        $this->taskItemService->deleteById($id);
        return redirect()->route('task_items.index')->with('success', 'Deleted successfully');
    }
}
