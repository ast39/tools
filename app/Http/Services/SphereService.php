<?php

namespace App\Http\Services;

use App\Models\Sphere;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class SphereService {

    /**
     * Одна сфера по ID
     *
     * @param int $id
     * @return Model
     */
    public function getById(int $id): Model
    {
        return Sphere::query()
            ->with(['categories'])
            ->findOrFail($id);
    }

    /**
     * Список сфер
     *
     * @param $filter
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAll($filter, int $limit = 10): LengthAwarePaginator
    {
        return Sphere::query()
            ->filter($filter)
            ->orderBy('id')
            ->paginate(10);
    }

    /**
     * Добавить сферу
     *
     * @param array $data
     * @return Model
     */
    public function create(array $data): Model
    {
        $sphere = Sphere::query()
            ->create($data);

        $sphere->seo()->create($data);

        return $sphere;
    }

    /**
     * Обновление сферы
     *
     * @param int $id
     * @param array $data
     * @return bool
     */
    public function update(int $id, array $data): bool
    {
        $sphere = $this->getById($id);

        $sphere->seo()->delete();
        $sphere->seo()->create($data);

        return $sphere->update($data);
    }

    /**
     * Удаление сферы
     *
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        $sphere = $this->getById($id);

        return $sphere->delete();
    }
}
