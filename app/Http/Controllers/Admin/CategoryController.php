<?php

namespace App\Http\Controllers\Admin;

use App\Http\Filters\Admin\CategoryFilter;
use App\Http\Requests\Admin\Category\CategoryFilterRequest;
use App\Http\Requests\Admin\Category\CategoryStoreRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;
use App\Http\Services\CategoryService;
use App\Http\Traits\Dictionarable;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


/**
 * Контроллер работы с категориями
 */
class CategoryController extends Controller {

    use Dictionarable;


    protected CategoryService $categoryService;


    public function __construct(CategoryService $service)
    {
        $this->middleware('access.admin');

        $this->categoryService = $service;
    }

    /**
     * Список категорий
     *
     * @param CategoryFilterRequest $request
     * @return View
     * @throws BindingResolutionException
     */
    public function index(CategoryFilterRequest $request): View
    {
        $data = $request->validated();

        $filter = app()->make(CategoryFilter::class, [
            'queryParams' => array_filter($data)
        ]);

        $categories = $this->categoryService->getAll($filter);

        return view('admin.categories.index', [
            'categories' => $categories,
            'spheres' => $this->sphereList(),
        ]);
    }

    /**
     * Информация по категории
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        return view('admin.categories.show', [
            'category' => $this->categoryService->getById($id),
        ]);
    }

    /**
     * Форма добавления категории
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.categories.create', [
            'spheres' => $this->sphereList(),
        ]);
    }

    /**
     * Сохранение новой категории
     *
     * @param CategoryStoreRequest $request
     * @return RedirectResponse
     */
    public function store(CategoryStoreRequest $request): RedirectResponse
    {
        $this->categoryService->create($request->validated());

        return redirect()->route('admin.category.index');
    }

    /**
     * Форма редактирования категории
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        return view('admin.categories.edit', [
            'category' => $this->categoryService->getById($id),
            'spheres' => $this->sphereList(),
        ]);
    }

    /**
     * Обновление категории
     *
     * @param CategoryUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(CategoryUpdateRequest $request, int $id): RedirectResponse
    {
        $this->categoryService->update($id, $request->validated());

        return redirect()->route('admin.category.index');
    }

    /**
     * Удалить категорию
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $this->categoryService->delete($id);

        return redirect()->route('admin.category.index');
    }
}
