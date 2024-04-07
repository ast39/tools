<?php

namespace App\Http\Controllers\Admin;

use App\Http\Filters\Admin\SphereFilter;
use App\Http\Requests\Admin\Sphere\SphereFilterRequest;
use App\Http\Requests\Admin\Sphere\SphereStoreRequest;
use App\Http\Requests\Admin\Sphere\SphereUpdateRequest;
use App\Http\Services\SphereService;
use App\Http\Traits\Dictionarable;
use App\Models\Sphere;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


/**
 * Контроллер работы со сферами
 */
class SphereController extends Controller {

    use Dictionarable;


    protected SphereService $sphereService;

    public function __construct(SphereService $service)
    {
        $this->middleware('access.admin');

        $this->sphereService = $service;
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

        $spheres = $this->sphereService->getAll($filter);

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
        return view('admin.spheres.show', [
            'sphere' => $this->sphereService->getById($id),
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
        $this->sphereService->create($request->validated());

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
        return view('admin.spheres.edit', [
            'sphere' => $this->sphereService->getById($id),
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
        $this->sphereService->update($id, $request->validated());

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
        $this->sphereService->delete($id);

        return redirect()->route('admin.sphere.index');
    }
}
