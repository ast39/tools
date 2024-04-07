<?php

namespace App\Http\Services;

use App\Models\Category;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class CategoryService {

    /**
     * Добавить категорию
     *
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model
    {
        $category =  Category::query()
            ->create($data);

        $category->seo()->create($data);
    }

    /**
     * Одна категория по ID
     *
     * @param int $id
     * @return Model
     */
    public function getById(int $id): Model
    {
        return Category::query()
            ->with(['sphere', 'services'])
            ->findOrFail($id);
    }

    /**
     * Список категорий
     *
     * @param $filter
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAll($filter, int $limit = 10): LengthAwarePaginator
    {
        return Category::query()
            ->with('sphere')
            ->filter($filter)
            ->orderBy('id')
            ->paginate(10);
    }

    /**
     * Обновление категории
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $category = $this->getById($id);

        return $category->update($data);
    }

    /**
     * Удаление категории
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $category = $this->getById($id);

        return $category->delete();
    }
}
