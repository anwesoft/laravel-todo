<?php
namespace App\Services;

use App\Models\TaskItem;
use App\Repositories\TaskItemRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class TaskItemService
{
	/**
     * @var TaskItemRepository $taskItemRepository
     */
    protected $taskItemRepository;

    /**
     * DummyClass constructor.
     *
     * @param TaskItemRepository $taskItemRepository
     */
    public function __construct(TaskItemRepository $taskItemRepository)
    {
        $this->taskItemRepository = $taskItemRepository;
    }

    /**
     * Get all taskItemRepository.
     *
     * @return String
     */
    public function getAll()
    {
        return $this->taskItemRepository->all();
    }

    /**
     * Get taskItemRepository by id.
     *
     * @param $id
     * @return String
     */
    public function getById(int $id)
    {
        return $this->taskItemRepository->getById($id);
    }

    /**
     * Validate taskItemRepository data.
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function save(array $data)
    {
        return $this->taskItemRepository->save($data);
    }

    /**
     * Update taskItemRepository data
     * Store to DB if there are no errors.
     *
     * @param array $data
     * @return String
     */
    public function update(array $data, int $id)
    {
        DB::beginTransaction();
        try {
            $taskItemRepository = $this->taskItemRepository->update($data, $id);
            DB::commit();
            return $taskItemRepository;
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            throw new InvalidArgumentException('Unable to update post data');
        }
    }

    /**
     * Delete taskItemRepository by id.
     *
     * @param $id
     * @return String
     */
    public function deleteById(int $id)
    {
        DB::beginTransaction();
        try {
            $taskItemRepository = $this->taskItemRepository->delete($id);
            DB::commit();
            return $taskItemRepository;
        } catch (Exception $e) {
            DB::rollBack();
            report($e);
            throw new InvalidArgumentException('Unable to delete post data');
        }
    }

}
