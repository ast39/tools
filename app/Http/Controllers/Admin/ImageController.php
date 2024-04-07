<?php

namespace App\Http\Controllers\Admin;

use App\Http\Filters\Admin\ImageFilter;
use App\Http\Requests\Admin\Image\ImageFilterRequest;
use App\Http\Requests\Admin\Image\ImageStoreRequest;
use App\Http\Services\ImageService;
use App\Http\Traits\Dictionarable;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


/**
 * Контроллер работы с картинками
 */
class ImageController extends Controller {

    use Dictionarable;


    protected ImageService $imageService;


    public function __construct(ImageService $service)
    {
        $this->middleware('access.admin');

        $this->imageService = $service;
    }

    /**
     * Список картинок
     *
     * @param ImageFilterRequest $request
     * @return View
     * @throws BindingResolutionException
     */
    public function index(ImageFilterRequest $request): View
    {
        $data = $request->validated();

        $filter = app()->make(ImageFilter::class, [
            'queryParams' => array_filter($data)
        ]);

        $images = $this->imageService->getAll($filter);

        return view('admin.images.index', [
            'images' => $images,
        ]);
    }

    /**
     * Информация по картинке
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $image = $this->imageService->show($id);

        return view('admin.images.show', [
            'image' => $image,
        ]);
    }

    /**
     * Форма добавления картинки
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.images.create', [
            'spheres' => $this->sphereList(),
        ]);
    }

    /**
     * Сохранение новой категории
     *
     * @param ImageStoreRequest $request
     * @return RedirectResponse
     */
    public function store(ImageStoreRequest $request): RedirectResponse
    {
        $this->imageService->store($request->validated());

        return redirect()->route('admin.image.index');
    }

    /**
     * Удалить категорию
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $this->imageService->destroy($id);

        return redirect()->route('admin.image.index');
    }
}
