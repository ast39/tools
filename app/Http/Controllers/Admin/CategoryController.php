<?php

namespace App\Http\Controllers\Admin;

use App\Http\Filters\Admin\CategoryFilter;
use App\Http\Requests\Admin\Category\CategoryFilterRequest;
use App\Http\Requests\Admin\Category\CategoryStoreRequest;
use App\Http\Requests\Admin\Category\CategoryUpdateRequest;
use App\Http\Traits\Dictionarable;
use App\Models\Category;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


/**
 * Контроллер работы с категориями
 */
class CategoryController extends Controller {

    use Dictionarable;


    public function __construct()
    {
        $this->middleware('access.admin');
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

        $categories = Category::with('sphere')
            ->filter($filter)
            ->orderBy('id')
            ->paginate(10);

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
        $category = Category::with(['sphere', 'services'])
            ->findOrFail($id);

        return view('admin.categories.show', [
            'category' => $category,
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
        $data = $request->validated();

        Category::create($data);

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
        $category = Category::findOrFail($id);

        return view('admin.categories.edit', [
            'category' => $category,
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
        $data = $request->validated();

        $category = Category::findOrFail($id);

        $category->update($data);

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
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect()->route('admin.category.index');
    }
}
