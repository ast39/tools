<?php

namespace App\Http\Controllers\Admin;

use App\Http\Filters\Admin\SphereFilter;
use App\Http\Requests\Admin\Sphere\SphereFilterRequest;
use App\Http\Requests\Admin\Sphere\SphereStoreRequest;
use App\Http\Requests\Admin\Sphere\SphereUpdateRequest;
use App\Models\Sphere;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;


/**
 * Контроллер работы со сферами
 */
class SphereController extends Controller {

    public function __construct()
    {
        $this->middleware('access.admin');
    }

    /**
     * Список сфер
     *
     * @param SphereFilterRequest $request
     * @return View
     * @throws BindingResolutionException
     */
    public function index(SphereFilterRequest $request): View
    {
        $data = $request->validated();

        $filter = app()->make(SphereFilter::class, [
            'queryParams' => $data
        ]);

        $spheres = Sphere::filter($filter)
            ->orderBy('id')
            ->paginate(10);

        return view('admin.spheres.index', [
            'spheres' => $spheres,
        ]);
    }

    /**
     * Информация по сфере
     *
     * @param int $id
     * @return View
     */
    public function show(int $id): View
    {
        $sphere = Sphere::findOrFail($id);

        return view('admin.spheres.show', [
            'sphere' => $sphere,
        ]);
    }

    /**
     * Форма добавления сферы
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.spheres.create');
    }

    /**
     * Сохранение новой сферы
     *
     * @param SphereStoreRequest $request
     * @return RedirectResponse
     */
    public function store(SphereStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        Sphere::create($data);

        return redirect()->route('admin.sphere.index');
    }

    /**
     * Форма редактирования сферы
     *
     * @param int $id
     * @return View
     */
    public function edit(int $id): View
    {
        $sphere = Sphere::findOrFail($id);

        return view('admin.spheres.edit', [
            'sphere' => $sphere,
        ]);
    }

    /**
     * Обновление сферы
     *
     * @param SphereUpdateRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(SphereUpdateRequest $request, int $id): RedirectResponse
    {
        $data = $request->validated();

        $sphere = Sphere::findOrFail($id);

        $sphere->update($data);

        return redirect()->route('admin.sphere.index');
    }

    /**
     * Удалить сферу
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id): RedirectResponse
    {
        $sphere = Sphere::findOrFail($id);

        $sphere->delete();

        return redirect()->route('admin.sphere.index');
    }
}
