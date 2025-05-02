<?php
namespace App\Repositories;

use App\Models\TaskItem;

class TaskItemRepository
{
	 /**
     * @var TaskItem
     */
    protected TaskItem $taskItem;

    /**
     * TaskItem constructor.
     *
     * @param TaskItem $taskItem
     */
    public function __construct(TaskItem $taskItem)
    {
        $this->taskItem = $taskItem;
    }

    /**
     * Get all taskItem.
     *
     * @return TaskItem $taskItem
     */
    public function all()
    {
        return $this->taskItem
            ->orderBy('completed', 'asc') // Erledigte Aufgaben nach unten
            ->orderBy('id', 'desc') // Neueste Aufgaben zuerst
            ->get();
    }


    /**
     * Get taskItem by id
     *
     * @param $id
     * @return mixed
     */
    public function getById(int $id)
    {
        return $this->taskItem->find($id);
    }

    /**
     * Save TaskItem
     *
     * @param $data
     * @return TaskItem
     */
     public function save(array $data)
    {
        return TaskItem::create($data);
    }

     /**
     * Update TaskItem
     *
     * @param $data
     * @return TaskItem
     */
    public function update(array $data, int $id)
    {
        $taskItem = $this->taskItem->find($id);
        $taskItem->update($data);
        return $taskItem;
    }

    /**
     * Delete TaskItem
     *
     * @param $data
     * @return TaskItem
     */
   	 public function delete(int $id)
    {
        $taskItem = $this->taskItem->find($id);
        $taskItem->delete();
        return $taskItem;
    }
}
