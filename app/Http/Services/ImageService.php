<?php

namespace App\Http\Services;

use App\Models\Image;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;

class ImageService {

    /**
     * Список картинок
     *
     * @param $filter
     * @param int $limit
     * @return LengthAwarePaginator
     */
    public function getAll($filter, int $limit = 10): LengthAwarePaginator
    {
        return Image::query()
            ->filter($filter)
            ->orderBy('path')
            ->orderBy('ext')
            ->orderBy('filename')
            ->paginate(10);
    }

    /**
     * @param int $id
     * @return Image|null
     */
    public function show(int $id):? Image
    {
        $image = Image::find($id);

        if (!$image) {
            return null;
        }

        return $image;
    }

    /**
     * Добавить картинку
     *
     * @param array $data
     * @return Model
     */
    public function store(array $data): Model
    {
        $file = $data['file'];
        $fileName = Image::generateFilename();
        $fileExt = $file->extension();
        Storage::disk('public')
            ->put($data['path'] . DIRECTORY_SEPARATOR . $fileName . '.' . $fileExt,
                file_get_contents($file));

        return Image::create([

            'path' => $data['path'],
            'filename' => $fileName,
            'ext' => $fileExt,
            'size' => $file->getSize(),
        ]);
    }

    /**
     * Удаление картинки
     *
     * @param int $id
     * @return void
     */
    public function destroy(int $id): void
    {
        $image = Image::find($id);

        if ($image) {
            $filePath = $image->full_path;

            if (Storage::disk(env('STORAGE_DRIVER_FOR_IMAGES'))->exists($filePath)) {
                Storage::disk(env('STORAGE_DRIVER_FOR_IMAGES'))->delete($filePath);
            }

            $image->delete();
        }
    }
}
